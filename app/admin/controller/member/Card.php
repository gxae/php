<?php
/*
 * @Author: Fox Blue
 * @Date: 2021-06-25 13:52:49
 * @LastEditTime: 2021-07-11 23:02:32
 * @Description: Forward, no stop
 */

namespace app\admin\controller\member;

use app\common\controller\AdminController;
use EasyAdmin\annotation\ControllerAnnotation;
use EasyAdmin\annotation\NodeAnotation;
use think\App;

/**
 * @ControllerAnnotation(title="会员：用户认证")
 */
class Card extends AdminController
{
    protected $sort = [
        'update_time' => 'desc',
        'id'   => 'desc',
    ];

    public function __construct(App $app)
    {
        parent::__construct($app);

        $this->model = new \app\admin\model\MemberCard();
        
    }

    
    /**
     * @NodeAnotation(title="列表")
     */
    public function index()
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
                ->withJoin(['memberUser'], 'LEFT')
                ->where($where)
                ->count();
            $list = $this->model
                ->withJoin(['memberUser'], 'LEFT')
                ->where($where)
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
     * @NodeAnotation(title="编辑审核")
     */
    public function edit($id)
    {
        $row = $this->model->find($id);
        empty($row) && $this->error('数据不存在');
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            
            $rule = [];
            $this->validate($post, $rule);
            try {
                $save = $row->save($post);
            } catch (\Exception $e) {
                $this->error('保存失败');
            }
            $save ? $this->success('保存成功') : $this->error('保存失败');
        }
        $this->assign('row', $row);
        return $this->fetch();
    }
    
     public function sm()
    {
       
        $count = $this->model
            ->where('status',0)
            ->count();
       
        $data = [
            'code'  => 0,
            'msg'   => '',
            'count' => $count,
        ];
        return json($data);
       
    }

}