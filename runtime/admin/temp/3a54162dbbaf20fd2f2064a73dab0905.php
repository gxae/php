<?php /*a:2:{s:69:"/www/wwwroot/www.nsdkaqnn.com/app/admin/view/order/seconds/index.html";i:1649868336;s:64:"/www/wwwroot/www.nsdkaqnn.com/app/admin/view/layout/default.html";i:1649939362;}*/ ?>
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
 * @Date: 2021-08-02 01:33:14
 * @LastEditTime: 2021-08-02 16:03:27
 * @Description: Forward, no stop
-->
<div class="layuimini-container">
    <div class="layuimini-main">
        <table id="currentTable" class="layui-table layui-hide"
               data-auth-add="<?php echo auth('member.wallet/add'); ?>"
               data-auth-edit="<?php echo auth('member.wallet/edit'); ?>"
               data-auth-delete="<?php echo auth('member.wallet/delete'); ?>"
               lay-filter="currentTable">
        </table>
    </div>
</div>
<script>
	layui.use(['table', 'jquery', 'form'], function () {
        var table = layui.table,
            $ = layui.jquery,
            form = layui.form;

        //监听单控
        form.on('select(selectKongType)', function (data) {
            var id = $(data.elem).attr('lay-id');
            //选择的select对象值；
            var value=data.value;
            $.post("<?php echo url('kongone'); ?>", {id:id,value:value}, function (res) {
                if (res.code == 0) {
                    layer.msg(res.msg, {time: 1800, icon: 2});
                    return false;
                }else if(res.code == 1){
                    layer.msg(res.msg, {time: 1800, icon: 1});
                    return false;
                }
            });
            return false;
        });
    });
</script>
<script type="text/html" id="checkOid">
    {{#  if (d.op_status === 0 && d.kong_type === 0 && d.end_price === '0.00000000'){  }}
    <input type="checkbox" name="layTableCheckbox" lay-skin="primary" data-table = "{{ d.id }}" data-id = "{{ d.id }}">
    {{#  } }}
</script>
<script language="JavaScript">
    var order_refresh = "<?php echo sysconfig('base','seconds_refresh'); ?>";
    var t =0;
    if(parseInt(order_refresh) > 0){
        var time = 1000*parseInt(order_refresh); //指定1秒刷新一次
        function myrefresh(){
            //    window.location.reload();
            var e = document.createEvent("MouseEvents");
            e.initEvent("click", true, true);
            var revise = document.getElementsByClassName("layui-laypage-btn");
            // console.log(revise);
            if(revise){
                revise[0].dispatchEvent(e);
            }
            t++;
            // console.log(t);
            setTimeout('myrefresh()',time);
        }
        setTimeout('myrefresh()',time);
    }
     
    // $(".layui-laypage-btn").click(); 当前页刷新
</script>
</body>
</html>