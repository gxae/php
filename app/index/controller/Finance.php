<?php 
/*
 * @Author: Fox Blue
 * @Date: 2021-06-28 14:41:28
 * @LastEditTime: 2021-10-12 12:04:14
 * @Description: Forward, no stop
 */
namespace app\index\controller;

use app\admin\model\OrderSeconds;
use app\common\controller\IndexController;
use think\App;
use think\facade\Env;
use think\facade\Db;
use app\common\FoxKline;
use app\common\FoxCommon;

class Finance extends IndexController
{
    public function __construct(App $app)
    {
        parent::__construct($app);
        $sum_ex = 0;
        $sum_le = 0;
        $sum_op = 0;
        $sum_up = 0;
        $sum_cm = 0;
        $all_ex = Db::name('member_wallet')
        ->alias('a')
        ->where('a.uid',session('member.id'))
        ->where('a.ex_money','>',0)
        ->join('product_lists p ','p.id= a.product_id')
        ->field('a.ex_money,p.close')
        ->select();
        foreach($all_ex as $k => $v){
            $sum_ex = $sum_ex+ FoxKline::get_me_price_usdt_to_usd_close($v['ex_money'],$v['close'],8);
        }
        $all_le = Db::name('member_wallet')
        ->alias('a')
        ->where('a.uid',session('member.id'))
        ->where('a.le_money','>',0)
        ->join('product_lists p ','p.id= a.product_id')
        ->field('a.le_money,p.close')
        ->select();
        foreach($all_le as $k => $v){
            $sum_le = $sum_le+FoxKline::get_me_price_usdt_to_usd_close($v['le_money'],$v['close'],8);
        }
        $all_op = Db::name('member_wallet')
        ->alias('a')
        ->where('a.uid',session('member.id'))
        ->where('a.op_money','>',0)
        ->join('product_lists p ','p.id= a.product_id')
        ->field('a.op_money,p.close')
        ->select();
        foreach($all_op as $k => $v){
            $sum_op = $sum_op+FoxKline::get_me_price_usdt_to_usd_close($v['op_money'],$v['close'],8);
        }
        $all_up = Db::name('member_wallet')
        ->alias('a')
        ->where('a.uid',session('member.id'))
        ->where('a.up_money','>',0)
        ->join('product_lists p ','p.id= a.product_id')
        ->field('a.up_money,p.close')
        ->select();
        foreach($all_up as $k => $v){
            $sum_up = $sum_up+FoxKline::get_me_price_usdt_to_usd_close($v['up_money'],$v['close'],8);
        }
        $all_cm = Db::name('member_wallet')
        ->alias('a')
        ->where('a.uid',session('member.id'))
        ->where('a.cm_money','>',0)
        ->join('product_lists p ','p.id= a.product_id')
        ->field('a.cm_money,p.close')
        ->select();
        foreach($all_cm as $k => $v){
            $sum_cm = $sum_cm+FoxKline::get_me_price_usdt_to_usd_close($v['cm_money'],$v['close'],8);
        }
        $all_sum_usd = $sum_ex+$sum_le+$sum_op+$sum_up+$sum_cm;
        $this->assign('all_sum_usd',$all_sum_usd);

    }

    public function index()
    {
        $walletlist = Db::name('member_wallet')
        ->alias('a')
        ->join('member_user m ','m.id= a.uid')
        ->where('a.uid',session('member.id'))
        ->join('product_lists p ','p.id= a.product_id')
        ->where('p.types','like','%1%')
        ->order('p.base','desc')
        ->field('a.*,p.title,p.base,p.code,p.pay_address,p.omni_address,p.trc_address,p.erc_address,p.withdraw_member,p.withdraw_sx_fee,p.close,p.withdraw_erc_sxf,p.withdraw_trc_sxf,p.withdraw_omni_sxf')
        ->select();

        if(isset($walletlist)){
            $walletlist = $walletlist->ToArray();
            $sum_usd = 0;
            foreach($walletlist as $k => $v){
                $walletlist[$k]['ex_usd'] = FoxKline::get_me_price_usdt_to_usd_close($v['ex_money'],$v['close'],8);
                $sum_usd = $sum_usd+$walletlist[$k]['ex_usd'];
            }
        }
        $this->assign('walletlist',$walletlist);
        $this->assign('sum_usd',$sum_usd);
        $web_name = lang('finance.ex_title').'-'.$this->web_name;
        $this->assign(['web_name'=>$web_name,'topmenu'=>'finance','leftmenu'=>'ex']);
        return $this->fetch();
    }

    public function lefinance()
    {
        $walletlist = Db::name('member_wallet')
        ->alias('a')
        ->join('member_user m ','m.id= a.uid')
        ->where('a.uid',session('member.id'))
        ->join('product_lists p ','p.id= a.product_id')
        ->where('p.types','like','%2%')
        ->order('p.base','desc')
        ->field('a.*,p.title,p.code,p.close')
        ->select();

        if(isset($walletlist)){
            $walletlist = $walletlist->ToArray();
            $sum_usd = 0;
            foreach($walletlist as $k => $v){
                $walletlist[$k]['le_usd'] = FoxKline::get_me_price_usdt_to_usd_close($v['le_money'],$v['close'],8);
                $sum_usd = $sum_usd+$walletlist[$k]['le_usd'];
            }
        }

        $this->assign('walletlist',$walletlist);
        $this->assign('sum_usd',$sum_usd);
        $web_name = lang('finance.le_title').'-'.$this->web_name;
        $this->assign(['web_name'=>$web_name,'topmenu'=>'finance','leftmenu'=>'le']);
        return $this->fetch();
    }

    public function opfinance()
    {
        $walletlist = Db::name('member_wallet')
        ->alias('a')
        ->join('member_user m ','m.id= a.uid')
        ->where('a.uid',session('member.id'))
        ->join('product_lists p ','p.id= a.product_id')
        ->where('p.types','like','%3%')
        ->where('p.base','=','1')
        ->order('p.base','desc')
        ->field('a.*,p.title,p.code,p.close')
        ->select();

        if(isset($walletlist)){
            $walletlist = $walletlist->ToArray();
            $sum_usd = 0;
            foreach($walletlist as $k => $v){
                $walletlist[$k]['op_usd'] = FoxKline::get_me_price_usdt_to_usd_close($v['op_money'],$v['close'],8);
                $sum_usd = $sum_usd+$walletlist[$k]['op_usd'];
            }
        }

        $this->assign('walletlist',$walletlist);
        $this->assign('sum_usd',$sum_usd);
        $web_name = lang('finance.op_title').'-'.$this->web_name;
        $this->assign(['web_name'=>$web_name,'topmenu'=>'finance','leftmenu'=>'op']);
        return $this->fetch();
    }

    public function upfinance()
    {
        $walletlist = Db::name('member_wallet')
        ->alias('a')
        ->join('member_user m ','m.id= a.uid')
        ->where('a.uid',session('member.id'))
        ->join('product_lists p ','p.id= a.product_id')
        ->where('p.types','like','%4%')
        ->order('p.base','desc')
        ->field('a.*,p.title,p.code,p.close')
        ->select();

        if(isset($walletlist)){
            $walletlist = $walletlist->ToArray();
            $sum_usd = 0;
            foreach($walletlist as $k => $v){
                $walletlist[$k]['up_usd'] = FoxKline::get_me_price_usdt_to_usd_close($v['up_money'],$v['close'],8);
                $sum_usd = $sum_usd+$walletlist[$k]['up_usd'];
            }
        }

        $this->assign('walletlist',$walletlist);
        $this->assign('sum_usd',$sum_usd);
        $web_name = lang('finance.up_title').'-'.$this->web_name;
        $this->assign(['web_name'=>$web_name,'topmenu'=>'finance','leftmenu'=>'up']);
        return $this->fetch();
    }

    public function cmfinance()
    {
        $walletlist = Db::name('member_wallet')
        ->alias('a')
        ->join('member_user m ','m.id= a.uid')
        ->where('a.uid',session('member.id'))
        ->join('product_lists p ','p.id= a.product_id')
        ->where('p.base','=','1')
        ->order('p.base','desc')
        ->field('a.*,p.title,p.code,p.close')
        ->select();

        if(isset($walletlist)){
            $walletlist = $walletlist->ToArray();
            $sum_usd = 0;
            foreach($walletlist as $k => $v){
                $walletlist[$k]['cm_usd'] = FoxKline::get_me_price_usdt_to_usd_close($v['cm_money'],$v['close'],8);
                $sum_usd = $sum_usd+$walletlist[$k]['cm_usd'];
            }
        }

        $this->assign('walletlist',$walletlist);
        $this->assign('sum_usd',$sum_usd);
        $web_name = lang('finance.cm_title').'-'.$this->web_name;
        $this->assign(['web_name'=>$web_name,'topmenu'=>'finance','leftmenu'=>'cm']);
        return $this->fetch();
    }

    public function transfer()
    {
        if(request()->isPost()){
            $post = $this->request->post();
            $indata = [];
            $indata['account'] = $post['account'];
            $indata['from'] = $post['before_type'];
            $indata['to'] = $post['after_type'];
            $indata['product_id'] = $post['product_id'];
            if($indata['account'] <= 0){
                return $this->error(lang('finance.transfer_num_check'));
            }
            if(!$indata['product_id']){
                return $this->error(lang('finance.transfer_product_check'));
            }
            $cointitle = \app\admin\model\ProductLists::where('id',$indata['product_id'])->value('title');
            if($indata['from'] == 1){
                $walletinfo = \app\admin\model\MemberWallet::where('product_id',$indata['product_id'])->where('uid',$this->memberInfo['id'])->field('ex_money,le_money,op_money,up_money,cm_money,id')->find();
                if($walletinfo['ex_money'] < $indata['account']){
                    return $this->error(lang('coin_wallet.'.$indata['from']).fox_all_replace(lang('finance.transfer_account_noenough'),$indata['account'].$cointitle));
                }
            }else if($indata['from'] == 2){
                $walletinfo = \app\admin\model\MemberWallet::where('product_id',$indata['product_id'])->where('uid',$this->memberInfo['id'])->field('ex_money,le_money,op_money,up_money,cm_money,id')->find();
                if($walletinfo['le_money'] < $indata['account']){
                    return $this->error(lang('coin_wallet.'.$indata['from']).fox_all_replace(lang('finance.transfer_account_noenough'),$indata['account'].$cointitle));
                }
            }else if($indata['from'] == 3){
                $walletinfo = \app\admin\model\MemberWallet::where('product_id',$indata['product_id'])->where('uid',$this->memberInfo['id'])->field('ex_money,le_money,op_money,up_money,cm_money,id')->find();
                if($walletinfo['op_money'] < $indata['account']){
                    return $this->error(lang('coin_wallet.'.$indata['from']).fox_all_replace(lang('finance.transfer_account_noenough'),$indata['account'].$cointitle));
                }
            }else if($indata['from'] == 4){
                $walletinfo = \app\admin\model\MemberWallet::where('product_id',$indata['product_id'])->where('uid',$this->memberInfo['id'])->field('ex_money,le_money,op_money,up_money,cm_money,id')->find();
                if($walletinfo['up_money'] < $indata['account']){
                    return $this->error(lang('coin_wallet.'.$indata['from']).fox_all_replace(lang('finance.transfer_account_noenough'),$indata['account'].$cointitle));
                }
            }else if($indata['from'] == 5){
                $walletinfo = \app\admin\model\MemberWallet::where('product_id',$indata['product_id'])->where('uid',$this->memberInfo['id'])->field('ex_money,le_money,op_money,up_money,cm_money,id')->find();
                if($walletinfo['cm_money'] < $indata['account']){
                    return $this->error(lang('coin_wallet.'.$indata['from']).fox_all_replace(lang('finance.transfer_account_noenough'),$indata['account'].$cointitle));
                }
            }
            $indata['wallet_id'] = $walletinfo['id'];
            $indata['uid'] = session('member.id');
            $indata['is_test'] = session('member.is_test');
            $indata['type'] = 3;
            $indata['status'] = 2;
            $indata['title'] = $cointitle.':'.lang('coin_wallet.'.$indata['from']).'-'.lang('coin_wallet.'.$indata['to']);
            $indata['account_sxf'] = 0;
            $indata['all_account'] = bc_sub($indata['account'],$indata['account_sxf']);
            
            $check = request()->checkToken('__token__');
            if(false === $check) {
                return $this->error(lang('public.do_fail'));
            }
            try {
                $this->modellog = new \app\admin\model\MemberWalletLog();
                $save = $this->modellog->save($indata);
                if($save){
                    $this->modelwallet = new \app\admin\model\MemberWallet();
                    if($indata['from'] == 1){
                        $a = bc_sub($walletinfo['ex_money'],$indata['all_account']);
                        if($indata['to'] == 2){
                            $b = bc_add($walletinfo['le_money'],$indata['all_account']);
                            $test = $this->modelwallet->update(['ex_money'=>$a,'le_money'=>$b],['id'=>$indata['wallet_id']]);
                        }else if($indata['to'] == 3){
                            $b = bc_add($walletinfo['op_money'],$indata['all_account']);
                            $test = $this->modelwallet->update(['ex_money'=>$a,'op_money'=>$b],['id'=>$indata['wallet_id']]);
                        }else if($indata['to'] == 4){
                            $b = bc_add($walletinfo['up_money'],$indata['all_account']);
                            $test = $this->modelwallet->update(['ex_money'=>$a,'up_money'=>$b],['id'=>$indata['wallet_id']]);
                        }else if($indata['to'] == 5){
                            $b = bc_add($walletinfo['cm_money'],$indata['all_account']);
                            $test = $this->modelwallet->update(['ex_money'=>$a,'cm_money'=>$b],['id'=>$indata['wallet_id']]);
                        }
                    }else if($indata['from'] == 2){
                        $a = bc_sub($walletinfo['le_money'],$indata['all_account']);
                        if($indata['to'] == 1){
                            $b = bc_add($walletinfo['ex_money'],$indata['all_account']);
                            $test = $this->modelwallet->update(['le_money'=>$a,'ex_money'=>$b],['id'=>$indata['wallet_id']]);
                        }else if($indata['to'] == 3){
                            $b = bc_add($walletinfo['op_money'],$indata['all_account']);
                            $test = $this->modelwallet->update(['le_money'=>$a,'op_money'=>$b],['id'=>$indata['wallet_id']]);
                        }else if($indata['to'] == 4){
                            $b = bc_add($walletinfo['up_money'],$indata['all_account']);
                            $test = $this->modelwallet->update(['le_money'=>$a,'up_money'=>$b],['id'=>$indata['wallet_id']]);
                        }else if($indata['to'] == 5){
                            $b = bc_add($walletinfo['cm_money'],$indata['all_account']);
                            $test = $this->modelwallet->update(['le_money'=>$a,'cm_money'=>$b],['id'=>$indata['wallet_id']]);
                        }
                    }else if($indata['from'] == 3){
                        $a = bc_sub($walletinfo['op_money'],$indata['all_account']);
                        if($indata['to'] == 1){
                            $b = bc_add($walletinfo['ex_money'],$indata['all_account']);
                            $test = $this->modelwallet->update(['ex_money'=>$b,'op_money'=>$a],['id'=>$indata['wallet_id']]);
                        }else if($indata['to'] == 2){
                            $b = bc_add($walletinfo['le_money'],$indata['all_account']);
                            $test = $this->modelwallet->update(['le_money'=>$b,'op_money'=>$a],['id'=>$indata['wallet_id']]);
                        }else if($indata['to'] == 4){
                            $b = bc_add($walletinfo['up_money'],$indata['all_account']);
                            $test = $this->modelwallet->update(['up_money'=>$b,'op_money'=>$a],['id'=>$indata['wallet_id']]);
                        }else if($indata['to'] == 5){
                            $b = bc_add($walletinfo['cm_money'],$indata['all_account']);
                            $test = $this->modelwallet->update(['cm_money'=>$b,'op_money'=>$a],['id'=>$indata['wallet_id']]);
                        }
                    }else if($indata['from'] == 4){
                        $a = bc_sub($walletinfo['up_money'],$indata['all_account']);
                        if($indata['to'] == 1){
                            $b = bc_add($walletinfo['ex_money'],$indata['all_account']);
                            $test = $this->modelwallet->update(['ex_money'=>$b,'up_money'=>$a],['id'=>$indata['wallet_id']]);
                        }else if($indata['to'] == 2){
                            $b = bc_add($walletinfo['le_money'],$indata['all_account']);
                            $test = $this->modelwallet->update(['le_money'=>$b,'up_money'=>$a],['id'=>$indata['wallet_id']]);
                        }else if($indata['to'] == 3){
                            $b = bc_add($walletinfo['op_money'],$indata['all_account']);
                            $test = $this->modelwallet->update(['op_money'=>$b,'up_money'=>$a],['id'=>$indata['wallet_id']]);
                        }else if($indata['to'] == 5){
                            $b = bc_add($walletinfo['cm_money'],$indata['all_account']);
                            $test = $this->modelwallet->update(['cm_money'=>$b,'up_money'=>$a],['id'=>$indata['wallet_id']]);
                        }
                    }else if($indata['from'] == 5){
                        $a = bc_sub($walletinfo['cm_money'],$indata['all_account']);
                        if($indata['to'] == 1){
                            $b = bc_add($walletinfo['ex_money'],$indata['all_account']);
                            $test = $this->modelwallet->update(['ex_money'=>$b,'cm_money'=>$a],['id'=>$indata['wallet_id']]);
                        }else if($indata['to'] == 2){
                            $b = bc_add($walletinfo['le_money'],$indata['all_account']);
                            $test = $this->modelwallet->update(['le_money'=>$b,'cm_money'=>$a],['id'=>$indata['wallet_id']]);
                        }else if($indata['to'] == 3){
                            $b = bc_add($walletinfo['op_money'],$indata['all_account']);
                            $test = $this->modelwallet->update(['op_money'=>$b,'cm_money'=>$a],['id'=>$indata['wallet_id']]);
                        }else if($indata['to'] == 4){
                            $b = bc_add($walletinfo['up_money'],$indata['all_account']);
                            $test = $this->modelwallet->update(['up_money'=>$b,'cm_money'=>$a],['id'=>$indata['wallet_id']]);
                        }
                    }
                }
            } catch (\Exception $e) {
                return $this->error(lang('public.do_fail'));
            }
            if($save && $test){
                if($indata['to'] == 1){
                    $url = (string)url('finance/index');
                }else if($indata['to'] == 2){
                    $url = (string)url('finance/lefinance');
                }else if($indata['to'] == 3){
                    $url = (string)url('finance/opfinance');
                }else if($indata['to'] == 4){
                    $url = (string)url('finance/upfinance');
                }else if($indata['to'] == 5){
                    $url = (string)url('finance/cmfinance');
                }
                return $this->success(lang('finance.transfer_account_ok'),[],$url);
            }
            return $this->error(lang('public.do_fail'));
        }
        $type = $this->request->get('type','','int');
        $this->assign('type',$type);
        $web_name = lang('finance.tf_title').'-'.$this->web_name;
        $this->assign(['web_name'=>$web_name,'topmenu'=>'finance','leftmenu'=>'tf']);
        return $this->fetch();
    }

    public function transferlog()
    {
        $web_name = lang('finance.transfer_logs').'-'.$this->web_name;
        $this->assign(['web_name'=>$web_name,'topmenu'=>'finance','leftmenu'=>'tf']);
        return $this->fetch();
    }


    public function getData30Days(){
        $days=[];
        for ($i=0; $i <=30; $i++) {
            $days[$i]=date("Y-m-d",strtotime('-'.$i.'day'));
        }
        return $days;
    }

    public function yingkuitongji(){
        // $date = request()->get('date');
        // $dates = $this->getData30Days();
        $dates = [date('Y-m-d')];
        $data = [];
        foreach ($dates as $item) {
            $time = strtotime($item);

            $allfeesewin = Db::name('order_seconds')
                ->where('op_status',1)
                ->where('is_win',1)
                ->where('uid',$this->memberInfo['id'])
                ->where('create_time','>=',$time)
                ->where('create_time','<=',$time+86399)
                ->sum('all_fee');

            $allfeelewin = Db::name('order_leverdeal')
                ->where('status',2)
                ->where('is_win',1)
                ->where('uid',$this->memberInfo['id'])
                ->where('create_time','>=',$time)
                ->where('create_time','<=',$time+86399)
                ->sum('win_account');

            $allfeeselose = Db::name('order_seconds')
                ->where('op_status',1)
                ->where('is_win',2)
                ->where('uid',$this->memberInfo['id'])
                ->where('create_time','>=',$time)
                ->where('create_time','<=',$time+86399)
                ->sum('all_fee');

            $allfeelelose = Db::name('order_leverdeal')
                ->where('status',2)
                ->where('is_win',2)
                ->where('uid',$this->memberInfo['id'])
                ->where('create_time','>=',$time)
                ->where('create_time','<=',$time+86399)
                ->sum('win_account');

            $allfeesewin_onm = Db::name('order_seconds')
                ->where('op_status',1)
                ->where('is_win',1)
                ->where('uid',$this->memberInfo['id'])
                ->where('create_time','>=',$time)
                ->where('create_time','<=',$time+86399)
                ->sum('op_number');

            $allfeelewin_onm = Db::name('order_leverdeal')
                ->where('status',2)
                ->where('is_win',1)
                ->where('uid',$this->memberInfo['id'])
                ->where('create_time','>=',$time)
                ->where('create_time','<=',$time+86399)
                ->sum('account');

            $allfeesewin = $allfeesewin - $allfeesewin_onm;
            $allfeelewin = $allfeelewin - $allfeelewin_onm;


            $r = ($allfeesewin+$allfeelewin) - ($allfeeselose+$allfeelelose);
            $data[] = [
                'date' => lang('coinwin.can_today_win2'),
                'val' => $r
            ];
        }
        $allfeesewin = Db::name('order_seconds')
            ->where('op_status',1)
            ->where('is_win',1)
            ->where('uid',$this->memberInfo['id'])
            ->sum('all_fee');

        $allfeelewin = Db::name('order_leverdeal')
            ->where('status',2)
            ->where('is_win',1)
            ->where('uid',$this->memberInfo['id'])
            ->sum('win_account');

        $allfeeselose = Db::name('order_seconds')
            ->where('op_status',1)
            ->where('is_win',2)
            ->where('uid',$this->memberInfo['id'])
            ->sum('all_fee');

        $allfeelelose = Db::name('order_leverdeal')
            ->where('status',2)
            ->where('is_win',2)
            ->where('uid',$this->memberInfo['id'])
            ->sum('win_account');


        $allfeesewin_onm = Db::name('order_seconds')
            ->where('op_status',1)
            ->where('is_win',1)
            ->where('uid',$this->memberInfo['id'])
            ->sum('op_number');

        $allfeelewin_onm = Db::name('order_leverdeal')
            ->where('status',2)
            ->where('is_win',1)
            ->where('uid',$this->memberInfo['id'])
            ->sum('account');



        $allfeesewin = $allfeesewin - $allfeesewin_onm;
        $allfeelewin = $allfeelewin - $allfeelewin_onm;



        $r = ($allfeesewin+$allfeelewin) - ($allfeeselose+$allfeelelose);

        $data[] = [
            'date' => lang('coinwin.all_rate'),
            'val' => $r
        ];

        $this->assign('data',$data);

        // $this->assign('stime',date('Y-m-d',$time));
        // $this->assign('zongyingli',$allfeesewin+$allfeelewin);
        // $this->assign('zongkuisun',$allfeeselose+$allfeelelose);
        $this->assign(['topmenu'=>'yingkuitongji','leftmenu'=>'yka']);
        return $this->fetch();
    }

    public function get_product()
    {
        if(request()->isPost()){
            $post = $this->request->post();
            $from = !empty($post['from'])?$post['from']:'';
            $to = !empty($post['to'])?$post['to']:'';
            if($from && $to){
                $this->m_pro = new \app\admin\model\ProductLists();
                if($from){
                    if($from >4){
                        $fromwhere[] = ['status','=','1'];
                        $fromwhere[] = ['base','=','1'];
                    }else{
                        $fromwhere[] = ['types','like','%'.$from.'%'];
                        $fromwhere[] = ['status','=','1'];
                    }
                    $fromproduct = $this->m_pro->where($fromwhere)->order('sort','desc')->field('id,title')->select();
                }
                if($to){
                    if($to >4){
                        $towhere[] = ['status','=','1'];
                        $towhere[] = ['base','=','1'];
                    }else{
                        $towhere[] = ['types','like','%'.$to.'%'];
                        $towhere[] = ['status','=','1'];
                    }
                    $toproduct = $this->m_pro->where($towhere)->order('sort','desc')->field('id,title')->select();
                }
                if($fromproduct && $toproduct){
                    $fromproduct = $fromproduct->ToArray();
                    $toproduct = $toproduct->ToArray();
                    $new_array = array_filter($fromproduct, function ($v, $k) use ($toproduct) {
                        foreach ($toproduct as $key => $val) {
                            if ($val['id'] == $v['id']) {
                                return true;
                            }
                        }
                        return false;
                    }, ARRAY_FILTER_USE_BOTH);
                    array_multisort($new_array);
                    $product = $new_array;
                    return json(['code'=>1,'data'=>$product]);
                }
                return json(['code'=>0]);
            }else{
                return json(['code'=>0]);
            }
        }
        return json(['code'=>0]);
    }

    public function before_coin_type(){
        if(request()->isPost()){
            $post = $this->request->post();
            $type = !empty($post['type'])?$post['type']:'';
            $to = !empty($post['to'])?$post['to']:'0';
            if($type){
                $coin_types = lang('coin_wallet');
                $types = [];
                foreach($coin_types as $k => $v){
                    if($to == 1){
                        if($k <> $type){
                            $types[$k]['key'] = $k;
                            $types[$k]['vol'] = $v;
                        }
                    }else{
                        $types[$k]['key'] = $k;
                        $types[$k]['vol'] = $v;
                    }
                }
                $types = array_values($types);
                return json(['code'=>1,'data'=>$types]);
            }else{
                return json(['code'=>0]);
            }
        }
        return json(['code'=>0]);
    }

    public function after_coin_type(){
        if(request()->isPost()){
            $post = $this->request->post();
            $type = !empty($post['type'])?$post['type']:'';
            $to = !empty($post['to'])?$post['to']:'0';
            if($type){
                $coin_types = lang('coin_wallet');
                $types = [];
                foreach($coin_types as $k => $v){
                    if($to == 1){
                        if($k <> $type){
                            $types[$k]['key'] = $k;
                            $types[$k]['vol'] = $v;
                        }
                    }else{
                        $types[$k]['key'] = $k;
                        $types[$k]['vol'] = $v;
                    }
                }
                $types = array_values($types);
                return json(['code'=>1,'data'=>$types]);
            }else{
                return json(['code'=>0]);
            }
        }
        return json(['code'=>0]);
    }

    public function get_wallet()
    {
        if(request()->isPost()){
            $post = $this->request->post(null,'','int');
            $product_id = $post['product_id'];
            $from = $post['from'];
            $to = $post['to'];
            $info = [];
            if($product_id){
                $info['title'] = \app\admin\model\ProductLists::where('id',$product_id)->value('title');
                if($from == 1){
                    $info['money'] = \app\admin\model\MemberWallet::where('product_id',$product_id)->where('uid',$this->memberInfo['id'])->value('ex_money');
                }else if($from == 2){
                    $info['money'] = \app\admin\model\MemberWallet::where('product_id',$product_id)->where('uid',$this->memberInfo['id'])->value('le_money');
                }else if($from == 3){
                    $info['money'] = \app\admin\model\MemberWallet::where('product_id',$product_id)->where('uid',$this->memberInfo['id'])->value('op_money');
                }else if($from == 4){
                    $info['money'] = \app\admin\model\MemberWallet::where('product_id',$product_id)->where('uid',$this->memberInfo['id'])->value('up_money');
                }else if($from == 5){
                    $info['money'] = \app\admin\model\MemberWallet::where('product_id',$product_id)->where('uid',$this->memberInfo['id'])->value('cm_money');
                }
                return json(['code'=>1,'data'=>$info]);
            }
            return json(['code'=>0]);
        }
        return json(['code'=>0]);
    }

    public function recharge()
    {
        if(request()->isPost()){
            $post = $this->request->post();
            $indata = [];
            $indata['account'] = $post['recharge_account'];
            if($indata['account'] <= 0){
                return $this->error(lang('finance.recharge_num_check'));
            }
            $indata['wallet_id'] = $post['wallet_id'];
            $indata['product_id'] = $post['product_id'];
            $indata['up_pic'] = $post['recharge_pic'];
            if(empty($indata['up_pic'])){
                return $this->error(lang('finance.recharge_pic_check'));
            }
            $usdt_recharge_type = !empty($post['usdt_recharge_type'])?$post['usdt_recharge_type']:'';
            if($usdt_recharge_type ==1){
                $indata['address'] = $post['omni_address'];
                $indata['title'] = 'Omni';
            }else if($usdt_recharge_type ==2){
                $indata['address'] = $post['trc_address'];
                $indata['title'] = 'TRC20';
            }else if($usdt_recharge_type ==3){
                $indata['address'] = $post['erc_address'];
                $indata['title'] = 'ERC20';
            }else{
                $indata['address'] = $post['pay_address'];
            }
            $indata['uid'] = session('member.id');
            $indata['is_test'] = session('member.is_test');
            $this->modelwallet = new \app\admin\model\MemberWallet();
            $walletinfo = $this->modelwallet->where('id',$indata['wallet_id'])->find();
            $indata['before'] = $walletinfo['ex_money'];
            $indata['account_sxf'] = 0;
            $indata['all_account'] = bc_sub($indata['account'],$indata['account_sxf']);
            $indata['type'] = 1;
            $indata['status'] = 1;
            $check = request()->checkToken('__token__');
            if(false === $check) {
                return $this->error(lang('public.do_fail'));
            }
            try {
                $this->modellog = new \app\admin\model\MemberWalletLog();
                $save = $this->modellog->save($indata);
                if($save && session('member.is_test')==1){
                    $lastId = $this->modellog->id;
                    $after = bc_add($indata['before'],$indata['all_account']);
                    if($this->modellog->update(['status'=>2,'after'=>$after],['id'=>$lastId])){
                        $test = $this->modelwallet->update(['ex_money'=>$after],['id'=>$indata['wallet_id']]);
                    }
                }
            } catch (\Exception $e) {
                return $this->error(lang('public.do_fail'));
            }
            if(isset($test)){
                return $this->success(lang('finance.recharge_success'),[],(string)url('finance/index'));
            }
            if($save){
                return $this->success(lang('finance.recharge_sub'),[],(string)url('finance/index'));
            }
            return $this->error(lang('public.do_fail'));
        }
    }

    public function withdraw(){
        if(request()->isPost()){
            $post = $this->request->post();
            $indata = [];
            $indata['account'] = $post['withdraw_account'];
            if($indata['account'] <= 0){
                return $this->error(lang('finance.withdraw_num_check'));
            }
            $type = $post['type'];
            if($type == 'yhk'){
                $withdraw_address = "{$post['withdraw_address']['yhkdz1']}---{$post['withdraw_address']['yhkxm']}---{$post['withdraw_address']['yhkkhh']}";
            }else{
                $withdraw_address = $post['withdraw_address'][$type];
            }
            if(empty($withdraw_address)){
                return $this->error(lang('finance.withdraw_address_check'));
            }
            $indata['title'] = $type;
            $indata['wallet_id'] = $post['wallet_id'];
            $indata['product_id'] = $post['product_id'];
            $indata['uid'] = session('member.id');
            $indata['is_test'] = session('member.is_test');
            $this->modelwallet = new \app\admin\model\MemberWallet();
            $walletinfo = $this->modelwallet->where('id',$indata['wallet_id'])->find();
            $this->modelpro = new \app\admin\model\ProductLists();
            $proinfo = $this->modelpro->where('id',$indata['product_id'])->field('withdraw_sx_fee,withdraw_trc_sxf,withdraw_erc_sxf,withdraw_omni_sxf,withdraw_min_num,withdraw_max_num,withdraw_day_num,withdraw_num_max,withdraw_num_sxf')->find();
            $this->modellog = new \app\admin\model\MemberWalletLog();
            if($proinfo['withdraw_day_num'] > 0){
                $t = strtotime(date('Y-m-d'));
                $today_count = $this->modellog->where('create_time','>',$t)->where('type',2)->where('uid',session('member.id'))->count('id');
                if($today_count >= $proinfo['withdraw_day_num']){
                    return $this->error(lang('finance.withdraw_today_can_num',['can'=>$proinfo['withdraw_day_num'],'num'=>$today_count]));
                }
            }
            $sxf = $proinfo['withdraw_'.$type.'_sxf'];
            if($proinfo['withdraw_num_max'] >0 && $proinfo['withdraw_num_sxf'] > 0){
                if($indata['account'] > $proinfo['withdraw_num_max']){
                    $sxf = $sxf + $proinfo['withdraw_num_sxf'];
                }
            }
            $indata['before'] = $walletinfo['ex_money'];
            $indata['account_sxf'] = bc_mul($sxf,$indata['account']);
            $indata['all_account'] = bc_sub($indata['account'],$indata['account_sxf']);
            $indata['type'] = 2;
            $indata['status'] = 1;
            $indata['address'] = $withdraw_address;
            if($walletinfo['ex_money'] < $indata['account']){
                return $this->error(fox_all_replace(lang('finance.withdraw_enugh_num'),$walletinfo['ex_money']));
            }
            if($proinfo['withdraw_max_num']>0){
                if($indata['account'] > $proinfo['withdraw_max_num']){
                    return $this->error(fox_all_replace(lang('finance.withdraw_max_num'),$proinfo['withdraw_max_num']));
                }
            }
            if($proinfo['withdraw_min_num']>0){
                if($indata['account'] < $proinfo['withdraw_min_num']){
                    return $this->error(fox_all_replace(lang('finance.withdraw_min_num'),$proinfo['withdraw_min_num']));
                }
            }
            $paypwd = $this->memberInfo['paypwd'];
            if($paypwd <> password($post['paypwd'])){
                return $this->error(lang('finance.withdraw_paypwd_wrong'));
            }
            $check = request()->checkToken('__token__');
            if(false === $check) {
                return $this->error(lang('public.do_fail'));
            }
            try {
                $save = $this->modellog->save($indata);
                if($save){
                    $lastId = $this->modellog->id;
                    $after = bc_sub($indata['before'],$indata['account']);
                    $lock = bc_add($walletinfo['lock_ex_money'],$indata['account']);
                    if($this->memberInfo['is_test']==1){
                        if($this->modellog->update(['status'=>2,'after'=>$after],['id'=>$lastId])){
                            $test = $this->modelwallet->update(['ex_money'=>$after],['id'=>$indata['wallet_id']]);
                        }
                    }else{
                        $saves = $this->modelwallet->update(['ex_money'=>$after,'lock_ex_money'=>$lock],['id'=>$indata['wallet_id']]);
                    }
                }
            } catch (\Exception $e) {
                return $this->error(lang('public.do_fail'));
            }
            if(isset($test)){
                return $this->success(lang('finance.withdraw_success'),[],(string)url('finance/index'));
            }
            if($saves){
                return $this->success(lang('finance.withdraw_sub'),[],(string)url('finance/index'));
            }
            return $this->error(lang('public.do_fail'));
        }
    }

    public function findlog()
    {
        if(request()->isPost()){
            $post = $this->request->post(null,'0','int');
            $id = $post['id'];
            $page = $post['page'];
            $type = $post['type'];
            $from = (!empty($post['from']))?$post['from']:'';
            $to = (!empty($post['to']))?$post['to']:'';
            $cm = (!empty($post['cm']))?$post['cm']:'';
            
            $limit = 6;
            $this->walletlog = new \app\admin\model\MemberWalletLog();
            if($type==1){
                $where[] = ['type','in','1,2,3,8,9'];
                $list = $this->walletlog->where('wallet_id',$id)
                    ->where('uid',$this->memberInfo['id'])
                    ->where($where)
                    ->page($page, $limit)
                    ->field('create_time,account,account_sxf,all_account,status,type,title,remark')
                    ->order('create_time','desc')
                    ->select();
                $count = $this->walletlog->where('wallet_id',$id)
                    ->where('uid',$this->memberInfo['id'])
                    ->where($where)
                    ->count('id');
            }
            if($type==2){
                $where[] = ['type','=',$type];
                $list = $this->walletlog->where('wallet_id',$id)
                    ->where('uid',$this->memberInfo['id'])
                    ->where($where)
                    ->page($page, $limit)
                    ->field('create_time,account,account_sxf,all_account,status,type,title,remark')
                    ->order('create_time','desc')
                    ->select();
                $count = $this->walletlog->where('wallet_id',$id)
                    ->where('uid',$this->memberInfo['id'])
                    ->where($where)
                    ->count('id');
            }
            if($type>2){
                if($cm==1){
                    // $map1 = [
                    //     ['type','=',$type],
                    //     ['from', '=', $from],
                    //     ['uid', '=', $this->memberInfo['id']],
                    //     ['wallet_id', '=', $id]
                    // ];
                    // $map2 = [
                    //     ['type','=',$type],
                    //     ['to', '=', $to],
                    //     ['uid', '=', $this->memberInfo['id']],
                    //     ['wallet_id', '=', $id]
                    // ];
                    // $map3 = [
                    //     ['type','in','11,12'],
                    //     ['to', '=', $this->memberInfo['id']],
                    //     ['uid', '=', $this->memberInfo['id']],
                    //     ['wallet_id', '=', $id]
                    // ];
                    
                    //$list = $this->walletlog->whereOr([ $map1, $map2, $map3 ])
                    $map = [
                        ['type','=','18'],
                        ['uid', '=', $this->memberInfo['id']],
                        ['wallet_id', '=', $id],
                        ['order_type','=','18'],
                    ];
                    $list = $this->walletlog->where($map)
                        ->page($page, $limit)
                        ->field('create_time,account,account_sxf,all_account,status,type,title,remark')
                        ->order('create_time','desc')
                        ->select();
                    //$count = $this->walletlog->whereOr([ $map1, $map2, $map3 ])
                    $count = $this->walletlog->where($map)
                        ->count('id');
                }else{
                    $map1 = [
                        ['type','=',$type],
                        ['from', '=', $from],
                        ['uid', '=', $this->memberInfo['id']],
                        ['wallet_id', '=', $id]
                    ];
                    $map2 = [
                        ['type','=',$type],
                        ['to', '=', $to],
                        ['uid', '=', $this->memberInfo['id']],
                        ['wallet_id', '=', $id]
                    ];
                    $list = $this->walletlog->whereOr([ $map1, $map2 ])
                        ->page($page, $limit)
                        ->field('create_time,account,account_sxf,all_account,status,type,title,remark')
                        ->order('create_time','desc')
                        ->select();
                    $count = $this->walletlog->whereOr([ $map1, $map2 ])
                        ->count('id');
                }
                
            }
            
            $lists = [];
            if($list){
                foreach($list as $k => $v){
                    $lists[$k]['create_time'] = $v['create_time'];
                    if($v['type']==3){
                        $lists[$k]['title'] = $v['title'];
                    }else{
                        $lists[$k]['title'] = $v['account'];
                    }
                    if($v['type']==2){
                        $lists[$k]['account_sxf'] = $v['account_sxf'];
                    }else{
                        $lists[$k]['account_sxf'] = '------';
                    }
                    if($v['type']>10){
                        if($v['remark']){
                            //$lists[$k]['remark'] = $v['remark'].'%';
                            if($v['type'] != 18){
                                $lists[$k]['remark'] = $v['remark'].'%';
                            }else{
                                $lists[$k]['remark'] = $v['remark'];
                            }
                        }else{
                            $lists[$k]['remark'] = '------';
                        }
                    }else{
                        $lists[$k]['remark'] = '------';
                    }
                    $lists[$k]['all_account'] = $v['all_account'];
                    $lists[$k]['status'] = lang('wallet_log_status.'.$v['status']);
                    $lists[$k]['type'] = lang('wallet_log_type.'.$v['type']);
                }
            }
            return json(['code'=>1,'data'=>$lists,'pages'=>floor($count/$limit)]);
        }
    }

    public function findalllog()
    {
        if(request()->isPost()){
            $post = $this->request->post(null,'0','int');
            $page = $post['page'];
            $where[] = ['type','=',3];
            
            $limit = 10;
            $this->walletlog = new \app\admin\model\MemberWalletLog();
            $list = $this->walletlog->where('uid',$this->memberInfo['id'])
                ->where($where)
                ->page($page, $limit)
                ->field('create_time,account,account_sxf,all_account,status,type,title')
                ->order('create_time','desc')
                ->select();
            $count = $this->walletlog->where('uid',$this->memberInfo['id'])
            ->where($where)
            ->count('id');
            $lists = [];
            if($list){
                foreach($list as $k => $v){
                    $lists[$k]['create_time'] = $v['create_time'];
                    if($v['type']==3){
                        $lists[$k]['title'] = $v['title'];
                    }else{
                        $lists[$k]['title'] = $v['account'];
                    }
                    $lists[$k]['all_account'] = $v['all_account'];
                    $lists[$k]['status'] = lang('wallet_log_status.'.$v['status']);
                    $lists[$k]['type'] = lang('wallet_log_type.'.$v['type']);
                }
            }
            return json(['code'=>1,'data'=>$lists,'pages'=>floor($count/$limit)]);
        }
    }

    public function userwallet()
    {
        if(request()->isPost()){
            $post = $this->request->post(null,'','trim');
            $pages = $post['pages'];
            $code = $post['code'];
            $money = [];
            if($code){
                $productBase = \app\admin\model\ProductLists::where('base',1)->field('id,title')->find();
                if($pages == 'deal'){
                    $productInfo = \app\admin\model\ProductLists::where('code',$code)->field('id,title,close,ex_buy_min,ex_sell_min')->find();
                    $money['money'] = \app\admin\model\MemberWallet::where('product_id',$productInfo['id'])->where('uid',$this->memberInfo['id'])->value('ex_money');
                    $money['usdt'] = \app\admin\model\MemberWallet::where('product_id',$productBase['id'])->where('uid',$this->memberInfo['id'])->value('ex_money');
                    $money['usdt_tit'] = $productBase['title'];
                    $money['pro_tit'] = $productInfo['title'];
                    // $money['usdt'] = floatVal($money['usdt']);
                    // $money['money'] = floatVal($money['money']);
                    if($productInfo['close'] > 0){
                        $money['buy_max'] = bc_div($money['usdt'],$productInfo['close']);
                    }else{
                        $money['buy_max'] = 0;
                    }
                    $money['sell_max'] = $money['money'];
                    $money['ex_buy_min'] = $productInfo['ex_buy_min'];
                    $money['ex_sell_min'] = $productInfo['ex_sell_min'];
                }else if($pages == 'leverdeal'){
                    $productInfo = \app\admin\model\ProductLists::where('code',$code)->field('id,title,close,le_sx_fee,le_day_sx_fee,le_no_sx_fee,le_play_time,le_play_type,le_order_rate')->find();
                    $money['money'] = \app\admin\model\MemberWallet::where('product_id',$productInfo['id'])->where('uid',$this->memberInfo['id'])->value('le_money');
                    $money['pro_tit'] = $productInfo['title'];
                    $money['le_play_time'] = $productInfo['le_play_time'];
                    $money['le_sx_fee'] = $productInfo['le_sx_fee'];
                    $money['le_sx_fee_100'] = round_pad_zero($productInfo['le_sx_fee']*100,2) .'%';
                    $money['le_order_rate'] = $productInfo['le_order_rate'];
                }else if($pages == 'seconds'){
                    $productInfo = \app\admin\model\ProductLists::where('code',$code)->field('id,title,close,op_sx_fee,op_play_time,op_play_price,op_play_prop,op_play_max,op_order_min,op_order_max')->find();
                    $money['money'] = \app\admin\model\MemberWallet::where('product_id',$productBase['id'])->where('uid',$this->memberInfo['id'])->value('op_money');
                    $money['pro_tit'] = $productBase['title'];
                    $money['op_play_price'] = explode(',',$productInfo['op_play_price']);
                    $money['op_play_time'] = explode(',',$productInfo['op_play_time']);
                    $money['op_play_prop'] = explode(',',$productInfo['op_play_prop']);
                }
                
                return json(['code'=>1,'data'=>$money]);
            }
        }
    }

    /**
     * @Title: 上传回调
     * @param {int} $code
     * @param {*} $msg
     * @param {*} $data
     */
    public function up_message(int $code = 0, $msg = '', $data = '')
    {
        $result = [
            'code' => $code,
            'msg'  => $msg,
            'data' => $data,
        ];

        return json($result);
    }
    /**
     * @Title: 上传证照
     */
    public function upload_pic()
    {
        $data = [
            'file' => request()->file('file'),
        ];
        $data['paths'] = 'upload/pic/'.$this->memberInfo['id'];
        $this->validate($data,'Pic');
        try {
            $this->validate($data,'Pic');
        } catch (\Exception $e) {
            return $this->up_message(1,$e->getMessage());
        }
        $fileName = date('YmdHis').rand(1000,9999);
        $savename = \think\facade\Filesystem::disk('public')->putFile($data['paths'], $data['file'], function() use ($fileName){
            return $fileName;
        });

        if($savename){
            $path = '/'.$savename;
            $rdata = [];
            $rdata['url'] = $path;
            $rdata['src'] = server_url() .$path;
            return $this->up_message(0,lang('public.upload_ok'),$rdata);
        }else{
            return $this->up_message(1,lang('public.upload_fail'));
        }
    }
    
}

