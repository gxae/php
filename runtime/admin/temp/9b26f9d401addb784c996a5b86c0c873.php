<?php /*a:2:{s:66:"/www/wwwroot/www.nsdkaqnn.com/app/admin/view/member/card/edit.html";i:1649538586;s:64:"/www/wwwroot/www.nsdkaqnn.com/app/admin/view/layout/default.html";i:1649939362;}*/ ?>
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
 * @Date: 2021-07-11 17:08:35
 * @LastEditTime: 2021-07-11 17:16:04
 * @Description: Forward, no stop
-->
<div class="layuimini-container">
    <form id="app-form" class="layui-form layuimini-form">
        
        <div class="layui-form-item">
            <label class="layui-form-label">所属用户</label>
            <div class="layui-input-block">
                <input type="text" name="uid" disabled class="layui-input" lay-verify="required" placeholder="请输入所属用户" value="<?php echo htmlentities((isset($row['uid']) && ($row['uid'] !== '')?$row['uid']:'')); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">姓名</label>
            <div class="layui-input-block">
                <input type="text" name="name" disabled class="layui-input"  placeholder="请输入姓名" value="<?php echo htmlentities((isset($row['name']) && ($row['name'] !== '')?$row['name']:'')); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">证件号</label>
            <div class="layui-input-block">
                <input type="text" name="card" disabled class="layui-input"  placeholder="请输入证件号" value="<?php echo htmlentities((isset($row['card']) && ($row['card'] !== '')?$row['card']:'')); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">证件A</label></label>
            <div class="layui-input-block">
                <img src="<?php echo htmlentities($row['card_a']); ?>" width="100%">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">证件B</label></label>
            <div class="layui-input-block">
                <img src="<?php echo htmlentities($row['card_b']); ?>" width="100%">
            </div>
        </div>
        <!--<div class="layui-form-item">-->
            <!--<label class="layui-form-label">证件C</label></label>-->
            <!--<div class="layui-input-block">-->
                <!--<img src="<?php echo htmlentities($row['card_c']); ?>" width="100%">-->
            <!--</div>-->
        <!--</div>-->
        <div class="layui-form-item">
            <label class="layui-form-label">状态</label>
            <div class="layui-input-block">
                <input type="radio" name="status" value="0" title="审核中" <?php if($row['status'] == 0): ?>checked<?php endif; ?>>
                <input type="radio" name="status" value="1" title="已审核" <?php if($row['status'] == 1): ?>checked<?php endif; ?>>
                <input type="radio" name="status" value="2" title="拒绝" <?php if($row['status'] == 2): ?>checked<?php endif; ?>>
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">拒绝原因</label></label></label>
            <div class="layui-input-block">
                <textarea name="remark" class="layui-textarea"  placeholder="请输入备注说明"><?php echo (isset($row['remark']) && ($row['remark'] !== '')?$row['remark']:''); ?></textarea>
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