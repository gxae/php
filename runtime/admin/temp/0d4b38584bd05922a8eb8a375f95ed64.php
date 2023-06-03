<?php /*a:2:{s:71:"/www/wwwroot/nasdaqhome.com/app/admin/view/system/config/setconfig.html";i:1625134676;s:62:"/www/wwwroot/nasdaqhome.com/app/admin/view/layout/default.html";i:1649939362;}*/ ?>
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
 * @LastEditTime: 2021-07-01 18:17:57
 * @Description: Forward, no stop
-->
<style>
.layui-form-label {
    width: 150px;
}
.layui-input-block {
    margin-left: 190px;
}
</style>
<div class="layuimini-container">
    <div class="layuimini-main">
        <form id="app-form" class="layui-form layuimini-form">
            <div class="layui-card">
                <div class="layui-card-header"><i class="fa fa-warning icon"></i>调取方式</div>
                <div class="layui-card-body">
                    <div class="welcome-module">
                        <input class="layui-input" style="margin:10px;border:0;color:#FF6600;" value="sysconfig('<?php echo htmlentities($row['group']); ?>','<?php echo htmlentities($row['name']); ?>')">
                    </div>
                </div>
            </div>
            <input type="hidden" name="id" value="<?php echo htmlentities((isset($row['id']) && ($row['id'] !== '')?$row['id']:'')); ?>">
            <?php if($row['type']=='radio'): ?>
            <div class="layui-form-item">
                <label class="layui-form-label required"><?php echo htmlentities($row['remark']); ?></label>
                <div class="layui-input-block">
                    <?php foreach($row['sets'] as $key => $val): ?>
                    <input type="radio" name="value" value="<?php echo htmlentities($val); ?>" title="<?php echo htmlentities($val); ?>" <?php if($val==$row['value']): ?>checked<?php endif; ?>>
                    <?php endforeach; ?>
                    <tip>选择<?php echo htmlentities($row['remark']); ?>。<?php echo htmlentities($row['content']); ?></tip>
                </div>
            </div>
            <?php endif; if($row['type']=='image'): ?>
            <div class="layui-form-item">
                <label class="layui-form-label required"><?php echo htmlentities($row['remark']); ?></label>
                <div class="layui-input-block layuimini-upload">
                    <input name="value" class="layui-input layui-col-xs6" placeholder="请上传<?php echo htmlentities($row['remark']); ?>" value="<?php echo sysconfig($row['group'],$row['name']); ?>">
                    <div class="layuimini-upload-btn">
                        <span><a class="layui-btn" data-upload="value" data-upload-number="one" data-upload-exts="ico|png|jpg|jpeg"><i class="fa fa-upload"></i> 上传</a></span>
                        <span><a class="layui-btn layui-btn-normal" id="select_value" data-upload-select="value" data-upload-number="one"><i class="fa fa-list"></i> 选择</a></span>
                    </div>
                </div>
            </div>
            <?php endif; if($row['type']=='text'): ?>
            <div class="layui-form-item">
                <label class="layui-form-label required"><?php echo htmlentities($row['remark']); ?></label>
                <div class="layui-input-block">
                    <input type="text" name="value" class="layui-input" placeholder="请输入<?php echo htmlentities($row['remark']); ?>" value="<?php echo sysconfig($row['group'],$row['name']); ?>">
                    <tip>填写<?php echo htmlentities($row['remark']); ?>。<?php echo htmlentities($row['content']); ?></tip>
                </div>
            </div>
            <?php endif; if($row['type']=='textarea'): ?>
            <div class="layui-form-item">
                <label class="layui-form-label required"><?php echo htmlentities($row['remark']); ?></label>
                <div class="layui-input-block">
                    <textarea name="value" class="layui-textarea"  placeholder="请输入<?php echo htmlentities($row['remark']); ?>"><?php echo sysconfig($row['group'],$row['name']); ?></textarea>
                    <tip>填写<?php echo htmlentities($row['remark']); ?>。<?php echo htmlentities($row['content']); ?></tip>
                </div>
            </div>
            <?php endif; ?>
            <div class="hr-line"></div>
            <div class="layui-form-item text-center">
                <button type="submit" class="layui-btn layui-btn-normal layui-btn-sm" lay-submit="system.config/setconfig" data-refresh="false">确认</button>
                <button type="reset" class="layui-btn layui-btn-primary layui-btn-sm">重置</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>