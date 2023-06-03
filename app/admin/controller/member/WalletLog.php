<?php
/*
 * @Author: Fox Blue
 * @Date: 2021-06-25 13:52:49
 * @LastEditTime: 2021-10-12 11:56:13
 * @Description: Forward, no stop
 */

namespace app\admin\controller\member;

use app\common\controller\AdminController;
use EasyAdmin\annotation\ControllerAnnotation;
use EasyAdmin\annotation\NodeAnotation;
use think\App;

/**
 * @ControllerAnnotation(title="财务：用户钱包日志")
 */
class WalletLog extends AdminController
{
    protected $sort = [
        'update_time' => 'desc',
        'id'   => 'desc',
    ];

    protected $relationSearch = true;

    public function __construct(App $app)
    {
        parent::__construct($app);

        $this->model = new \app\admin\model\MemberWalletLog();
        $this->modelwallet = new \app\admin\model\MemberWallet();
    }

    
    /**
     * @NodeAnotation(title="充值列表")
     */
    public function recharge()
    {
        if ($this->request->isAjax()) {
            if (input('selectFields')) {
                return $this->selectList();
            }
            if($this->adminInfo['is_team']==1){
                list($page, $limit, $where) = $this->buildTableParames([], $this->adminInfo['id'], 'memberUser');
            }else{
                list($page, $limit, $where) = $this->buildTableParames();
            }
            $count = $this->model
                ->withJoin(['productLists', 'memberUser', 'memberWallet'], 'LEFT')
                ->where($where)
                ->where('type',1)
                ->count();
            $list = $this->model
                ->withJoin(['productLists', 'memberUser', 'memberWallet'], 'LEFT')
                ->where($where)
                ->where('type',1)
                ->page($page, $limit)
                ->order($this->sort)
                ->select();
            $data = [
                'code'  => 0,
                'msg'   => '',
                'count' => $count,
                'data'  => $list,
            ];
            return json($data);
        }
        return $this->fetch();
    }

    /**
     * @NodeAnotation(title="充值处理")
     */
    public function erecharge($id)
    {
        $row = $this->model->find($id);
        empty($row) && $this->error('数据不存在');
        $row['coin'] = \app\admin\model\ProductLists::where('id',$row['product_id'])->value('title');
        $row['ex_money'] = \app\admin\model\MemberWallet::where('id',$row['wallet_id'])->value('ex_money');
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $post['do_uid'] = $this->adminInfo['id'];
            $post['do_time'] = time();
            if($post['status']==2){
                $post['before'] = $row['ex_money'];
                $after = bc_add($row['ex_money'],$row['all_account']);
                $post['after'] = $after;
            }
            try {
                $save = $row->save($post);
                if($post['status']==2){
                    $this->modelwallet->update(['ex_money'=>$after],['id'=>$row['wallet_id']]);
                    //返佣操作
                    $this->rebate($row['uid'],$row['product_id'],$row['all_account']);
                }
            } catch (\Exception $e) {
                $this->error('保存失败');
            }
            if ($save) {
                $this->success('保存成功');
            } else {
                $this->error('保存失败');
            }
        }
        $wallet_log_status = \think\facade\Config::get('allset.wallet_log_status');
        $this->assign('wallet_log_status', $wallet_log_status);
        $this->assign([
            'id'          => $id,
            'row'         => $row,
        ]);
        return $this->fetch();
    }
    
    public function rebate($uid,$product_id,$all_account){
        $flag = true;
        $index = 1;
        while($flag){
                $level_id=\app\admin\model\MemberUser::where('id',$uid)->where('admin_id',0)->value('level_id');
                
                if($level_id != 0){
                    $proportion=\app\admin\model\MemberConfig::where('name','member_recharge_'.$index)->value('value');
                     if ($proportion) {
                        //比例 
                        $proportion =  $proportion / 100;
                        $cm_money = \app\admin\model\MemberWallet::where('uid',$level_id)->where('product_id',$product_id)->value('cm_money');
                        $wallet_id = \app\admin\model\MemberWallet::where('uid',$level_id)->where('product_id',$product_id)->value('id');
                        $mul = bc_mul($all_account,$proportion);
                        $after = bc_add($cm_money,$mul);
                        //var_dump($after);
                        //操作余额
                        $this->modelwallet::where('uid',$level_id)->where('product_id',$product_id)->update(['cm_money'=>$after]);
                        //开始记录日志
                        //$now_up_money = bc_add($user_base_wallet['up_money'], $rate_account);
                        //$m_wallet->where('id', $user_base_wallet['id'])->update(['up_money' => $now_up_money]);
                        $is_test=\app\admin\model\MemberUser::where('id',$level_id)->where('admin_id',0)->value('is_test');
                        $logdata['account'] = $mul;
                        $logdata['wallet_id'] = $wallet_id;
                        $logdata['product_id'] = $product_id;
                        $logdata['uid'] = $level_id;
                        $logdata['is_test'] = $is_test;
                        $logdata['before'] = $cm_money;
                        $logdata['after'] = $after;
                        $logdata['account_sxf'] = 0;
                        $logdata['all_account'] = bc_sub($logdata['account'], $logdata['account_sxf']);
                        $logdata['type'] = 18;
                       
                        //购买理财
                        $logdata['title'] = '充值返佣';
                        if($index == 1){
                            $logdata['remark'] = "下级充值返佣".$mul;
                        }else if($index == 2){
                            $logdata['remark'] = "下下级充值返佣".$mul;
                        }else if($index == 3){
                            $logdata['remark'] = "下下下级充值返佣".$mul;
                        }
                        
                        $logdata['order_type'] = 18;
                        //收益返息
                        $logdata['order_id'] = time();
                        $logdata['status'] = 2;
                        //var_dump($logdata);
                       $inlog = $this->model->save($logdata);
                    }
                    //再查找它的上级
                    $uid = $level_id;
                    $index = $index + 1;
                }else{
                    $flag = false;
                }        
        }
    }

    /**
     * @NodeAnotation(title="查看处理")
     */
    public function orecharge($id)
    {
        $row = $this->model->find($id);
        empty($row) && $this->error('数据不存在');
        $row['coin'] = \app\admin\model\ProductLists::where('id',$row['product_id'])->value('title');
        $row['ex_money'] = \app\admin\model\MemberWallet::where('id',$row['wallet_id'])->value('ex_money');
        
        $wallet_log_status = \think\facade\Config::get('allset.wallet_log_status');
        $this->assign('wallet_log_status', $wallet_log_status);
        $this->assign([
            'id'          => $id,
            'row'         => $row,
        ]);
        return $this->fetch();
    }

    /**
     * @NodeAnotation(title="提现列表")
     */
    public function withdraw()
    {
        if ($this->request->isAjax()) {
            if (input('selectFields')) {
                return $this->selectList();
            }
            if($this->adminInfo['is_team']==1){
                list($page, $limit, $where) = $this->buildTableParames([], $this->adminInfo['id'], 'memberUser');
            }else{
                list($page, $limit, $where) = $this->buildTableParames();
            }
            $count = $this->model
                ->withJoin(['productLists', 'memberUser', 'memberWallet'], 'LEFT')
                ->where($where)
                ->where('type',2)
                ->count();
            $list = $this->model
                ->withJoin(['productLists', 'memberUser', 'memberWallet'], 'LEFT')
                ->where($where)
                ->where('type',2)
                ->page($page, $limit)
                ->order($this->sort)
                ->select();
            $data = [
                'code'  => 0,
                'msg'   => '',
                'count' => $count,
                'data'  => $list,
            ];
            return json($data);
        }
        return $this->fetch();
    }

    /**
     * @NodeAnotation(title="提现处理")
     */
    public function ewithdraw($id)
    {
        $row = $this->model->find($id);
        empty($row) && $this->error('数据不存在');
        $row['coin'] = \app\admin\model\ProductLists::where('id',$row['product_id'])->value('title');
        $walletinfo = \app\admin\model\MemberWallet::where('id',$row['wallet_id'])->field('ex_money,lock_ex_money')->find();
        $row['ex_money'] =$walletinfo['ex_money'];
        $row['lock_ex_money'] =$walletinfo['lock_ex_money'];
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $post['do_uid'] = $this->adminInfo['id'];
            $post['do_time'] = time();
            if($post['status']==2){
                $post['before'] = bc_add($row['ex_money'],$row['account']);
                $post['after'] = $row['ex_money'];
            }
            if($post['status']==3){
                $post['before'] = bc_add($row['ex_money'],$row['account']);
                $post['after'] = bc_add($row['ex_money'],$row['account']);
            }
            $after = bc_sub($row['lock_ex_money'],$row['account']);
            try {
                if($save = $row->save($post)){
                    if($post['status']==2){
                        $this->modelwallet->update(['lock_ex_money'=>$after],['id'=>$row['wallet_id']]);
                    }
                    if($post['status']==3){
                        $back = bc_add($row['ex_money'],$row['account']);
                        $this->modelwallet->update(['ex_money'=>$back,'lock_ex_money'=>$after],['id'=>$row['wallet_id']]);
                    }
                }
            } catch (\Exception $e) {
                $this->error('保存失败');
            }
            if ($save) {
                $this->success('保存成功');
            } else {
                $this->error('保存失败');
            }
        }
        $wallet_log_status = \think\facade\Config::get('allset.wallet_log_status');
        $this->assign('wallet_log_status', $wallet_log_status);
        $this->assign([
            'id'          => $id,
            'row'         => $row,
        ]);
        return $this->fetch();
    }

    /**
     * @NodeAnotation(title="划转明细")
     */
    public function transfer()
    {
        if ($this->request->isAjax()) {
            if (input('selectFields')) {
                return $this->selectList();
            }
            if($this->adminInfo['is_team']==1){
                list($page, $limit, $where) = $this->buildTableParames([], $this->adminInfo['id'], 'memberUser');
            }else{
                list($page, $limit, $where) = $this->buildTableParames();
            }
            $count = $this->model
                ->withJoin(['productLists', 'memberUser', 'memberWallet'], 'LEFT')
                ->where($where)
                ->where('type',3)
                ->count();
            $list = $this->model
                ->withJoin(['productLists', 'memberUser', 'memberWallet'], 'LEFT')
                ->where($where)
                ->where('type',3)
                ->page($page, $limit)
                ->order($this->sort)
                ->select();
            $data = [
                'code'  => 0,
                'msg'   => '',
                'count' => $count,
                'data'  => $list,
            ];
            return json($data);
        }
        return $this->fetch();
    }

    /**
     * @NodeAnotation(title="币币订单日志")
     */
    public function orders()
    {
        if ($this->request->isAjax()) {
            if (input('selectFields')) {
                return $this->selectList();
            }
            if($this->adminInfo['is_team']==1){
                list($page, $limit, $where) = $this->buildTableParames([], $this->adminInfo['id'], 'memberUser');
            }else{
                list($page, $limit, $where) = $this->buildTableParames();
            }
            $count = $this->model
                ->withJoin(['productLists', 'memberUser', 'memberWallet'], 'LEFT')
                ->where($where)
                ->where('type',4)
                ->count();
            $list = $this->model
                ->withJoin(['productLists', 'memberUser', 'memberWallet'], 'LEFT')
                ->where($where)
                ->where('type',4)
                ->page($page, $limit)
                ->order($this->sort)
                ->select();
            $data = [
                'code'  => 0,
                'msg'   => '',
                'count' => $count,
                'data'  => $list,
            ];
            return json($data);
        }
        return $this->fetch();
    }

    /**
     * @NodeAnotation(title="合约订单日志")
     */
    public function leverdeal()
    {
        if ($this->request->isAjax()) {
            if (input('selectFields')) {
                return $this->selectList();
            }
            if($this->adminInfo['is_team']==1){
                list($page, $limit, $where) = $this->buildTableParames([], $this->adminInfo['id'], 'memberUser');
            }else{
                list($page, $limit, $where) = $this->buildTableParames();
            }
            $count = $this->model
                ->withJoin(['productLists', 'memberUser', 'memberWallet'], 'LEFT')
                ->where($where)
                ->where('type',5)
                ->count();
            $list = $this->model
                ->withJoin(['productLists', 'memberUser', 'memberWallet'], 'LEFT')
                ->where($where)
                ->where('type',5)
                ->page($page, $limit)
                ->order($this->sort)
                ->select();
            $data = [
                'code'  => 0,
                'msg'   => '',
                'count' => $count,
                'data'  => $list,
            ];
            return json($data);
        }
        return $this->fetch();
    }

    /**
     * @NodeAnotation(title="期权订单日志")
     */
    public function seconds()
    {
        if ($this->request->isAjax()) {
            if (input('selectFields')) {
                return $this->selectList();
            }
            if($this->adminInfo['is_team']==1){
                list($page, $limit, $where) = $this->buildTableParames([], $this->adminInfo['id'], 'memberUser');
            }else{
                list($page, $limit, $where) = $this->buildTableParames();
            }
            $count = $this->model
                ->withJoin(['productLists', 'memberUser', 'memberWallet'], 'LEFT')
                ->where($where)
                ->where('type',6)
                ->count();
            $list = $this->model
                ->withJoin(['productLists', 'memberUser', 'memberWallet'], 'LEFT')
                ->where($where)
                ->where('type',6)
                ->page($page, $limit)
                ->order($this->sort)
                ->select();
            $data = [
                'code'  => 0,
                'msg'   => '',
                'count' => $count,
                'data'  => $list,
            ];
            return json($data);
        }
        return $this->fetch();
    }

    /**
     * @NodeAnotation(title="理财订单日志")
     */
    public function good()
    {
        if ($this->request->isAjax()) {
            if (input('selectFields')) {
                return $this->selectList();
            }
            if($this->adminInfo['is_team']==1){
                list($page, $limit, $where) = $this->buildTableParames([], $this->adminInfo['id'], 'memberUser');
            }else{
                list($page, $limit, $where) = $this->buildTableParames();
            }
            $count = $this->model
                ->withJoin(['memberUser', 'memberWallet'], 'LEFT')
                ->where($where)
                ->where('type',7)
                ->count();
            $list = $this->model
                ->withJoin(['memberUser', 'memberWallet'], 'LEFT')
                ->where($where)
                ->where('type',7)
                ->page($page, $limit)
                ->order($this->sort)
                ->select();
            $data = [
                'code'  => 0,
                'msg'   => '',
                'count' => $count,
                'data'  => $list,
            ];
            return json($data);
        }
        return $this->fetch();
    }

    /**
     * @NodeAnotation(title="认购订单日志")
     */
    public function ieorg()
    {
        if ($this->request->isAjax()) {
            if (input('selectFields')) {
                return $this->selectList();
            }
            if($this->adminInfo['is_team']==1){
                list($page, $limit, $where) = $this->buildTableParames([], $this->adminInfo['id'], 'memberUser');
            }else{
                list($page, $limit, $where) = $this->buildTableParames();
            }
            $count = $this->model
                ->withJoin(['productLists', 'memberUser', 'memberWallet'], 'LEFT')
                ->where($where)
                ->where('type',8)
                ->count();
            $list = $this->model
                ->withJoin(['productLists', 'memberUser', 'memberWallet'], 'LEFT')
                ->where($where)
                ->where('type',8)
                ->page($page, $limit)
                ->order($this->sort)
                ->select();
            if($list){
                foreach($list as $k => $v){
                    $ieoid = \app\admin\model\OrderIeorg::where('id',$v['order_id'])->value('ieo_id');
                    $list[$k]['ieotitle'] = \app\admin\model\IeoLists::where('id',$ieoid)->value('title');
                }
            }
            $data = [
                'code'  => 0,
                'msg'   => '',
                'count' => $count,
                'data'  => $list,
            ];
            return json($data);
        }
        return $this->fetch();
    }

    /**
     * @NodeAnotation(title="挖矿订单日志")
     */
    public function winer()
    {
        if ($this->request->isAjax()) {
            if (input('selectFields')) {
                return $this->selectList();
            }
            if($this->adminInfo['is_team']==1){
                list($page, $limit, $where) = $this->buildTableParames([], $this->adminInfo['id'], 'memberUser');
            }else{
                list($page, $limit, $where) = $this->buildTableParames();
            }
            $count = $this->model
                ->withJoin(['productLists', 'memberUser', 'memberWallet'], 'LEFT')
                ->where($where)
                ->where('type',9)
                ->count();
            $list = $this->model
                ->withJoin(['productLists', 'memberUser', 'memberWallet'], 'LEFT')
                ->where($where)
                ->where('type',9)
                ->page($page, $limit)
                ->order($this->sort)
                ->select();
            $data = [
                'code'  => 0,
                'msg'   => '',
                'count' => $count,
                'data'  => $list,
            ];
            return json($data);
        }
        return $this->fetch();
    }

    /**
     * @NodeAnotation(title="期权返佣日志")
     */
    public function cmseconds()
    {
        if ($this->request->isAjax()) {
            if (input('selectFields')) {
                return $this->selectList();
            }
            if($this->adminInfo['is_team']==1){
                list($page, $limit, $where) = $this->buildTableParames([], $this->adminInfo['id'], 'memberUser');
            }else{
                list($page, $limit, $where) = $this->buildTableParames();
            }
            $count = $this->model
                ->withJoin(['productLists', 'memberUser', 'memberWallet'], 'LEFT')
                ->where($where)
                ->where('type',12)
                ->count();
            $list = $this->model
                ->withJoin(['productLists', 'memberUser', 'memberWallet'], 'LEFT')
                ->where($where)
                ->where('type',12)
                ->page($page, $limit)
                ->order($this->sort)
                ->select();
            $data = [
                'code'  => 0,
                'msg'   => '',
                'count' => $count,
                'data'  => $list,
            ];
            return json($data);
        }
        return $this->fetch();
    }

    /**
     * @NodeAnotation(title="理财返佣日志")
     */
    public function cmgoods()
    {
        if ($this->request->isAjax()) {
            if (input('selectFields')) {
                return $this->selectList();
            }
            if($this->adminInfo['is_team']==1){
                list($page, $limit, $where) = $this->buildTableParames([], $this->adminInfo['id'], 'memberUser');
            }else{
                list($page, $limit, $where) = $this->buildTableParames();
            }
            $count = $this->model
                ->withJoin(['productLists', 'memberUser', 'memberWallet'], 'LEFT')
                ->where($where)
                ->where('type',11)
                ->count();
            $list = $this->model
                ->withJoin(['productLists', 'memberUser', 'memberWallet'], 'LEFT')
                ->where($where)
                ->where('type',11)
                ->page($page, $limit)
                ->order($this->sort)
                ->select();
            $data = [
                'code'  => 0,
                'msg'   => '',
                'count' => $count,
                'data'  => $list,
            ];
            return json($data);
        }
        return $this->fetch();
    }
    
    public function withdrawnotice()
    {
        $count = $this->model->where('status',1)->where('type',2)->count();
        $data = [
            'code'  => 0,
            'msg'   => '',
            'count' => $count,
        ];
        return json($data);
    }

}