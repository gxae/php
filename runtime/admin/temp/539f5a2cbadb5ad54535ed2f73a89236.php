<?php /*a:2:{s:72:"/www/wwwroot/nasdaqhome.com/app/admin/view/system/config/editconfig.html";i:1624005096;s:62:"/www/wwwroot/nasdaqhome.com/app/admin/view/layout/default.html";i:1649939362;}*/ ?>
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
 * @LastEditTime: 2021-06-18 16:31:36
 * @Description: Forward, no stop
-->
<div class="layuimini-container">
    <form id="app-form" class="layui-form layuimini-form">
        <input type="hidden" name="id" value="<?php echo htmlentities((isset($row['id']) && ($row['id'] !== '')?$row['id']:'')); ?>">
        <div class="layui-form-item  layui-row layui-col-xs12">
            <label class="layui-form-label required">所属分组</label>
            <div class="layui-input-block">
                <select name="group">
                    <?php foreach($cateList as $vo): ?>
                    <option value="<?php echo htmlentities($vo['name']); ?>" <?php if($vo['name']==$row['group']): ?>selected<?php endif; ?>><?php echo $vo['remark']; ?></option>
                    <?php endforeach; ?>
                </select>
                <tip>选择配置分组。</tip>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label required">配置名称</label>
            <div class="layui-input-block">
                <input type="text" name="remark" class="layui-input" value="<?php echo htmlentities((isset($row['remark']) && ($row['remark'] !== '')?$row['remark']:'')); ?>">
                <tip>填写配置名称。</tip>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label required">配置标识</label>
            <div class="layui-input-block">
                <input type="text" name="name" class="layui-input" value="<?php echo htmlentities((isset($row['name']) && ($row['name'] !== '')?$row['name']:'')); ?>">
                <tip>填写配置唯一标识。</tip>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label required">默认值</label>
            <div class="layui-input-block">
                <input type="text" name="value" class="layui-input" value="<?php echo htmlentities((isset($row['value']) && ($row['value'] !== '')?$row['value']:'')); ?>">
                <tip>填写配置默认值。</tip>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label required">类型</label>
            <div class="layui-input-block">
                <?php foreach(['text'=>'输入框','radio'=>'单选框','image'=>'图片','textarea'=>'文本域'] as $key=>$val): ?>
                <input type="radio" v-model="type" name="type" lay-filter="type" value="<?php echo htmlentities($key); ?>" title="<?php echo htmlentities($val); ?>" <?php if($key==$row['type']): ?>checked<?php endif; ?>>
                <?php endforeach; ?>
                <tip class="layui-input-block">配置默认格式。</tip>
            </div>
        </div>

        <div class="layui-form-item" id="radio_type" style="display: <?php if($row['type']<>'radio'): ?>none<?php endif; ?>;">
            <label class="layui-form-label required">默认选择值</label>
            <div class="layui-input-block">
                <input type="text" name="sets" class="layui-input" lay-reqtext="请输入选择值" placeholder="请输入选择值" value="<?php echo htmlentities((isset($row['sets']) && ($row['sets'] !== '')?$row['sets']:'')); ?>">
                <tip>例子：男,女（格式用,分开）</tip>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">补充说明</label>
            <div class="layui-input-block">
                <input type="text" name="content" class="layui-input" value="<?php echo htmlentities((isset($row['content']) && ($row['content'] !== '')?$row['content']:'')); ?>">
                <tip>填写配置补充说明。</tip>
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