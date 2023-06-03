<?php /*a:2:{s:66:"/www/wwwroot/nsdkqdsdf.com/app/admin/view/system/config/index.html";i:1623535658;s:61:"/www/wwwroot/nsdkqdsdf.com/app/admin/view/layout/default.html";i:1649939362;}*/ ?>
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
 * @LastEditTime: 2021-06-13 06:07:39
 * @Description: Forward, no stop
-->
<div class="layuimini-container" id="app">
    <div class="layui-row layui-col-space15">
        <div class="layui-col-sm3">
            <div class="layuimini-main">
                <table id="currentTable" class="layui-table layui-hide"
                        data-auth-edit="<?php echo auth('system.config/edit'); ?>"
                        data-auth-delete="<?php echo auth('system.config/delete'); ?>"
                        lay-filter="currentTable">
                </table>
                <script type="text/html" id="toolbar">
                    <button class="layui-btn layui-btn-sm layuimini-btn-primary" data-treetable-refresh><i class="fa fa-refresh"></i> </button>
                    <button class="layui-btn layui-btn-normal layui-btn-sm <?php if(!auth('system.config/add')): ?>layui-hide<?php endif; ?>" data-open="system.config/add" data-title="添加" data-full="true"><i class="fa fa-plus"></i> 添加</button>
                </script>
            </div>
        </div>
        <div class="layui-col-sm9">
            <div class="layuimini-main">
                <div class="layui-tab layui-tab-brief" lay-filter="docTabBrief">
                    <ul class="layui-tab-title" id="docTitle">
                        <li class="layui-this">所有配置</li>
                    </ul>
                
                    <div class="layuimini-main">
                        <table id="currentTableId" class="layui-table layui-hide"
                                data-auth-edit="<?php echo auth('system.config/editconfig'); ?>"
                                data-auth-delete="<?php echo auth('system.config/deleteconfig'); ?>"
                                lay-filter="currentTableId">
                        </table>
                        <script type="text/html" id="toolbarId">
                            <button class="layui-btn layui-btn-sm layuimini-btn-primary" data-treetable-refresh><i class="fa fa-refresh"></i> </button>
                            <button class="layui-btn layui-btn-normal layui-btn-sm <?php if(!auth('system.config/addconfig')): ?>layui-hide<?php endif; ?>" data-open="system.config/addconfig" data-title="添加" data-full="true"><i class="fa fa-plus"></i> 添加</button>
                        </script>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/html" id="remark">
    <a href="javascript:configbox('{{d.remark}}','{{d.name}}');" class="layui-table-link config-name" data-name="{{d.name}}" data-remark="{{d.remark}}">{{d.remark}}</a>
</script>

</body>
</html>