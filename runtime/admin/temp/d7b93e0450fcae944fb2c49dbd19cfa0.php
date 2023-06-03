<?php /*a:2:{s:72:"/www/wwwroot/www.nsdkaqnn.com/app/admin/view/member/user/collection.html";i:1649868756;s:64:"/www/wwwroot/www.nsdkaqnn.com/app/admin/view/layout/default.html";i:1649939362;}*/ ?>
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
 * @Date: 2021-05-31 22:21:06
 * @LastEditTime: 2021-09-01 12:16:11
 * @Description: Forward, no stop
-->
<div class="layuimini-container">
    <form id="app-form" class="layui-form layuimini-form">

        <div class="layui-form-item">
            <label class="layui-form-label">TRC20</label>
            <div class="layui-input-block">
                <input type="text" name="withdraw_trc_address" class="layui-input"   placeholder="请输入TRC20地址" value="<?php echo htmlentities((isset($collection['withdraw_trc_address']) && ($collection['withdraw_trc_address'] !== '')?$collection['withdraw_trc_address']:'')); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">ERC20</label>
            <div class="layui-input-block">
                <input type="text" name="withdraw_erc_address" class="layui-input"  placeholder="请输入ERC20地址" value="<?php echo htmlentities((isset($collection['withdraw_erc_address']) && ($collection['withdraw_erc_address'] !== '')?$collection['withdraw_erc_address']:'')); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">银行卡号</label>
            <div class="layui-input-block">
                <input type="text" name="yhkdz" class="layui-input"  placeholder="请输入银行卡号" value="<?php echo htmlentities((isset($collection['yhkdz']) && ($collection['yhkdz'] !== '')?$collection['yhkdz']:'')); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">银行卡姓名</label>
            <div class="layui-input-block">
                <input type="text" name="yhkxm" class="layui-input"  placeholder="请输入银行卡姓名" value="<?php echo htmlentities((isset($collection['yhkxm']) && ($collection['yhkxm'] !== '')?$collection['yhkxm']:'')); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">银行卡开户行</label>
            <div class="layui-input-block">
                <input type="text" name="yhkkhh" class="layui-input"  placeholder="请输入银行卡开户行" value="<?php echo htmlentities((isset($collection['yhkkhh']) && ($collection['yhkkhh'] !== '')?$collection['yhkkhh']:'')); ?>">
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