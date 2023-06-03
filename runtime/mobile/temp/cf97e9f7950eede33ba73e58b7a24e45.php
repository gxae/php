<?php /*a:3:{s:70:"/www/wwwroot/www.nsdkaqnn.com/app/mobile/view/finance/transferlog.html";i:1630032558;s:65:"/www/wwwroot/www.nsdkaqnn.com/app/mobile/view/layout/default.html";i:1630206160;s:70:"/www/wwwroot/www.nsdkaqnn.com/app/mobile/view/./block/foot_script.html";i:1639227710;}*/ ?>
<!--
 * @Author: Fox Blue
 * @Date: 2021-05-31 13:44:29
 * @LastEditTime: 2021-08-29 11:02:41
 * @Description: Forward, no stop
-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo htmlentities($web_name); ?></title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php echo token_meta(); ?>
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/static/mobile/layui/css/layui.css?v=<?php echo htmlentities($version); ?>" media="all">
    <link rel="stylesheet" href="/static/mobile/css/style.css?v=<?php echo htmlentities($version); ?>" media="all">
    <link rel="stylesheet" href="/static/mobile/css/mobile.css?v=<?php echo htmlentities($version); ?>" media="all">
    <link rel="stylesheet" href="/static/mobile/lib/font-awesome-4.7.0/css/font-awesome.min.css?v=<?php echo htmlentities($version); ?>" media="all">
    <?php if($theme=='Dark'): ?>
    <link rel="stylesheet" href="/static/mobile/css/dark.css?v=<?php echo htmlentities($version); ?>" media="all">
    <?php else: ?>
    <link rel="stylesheet" href="/static/mobile/css/white.css?v=<?php echo htmlentities($version); ?>" media="all">
    <?php endif; ?>
    <script src="/static/mobile/js/jquery-3.4.1/jquery-3.4.1.min.js?v=<?php echo htmlentities($version); ?>"></script>
    <?php if($langJs): ?>
    <script src="<?php echo htmlentities($langJs); ?>?v=<?php echo htmlentities($version); ?>" charset="utf-8"></script>
    <?php endif; ?>
    <script src="/static/plugs/layui-v2.5.6/layui.js?v=<?php echo htmlentities($version); ?>" charset="utf-8"></script>
    <script>
        var theme = "<?php echo htmlentities($theme); ?>";
        var langSec = "<?php echo url('ajax/lang'); ?>";
        var themeSec = "<?php echo url('ajax/theme'); ?>";
        var site_type = "<?php echo sysconfig('site','site_type'); ?>";
        var local_socket = "<?php echo sysconfig('api','local_socket'); ?>";
        var api_socket = "<?php echo sysconfig('api','api_socket'); ?>";
        var userWallet = "<?php echo url('finance/userwallet'); ?>";
    </script>
</head>
<body>
<!--
 * @Author: Fox Blue
 * @Date: 2021-07-27 01:22:50
 * @LastEditTime: 2021-08-27 10:49:18
 * @Description: Forward, no stop
-->
<div class="a-header position-re">
	<div class="layui-row">
		<div class="layui-col-xs3">
			<a href="javascript:window.history.go(-1);"><i class="layui-icon layui-icon-left"></i></a>
		</div>
		<div class="layui-col-xs6 text-center">
			<?php echo lang('finance.transfer_logs'); ?>
		</div>
		<div class="layui-col-xs3 text-right">
			<a href="<?php echo url('/mobile'); ?>"><i class="layui-icon layui-icon-home"></i></a>
		</div>
	</div>
</div>
<div class="new-bg">
	<div class="main padding-l-r">
			<div class="white-box">
				<div class="transfer-box">
					<div class="assets-bottom">
						<table class="layui-table" lay-skin="nob">
						  <thead>
						    <tr>
								<th><span class="table-span-list"><?php echo lang('finance.flow_time'); ?>/<?php echo lang('finance.flow_title'); ?></span></th>
								<th><span class="table-span-list"><?php echo lang('finance.flow_all'); ?>/<?php echo lang('finance.flow_resault'); ?></span></th>
						    </tr> 
						  </thead>
						  <tbody id="loglist">
						    
						  </tbody>
						</table>
					</div>
				</div>
		</div>
	</div>
</div>
<!--footer-->
<!--
 * @Author: Fox Blue
 * @Date: 2021-07-01 18:58:10
 * @LastEditTime: 2021-08-25 16:18:44
 * @Description: Forward, no stop
-->
<script src="/static/mobile/js/script.js?v=<?php echo htmlentities($version); ?>"></script>
<script src="/static/mobile/js/clipboard.min.js?v=<?php echo htmlentities($version); ?>"></script>
<script src="/static/mobile/js/iosapp.js"></script>

<script>
	layui.use(['layer', 'jquery', 'form', 'element', 'flow'], function(){
		var layer = layui.layer
		,$ = layui.jquery
		,form = layui.form;
		var element = layui.element;
		var flow = layui.flow;

		window.findlog = function(){
			$('#loglist').empty();
				flow.load({
				elem: '#loglist' //指定列表容器
				,colSpan:2 //列数
				,end:'<td colspan="2" class="text-center"><?php echo lang("finance.finance_nodata"); ?></td>'
				,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
				var lis = [];
				$.post("<?php echo url('finance/findalllog'); ?>",{page:page}, function(res){
					layui.each(res.data, function(index, item){
					lis.push('<tr><td>'+ item.create_time +'<br>'+ item.title +'</td><td>'+ item.all_account +'<br>'+ item.status +'</td></tr>');
					}); 
					next(lis.join(''), page < res.pages);    
					});
				}
			});
		}

		$(function(){
			findlog();
		})
		
	})
	
</script>

</body>
</html>