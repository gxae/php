<?php 
/*
 * @Author: Fox Blue
 * @Date: 2021-06-28 14:41:28
 * @LastEditTime: 2021-07-21 16:30:01
 * @Description: Forward, no stop
 */
namespace app\index\controller;

use app\common\controller\IndexController;
use think\App;
use think\facade\Env;
use app\common\FoxKline;

class Market extends IndexController
{
    
    public function index()
    {
        $product = \app\admin\model\ProductLists::where('status',1)->where('base',0)->where('title','<>','银行卡')->order('sort','desc')->select();
        $this->assign('product',$product);
        foreach ($product as &$item){
            if($item['is_kong'] == 1){
                $item['low'] = $item['kong_min'];
                $item['high'] = $item['kong_max'];
            }
        }
        // var_dump($product->toArray());die;
        $web_name = lang('market.title').'-'.$this->web_name;
        $this->assign(['web_name'=>$web_name,'topmenu'=>'market']);
        return $this->fetch();
    }
    
}

