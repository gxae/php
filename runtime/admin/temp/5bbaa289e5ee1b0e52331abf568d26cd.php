<?php /*a:2:{s:63:"/www/wwwroot/61.4.114.53/app/admin/view/member/config/edit.html";i:1624436674;s:59:"/www/wwwroot/61.4.114.53/app/admin/view/layout/default.html";i:1649939362;}*/ ?>
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
 * @Date: 2021-06-23 15:46:35
 * @LastEditTime: 2021-06-23 16:24:34
 * @Description: Forward, no stop
-->
<div class="layuimini-container">
    <form id="app-form" class="layui-form layuimini-form">
        
        <div class="layui-form-item">
            <label class="layui-form-label">设置名</label>
            <div class="layui-input-block">
                <input type="text" name="name" class="layui-input" lay-verify="required" placeholder="请输入设置名" value="<?php echo htmlentities((isset($row['name']) && ($row['name'] !== '')?$row['name']:'')); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">标题说明</label>
            <div class="layui-input-block">
                <input type="text" name="title" class="layui-input" lay-verify="required" placeholder="请输入标题说明" value="<?php echo htmlentities((isset($row['title']) && ($row['title'] !== '')?$row['title']:'')); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">设置值</label>
            <div class="layui-input-block">
                <input type="text" name="value" class="layui-input"  placeholder="请输入设置值" value="<?php echo htmlentities((isset($row['value']) && ($row['value'] !== '')?$row['value']:'')); ?>">
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">备注信息</label>
            <div class="layui-input-block">
                <textarea name="remark" class="layui-textarea"  placeholder="请输入备注信息"><?php echo (isset($row['remark']) && ($row['remark'] !== '')?$row['remark']:''); ?></textarea>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">分组</label>
            <div class="layui-input-block">
                <?php foreach($member_groups as $key => $val): ?>
                <input type="radio" name="group" value="<?php echo htmlentities($key); ?>" title="<?php echo htmlentities($val); ?>" <?php if($row['group']==$key): ?>checked<?php endif; ?>>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">类型</label>
            <div class="layui-input-block">
              <input type="radio" name="type" value="0" title="任一条件" <?php if($row['type']==0): ?>checked<?php endif; ?>>
              <input type="radio" name="type" value="1" title="并列条件" <?php if($row['type']==1): ?>checked<?php endif; ?>>
            </div>
          </div>
        <div class="layui-form-item">
            <label class="layui-form-label">排序</label>
            <div class="layui-input-block">
                <input type="text" name="sort" class="layui-input"  placeholder="请输入排序" value="<?php echo htmlentities((isset($row['sort']) && ($row['sort'] !== '')?$row['sort']:'')); ?>">
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