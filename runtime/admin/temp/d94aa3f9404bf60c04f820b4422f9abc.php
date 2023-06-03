<?php /*a:2:{s:75:"/www/wwwroot/nasdaqhome.com/app/admin/view/member/wallet_log/ewithdraw.html";i:1651156894;s:62:"/www/wwwroot/nasdaqhome.com/app/admin/view/layout/default.html";i:1649939362;}*/ ?>
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
 * @LastEditTime: 2021-07-26 02:31:22
 * @Description: Forward, no stop
-->
<div class="layuimini-container">
    <form id="app-form" class="layui-form layuimini-form">
        <div class="layui-form-item">
            <label class="layui-form-label">提现信息</label>
            <div class="layui-input-block">
                <div class="div-cos"><label>提现币</label><?php echo htmlentities($row['coin']); ?></div>
                <?php if(!empty($row['title'])): ?>
                <div class="div-cos"><label>币方式</label><?php echo htmlentities($row['title']); ?></div>
                <?php endif; ?>
                <div class="div-cos"><label>币地址</label><?php echo htmlentities($row['address']); ?></div>
                <div class="div-cos"><label>金额量</label><?php echo htmlentities($row['account']); ?></div>
                <div class="div-cos"><label>手续费</label><?php echo htmlentities($row['account_sxf']); ?></div>
                <div class="div-cos color-red"><label>结算额</label><?php echo htmlentities($row['all_account']); ?></div>
                <div class="div-cos"><label>现有额</label><?php echo htmlentities($row['ex_money']); ?></div>
                <div class="div-cos"><label>冻结额</label><?php echo htmlentities($row['lock_ex_money']); ?></div>
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
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">失败原因</label>
            <div class="layui-input-block">
                <textarea name="status_msg" class="layui-textarea"  placeholder="请输入失败原因"><?php echo (isset($row['status_msg']) && ($row['status_msg'] !== '')?$row['status_msg']:''); ?></textarea>
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">备注说明</label>
            <div class="layui-input-block">
                <textarea name="remark" class="layui-textarea"  placeholder="请输入备注说明"><?php echo (isset($row['remark']) && ($row['remark'] !== '')?$row['remark']:''); ?></textarea>
            </div>
        </div>
        <div class="hr-line"></div>
        <?php if($row['status'] == 1): ?>
        <div class="layui-form-item text-center">
            <button type="submit" class="layui-btn layui-btn-normal layui-btn-sm" lay-submit>确认</button>
            <button type="reset" class="layui-btn layui-btn-primary layui-btn-sm">重置</button>
        </div>
        <?php endif; ?>
    </form>
</div>
</body>
</html>