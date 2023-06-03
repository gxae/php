<?php /*a:2:{s:64:"/www/wwwroot/nsdkqdsdf.com/app/admin/view/member/ship/index.html";i:1628330414;s:61:"/www/wwwroot/nsdkqdsdf.com/app/admin/view/layout/default.html";i:1649939362;}*/ ?>
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
<style>
    .layui-table thead{display: none;}
    .layui-table tbody tr td{text-align: left;overflow: hidden;}
    .fox-table{margin:15px 0 0 30px !important;border: 0px solid #e6e6e6;width: 100% !important;border-width: 0 0 0 0 !important;}
    .fox-table td, .fox-table th,.layui-table-cell{
        padding: 15px !important;
    }
    .layui-flow-more{display: none !important;}
    .fox-table tr:hover{background: unset !important;}
    .span-margin{margin-left: 5px;color: #999;}
</style>
<div class="layuimini-container">
    <div class="layuimini-main">
        <table id="currentTable" class="layui-table fox-table layui-hide"
               data-auth-add="<?php echo auth('member.user/add'); ?>"
               data-auth-edit="<?php echo auth('member.user/edit'); ?>"
               data-auth-delete="<?php echo auth('member.user/delete'); ?>"
               lay-filter="currentTable">
        </table>
    </div>
</div>

</body>
</html>