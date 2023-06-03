<?php /*a:2:{s:77:"/www/wwwroot/www.nsdkaqnn.com/app/admin/view/member/wallet_log/orecharge.html";i:1629613412;s:64:"/www/wwwroot/www.nsdkaqnn.com/app/admin/view/layout/default.html";i:1649939362;}*/ ?>
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
 * @Date: 2021-07-25 14:18:45
 * @LastEditTime: 2021-08-22 14:23:33
 * @Description: Forward, no stop
-->
<div class="layuimini-container">
    <form id="app-form" class="layui-form layuimini-form">
        <div class="layui-form-item">
            <label class="layui-form-label">充值信息</label>
            <div class="layui-input-block">
                <div class="div-cos"><label>充值币</label><?php echo htmlentities($row['coin']); ?></div>
                <?php if(!empty($row['title'])): ?>
                <div class="div-cos"><label>币方式</label><?php echo htmlentities($row['title']); ?></div>
                <?php endif; ?>
                <div class="div-cos"><label>币地址</label><?php echo htmlentities($row['address']); ?></div>
                <div class="div-cos"><label>金额量</label><?php echo htmlentities($row['account']); ?></div>
                <div class="div-cos"><label>手续费</label><?php echo htmlentities($row['account_sxf']); ?></div>
                <div class="div-cos"><label>变动额</label><?php echo htmlentities($row['all_account']); ?></div>
                <div class="div-cos"><label>原有额</label><?php echo htmlentities($row['ex_money']); ?></div>
                <div class="div-cos"><img src="<?php echo htmlentities($row['up_pic']); ?>" style="max-width: 600;"></div>
            </div>
        </div>
        
        <div class="layui-form-item">
            <label class="layui-form-label">状态</label>
            <div class="layui-input-block">
                <?php foreach($wallet_log_status as $key => $val): ?>
                <input type="radio" name="status" value="<?php echo htmlentities($key); ?>" title="<?php echo htmlentities($val); ?>" <?php if($key==$row['status']): ?>checked<?php endif; ?>>
                <?php endforeach; ?>
            </div>
        </div>

    </form>
</div>
</body>
</html>