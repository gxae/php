<?php /*a:2:{s:65:"/www/wwwroot/nsdkqdsdf.com/app/admin/view/system/config/edit.html";i:1623526172;s:61:"/www/wwwroot/nsdkqdsdf.com/app/admin/view/layout/default.html";i:1649939362;}*/ ?>
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
 * @Date: 2021-06-13 02:49:13
 * @LastEditTime: 2021-06-13 03:29:32
 * @Description: Forward, no stop
-->
<div class="layuimini-container">
    <form id="app-form" class="layui-form layuimini-form">
        <input type="hidden" name="id" value="<?php echo htmlentities((isset($row['id']) && ($row['id'] !== '')?$row['id']:'')); ?>">
        <div class="layui-form-item">
            <label class="layui-form-label required">分组名称</label>
            <div class="layui-input-block">
                <input type="text" name="remark" class="layui-input" value="<?php echo htmlentities((isset($row['remark']) && ($row['remark'] !== '')?$row['remark']:'')); ?>">
                <tip>填写分组名称。</tip>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label required">分组标识</label>
            <div class="layui-input-block">
                <input type="text" name="name" class="layui-input" value="<?php echo htmlentities((isset($row['name']) && ($row['name'] !== '')?$row['name']:'')); ?>">
                <tip>填写分组标识。</tip>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">排序</label>
            <div class="layui-input-block">
                <input type="text" name="sort" class="layui-input" lay-reqtext="请输入排序数字" placeholder="请输入排序数字" value="<?php echo htmlentities((isset($row['sort']) && ($row['sort'] !== '')?$row['sort']:'')); ?>">
                <tip>填写排序数字。</tip>
            </div>
        </div>

        <div class="hr-line"></div>
        <div class="layui-form-item text-center">
            <button type="submit" class="layui-btn layui-btn-normal layui-btn-sm" lay-submit>确认</button>
            <button type="reset" class="layui-btn layui-btn-primary layui-btn-sm">重置</button>
        </div>

    </form>
</div>

</body>
</html>