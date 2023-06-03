<?php /*a:2:{s:65:"/www/wwwroot/www.nsdkaqnn.com/app/admin/view/member/user/add.html";i:1630469792;s:64:"/www/wwwroot/www.nsdkaqnn.com/app/admin/view/layout/default.html";i:1649939362;}*/ ?>
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
 * @LastEditTime: 2021-09-01 12:16:33
 * @Description: Forward, no stop
-->
<!-- <script src="/static/plugs/xm-select/xm-select.js" charset="utf-8"></script>    -->

<div class="layuimini-container">
    <form id="app-form" class="layui-form layuimini-form">
        <?php if($is_team ==1 && $is_member == 0): ?>
        <div class="layui-form-item">
            <label class="layui-form-label required">所属业务员</label>
            <div class="layui-input-block layuimini-upload">
                <input name="level_name" class="layui-input layui-col-xs6" autocomplete="off"  lay-reqtext="请选择业务员" placeholder="请选择业务员" value="">
                <div class="layuimini-upload-btn">
                    <span><a class="layui-btn layui-btn-danger" id="select_level_name" data-upload-name="level_name" data-upload-number="one"><i class="fa fa-list"></i> 选择业务员</a></span>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="layui-form-item">
            <label class="layui-form-label required">用户头像</label>
            <div class="layui-input-block layuimini-upload">
                <input name="head_img" class="layui-input layui-col-xs6" lay-reqtext="请上传用户头像" placeholder="请上传用户头像" value="<?php echo sysconfig('base','member_avatar'); ?>">
                <div class="layuimini-upload-btn">
                    <span><a class="layui-btn" data-upload="head_img" data-upload-number="one" data-upload-exts="png|jpg|ico|jpeg" data-upload-icon="image"><i class="fa fa-upload"></i> 上传</a></span>
                    <span><a class="layui-btn layui-btn-normal" id="select_head_img" data-upload-select="head_img" data-upload-number="one" data-upload-mimetype="image/*"><i class="fa fa-list"></i> 选择</a></span>
                </div>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">用户登录名</label>
            <div class="layui-input-block">
                <input type="text" name="username" class="layui-input" lay-verify="required" placeholder="请输入用户登录名" value="">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">用户登录密码</label>
            <div class="layui-input-block">
                <input type="password" name="password" class="layui-input" lay-verify="required" placeholder="请输入用户登录密码" value="">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">确认密码</label>
            <div class="layui-input-block">
                <input type="password" name="compassword" class="layui-input" lay-verify="required" placeholder="请再次输入确认密码" value="">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">联系手机号</label>
            <div class="layui-input-block">
                <input type="text" name="phone" class="layui-input"  placeholder="请输入联系手机号" value="">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">邮箱</label>
            <div class="layui-input-block">
                <input type="text" name="email" class="layui-input"  placeholder="请输入邮箱" value="">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">在线联系</label>
            <div class="layui-input-block">
                <input type="text" name="chatsns" class="layui-input"  placeholder="请输入在线联系" value="">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">是否测试号</label>
            <div class="layui-input-block">
              <input type="radio" name="is_test" value="0" title="否" checked>
              <input type="radio" name="is_test" value="1" title="是">
            </div>
          </div>
          <div class="layui-form-item">
            <label class="layui-form-label">期权控盈率</label>
            <div class="layui-input-block">
                <input type="number" name="op_order_kong" class="layui-input"  placeholder="请输入期权控盈率" value="50">
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">备注说明</label>
            <div class="layui-input-block">
                <textarea name="remark" class="layui-textarea"  placeholder="请输入备注说明"></textarea>
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