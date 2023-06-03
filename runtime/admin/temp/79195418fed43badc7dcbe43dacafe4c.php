<?php /*a:2:{s:62:"/www/wwwroot/61.4.114.53/app/admin/view/member/user/level.html";i:1628781376;s:59:"/www/wwwroot/61.4.114.53/app/admin/view/layout/default.html";i:1649939362;}*/ ?>
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
 * @Date: 2021-08-12 18:23:36
 * @LastEditTime: 2021-08-12 23:16:17
 * @Description: Forward, no stop
-->
<!--
 * @Author: Fox Blue
 * @Date: 2021-05-31 22:21:06
 * @LastEditTime: 2021-08-12 22:15:56
 * @Description: Forward, no stop
-->
<div class="layuimini-container">
    <form id="app-form" class="layui-form layuimini-form">
        
        <div class="layui-form-item">
            <label class="layui-form-label">原上级</label>
            <div class="layui-input-block">
                <div class="div-cos"><label>上级</label><?php echo htmlentities($row['leveler']); ?></div>
                <div class="div-cos"><label>股东</label><?php echo htmlentities($row['holder']); ?></div>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">新上级</label>
            <div class="layui-input-inline">
                <select name="" id="gudong" lay-filter="gudong" required>
                    <option value="" selected="">股东</option>
                    <?php if(is_array($gudong) || $gudong instanceof \think\Collection || $gudong instanceof \think\Paginator): $i = 0; $__LIST__ = $gudong;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo htmlentities($vo['id']); ?>"><?php echo htmlentities($vo['username']); ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
            <div class="layui-input-inline">
                <select name="level_id" id="level_id">
                </select>
            </div>
        </div>
        <div class="hr-line"></div>
        <div class="layui-form-item text-center">
            <button type="submit" class="layui-btn layui-btn-normal layui-btn-sm" lay-submit>确认</button>
            <button type="reset" class="layui-btn layui-btn-primary layui-btn-sm">重置</button>
        </div>

    </form>
</div>
<script>
layui.use(['form'], function () {
    var form = layui.form;
    form.on('select(gudong)', function(data){
        //data.value 得到被选中的值
        $.post("<?php echo url('ajax/findlevel'); ?>", {id:data.value}, function (res) {
            if (res.code > 0) {
                $("#level_id").empty();
                $('#level_id').append("<option value=''>请选择业务员</option>");
                $.each(res.data, function (index, item) {
                    $('#level_id').append("<option value='" + item.id + "'>" + item.username + "</option>");
                });
                form.render("select");
            }
        })
    })
})
</script>
</body>
</html>