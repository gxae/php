<?php /*a:2:{s:68:"/www/wwwroot/www.nsdkaqnn.com/app/admin/view/tongji/order/index.html";i:1633958682;s:64:"/www/wwwroot/www.nsdkaqnn.com/app/admin/view/layout/default.html";i:1649939362;}*/ ?>
<!--
 * @Author: Fox Blue
 * @Date: 2021-05-31 13:44:29
 * @LastEditTime: 2021-09-17 12:17:49
 * @Description: Forward, no stop
-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo sysconfig('site','site_name'); ?></title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/static/admin/css/public.css?v=<?php echo htmlentities($version); ?>" media="all">
    <script>
        window.CONFIG = {
            ADMIN: "<?php echo htmlentities((isset($adminModuleName) && ($adminModuleName !== '')?$adminModuleName:'admin')); ?>",
            CONTROLLER_JS_PATH: "<?php echo htmlentities((isset($thisControllerJsPath) && ($thisControllerJsPath !== '')?$thisControllerJsPath:'')); ?>",
            ACTION: "<?php echo htmlentities((isset($thisAction) && ($thisAction !== '')?$thisAction:'')); ?>",
            AUTOLOAD_JS: "<?php echo htmlentities((isset($autoloadJs) && ($autoloadJs !== '')?$autoloadJs:'false')); ?>",
            IS_SUPER_ADMIN: "<?php echo htmlentities((isset($isSuperAdmin) && ($isSuperAdmin !== '')?$isSuperAdmin:'false')); ?>",
            // VERSION: "<?php echo htmlentities((isset($version) && ($version !== '')?$version:'1.0.0')); ?>",
            VERSION: Date.parse(new Date())/1000,
        };
    </script>
    <script src="/static/lang/zh-cn.js?v=<?php echo htmlentities($version); ?>" charset="utf-8"></script>
    <script src="/static/plugs/layui-v2.5.6/layui.all.js?v=<?php echo htmlentities($version); ?>" charset="utf-8"></script>
    <script src="/static/plugs/require-2.3.6/require.js?v=<?php echo htmlentities($version); ?>" charset="utf-8"></script>
    <script src="/static/config-admin.js?v=<?php echo htmlentities($version); ?>" charset="utf-8"></script>
</head>
<body>
<!--
 * @Author: Fox Blue
 * @Date: 2021-05-31 13:44:29
 * @LastEditTime: 2021-10-11 21:24:42
 * @Description: Forward, no stop
-->
<link rel="stylesheet" href="/static/admin/css/welcome.css?v=<?php echo time(); ?>" media="all">
<div class="layuimini-container">
    <div class="layuimini-main">
        <div style="margin-bottom: 20px;">
            <fieldset class="table-search-fieldset">
                <legend>搜索</legend>
                <div class="layui-form layui-form-pane form-search">
                    <div class="layui-form-item layui-inline">
                        <label class="layui-form-label">时间范围</label>
                        <div class="layui-input-inline">
                            <input type="text" id="times" name="times" data-date="" data-date-type="date" data-date-range="-" class="layui-input" autocomplete="off"  placeholder="请选择时间" value="">
                        </div>
                    </div>
                    <div class="layui-form-item layui-inline">
                        <label class="layui-form-label">会员</label>
                        <div class="layui-input-inline">
                            <input type="text" id="username" name="username" class="layui-input" autocomplete="off"  placeholder="请输入会员" value="">
                        </div>
                    </div>
                    <div class="layui-form-item layui-inline">
                        <button class="layui-btn layui-btn-normal layui-btn-sm search-submit">确认</button>
                        <button class="layui-btn layui-btn-primary layui-btn-sm search-reset">重置</button>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="layui-row layui-col-space15">
            <div class="layui-col-md12">
                <div class="layui-row layui-col-space15">
                    <div class="layui-col-md12">
                        <div class="layui-card">
                            <div class="layui-card-header"><i class="fa fa-warning icon"></i>数据统计</div>
                                <div class="layui-card-body">
                                    <div class="layui-row layui-col-space10">
                                        <div class="layui-col-xs4">
                                            <div class="panel layui-bg-number">
                                                <div class="panel-body">
                                                    <div class="panel-title">
                                                        <span class="label pull-right layui-bg-blue">币币</span>
                                                        <h5>币币订单</h5>
                                                    </div>
                                                    <div class="panel-content" id="count_deal">
                                                        <i class="fa fa-spinner fa-spin fa-fw"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="layui-col-xs4">
                                            <div class="panel layui-bg-number">
                                                <div class="panel-body">
                                                    <div class="panel-title">
                                                        <span class="label pull-right layui-bg-blue">期权</span>
                                                        <h5>期权订单</h5>
                                                    </div>
                                                    <div class="panel-content" id="count_seconds">
                                                        <i class="fa fa-spinner fa-spin fa-fw"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="layui-col-xs4">
                                            <div class="panel layui-bg-number">
                                                <div class="panel-body">
                                                    <div class="panel-title">
                                                        <span class="label pull-right layui-bg-blue">合约</span>
                                                        <h5>合约订单</h5>
                                                    </div>
                                                    <div class="panel-content" id="count_leverdeal">
                                                        <i class="fa fa-spinner fa-spin fa-fw"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="layui-col-xs4">
                                            <div class="panel layui-bg-number">
                                                <div class="panel-body">
                                                    <div class="panel-title">
                                                        <span class="label pull-right layui-bg-blue">理财</span>
                                                        <h5>理财订单</h5>
                                                    </div>
                                                    <div class="panel-content" id="count_good">
                                                        <i class="fa fa-spinner fa-spin fa-fw"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="layui-col-xs4">
                                            <div class="panel layui-bg-number">
                                                <div class="panel-body">
                                                    <div class="panel-title">
                                                        <span class="label pull-right layui-bg-blue">认购</span>
                                                        <h5>认购订单</h5>
                                                    </div>
                                                    <div class="panel-content" id="count_ieorg">
                                                        <i class="fa fa-spinner fa-spin fa-fw"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="layui-col-xs4">
                                            <div class="panel layui-bg-number">
                                                <div class="panel-body">
                                                    <div class="panel-title">
                                                        <span class="label pull-right layui-bg-blue">矿机</span>
                                                        <h5>矿机订单</h5>
                                                    </div>
                                                    <div class="panel-content" id="count_winer">
                                                        <i class="fa fa-spinner fa-spin fa-fw"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>