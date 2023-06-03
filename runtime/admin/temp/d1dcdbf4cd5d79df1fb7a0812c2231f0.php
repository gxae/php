<?php /*a:2:{s:59:"/www/wwwroot/61.4.114.53/app/admin/view/cpm/banner/add.html";i:1624633514;s:59:"/www/wwwroot/61.4.114.53/app/admin/view/layout/default.html";i:1649939362;}*/ ?>
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
 * @Date: 2021-06-25 22:18:49
 * @LastEditTime: 2021-06-25 23:05:15
 * @Description: Forward, no stop
-->
<div class="layuimini-container">
    <form id="app-form" class="layui-form layuimini-form">
        
        <div class="layui-form-item">
            <label class="layui-form-label">标题</label>
            <div class="layui-input-block">
                <input type="text" name="title" class="layui-input" lay-verify="required" placeholder="请输入标题" value="">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label required">图片</label>
            <div class="layui-input-block layuimini-upload">
                <input name="logo" class="layui-input layui-col-xs6" placeholder="请上传logo" value="<?php echo sysconfig('base','member_avatar'); ?>">
                <div class="layuimini-upload-btn">
                    <span><a class="layui-btn" data-upload="logo" data-upload-number="one" data-upload-exts="png|jpg|jpeg" data-upload-icon="image"><i class="fa fa-upload"></i> 上传</a></span>
                    <span><a class="layui-btn layui-btn-normal" id="select_logo" data-upload-select="logo" data-upload-number="one" data-upload-mimetype="image/*"><i class="fa fa-list"></i> 选择</a></span>
                </div>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">类型</label>
            <div class="layui-input-block">
                <?php foreach($cpm_types as $key=>$val): ?>
                <input type="radio" name="type" value="<?php echo htmlentities($key); ?>" title="<?php echo htmlentities($val); ?>">
                <?php endforeach; ?>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">位置</label>
            <div class="layui-input-block">
                <?php foreach($cpm_names as $key=>$val): ?>
                <input type="radio" name="name" value="<?php echo htmlentities($key); ?>" title="<?php echo htmlentities($val); ?>">
                <?php endforeach; ?>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">语言</label>
            <div class="layui-input-block">
                <?php foreach($lang_list as $key=>$val): ?>
                <input type="radio" name="lang" value="<?php echo htmlentities($val); ?>" title="<?php echo htmlentities($val); ?>">
                <?php endforeach; ?>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">内容描述</label>
            <div class="layui-input-block">
                <textarea name="content" rows="20" class="layui-textarea editor" 内容描述 placeholder="请输入内容描述"></textarea>
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