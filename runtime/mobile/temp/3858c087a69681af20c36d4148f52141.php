<?php /*a:4:{s:59:"/www/wwwroot/nsdkqdsdf.com/app/mobile/view/winer/lists.html";i:1632716046;s:62:"/www/wwwroot/nsdkqdsdf.com/app/mobile/view/layout/default.html";i:1630206160;s:71:"/www/wwwroot/nsdkqdsdf.com/app/mobile/view/./block/mobile_backhome.html";i:1629389878;s:67:"/www/wwwroot/nsdkqdsdf.com/app/mobile/view/./block/foot_script.html";i:1639227710;}*/ ?>
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
 * @Date: 2021-08-05 22:42:11
 * @LastEditTime: 2021-09-27 12:14:06
 * @Description: Forward, no stop
-->
<!--
 * @Author: Fox Blue
 * @Date: 2021-08-20 00:16:00
 * @LastEditTime: 2021-08-20 00:17:59
 * @Description: Forward, no stop
-->
<div class="a-header position-re layui-rows">
    <div class="layui-col-xs6">
        <a href="javascript:window.history.go(-1);"><i class="layui-icon layui-icon-left"></i></a>
    </div>
	<div class="layui-col-xs6 text-right">
        <a href="<?php echo url('/mobile'); ?>"><i class="layui-icon layui-icon-home"></i></a>
    </div>
</div>

<div class="new-bg">
	<div class="main-no">
			<div class="white-box pd-10">
				<div class="transfer-box coinwin-bottom">
					<div class="layui-tab layui-tab-brief" lay-filter="tabList">
						<ul class="layui-tab-title">
						  <li class="layui-this"><?php echo lang('winer.lists'); ?></li>
						  <li><?php echo lang('winer.daylists'); ?></li>
						</ul>
						<div class="layui-tab-content">
							<div class="layui-tab-item layui-show">
								<table class="layui-table fox-table" lay-skin="nob" lay-even>
								<thead>
									<tr>
									<th><span class="table-span-list"><?php echo lang('winer.table_title'); ?>/<?php echo lang('winer.table_nums'); ?></span></th>
									<th><span class="table-span-list"><?php echo lang('winer.table_rates'); ?>/<?php echo lang('winer.table_time'); ?></span></th>
									<th><span class="table-span-list"><?php echo lang('winer.table_lock'); ?>/<?php echo lang('winer.table_status'); ?></span></th>
									</tr> 
								</thead>
								<tbody id="lists">
									
								</tbody>
								</table>
							</div>
							<div class="layui-tab-item">
								<table class="layui-table fox-table" lay-skin="nob" lay-even>
								<thead>
									<tr>
										<th><span class="table-span-list"><?php echo lang('winer.table_times'); ?></span></th>
										<th><span class="table-span-list"><?php echo lang('winer.table_title'); ?></span></th>
										<th><span class="table-span-list"><?php echo lang('winer.table_rate'); ?></span></th>
									</tr> 
								</thead>
								<tbody id="listlog">
									
								</tbody>
								</table>
							</div>
						</div>
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
	layui.use(['layer','element','jquery', 'form', 'flow'], function(){
		var layer = layui.layer
		,element = layui.element
		,$ = layui.jquery
		,form = layui.form
		var flow = layui.flow;

		element.on('tab(tabList)', function(data){
			if(data.index == 0){
				listWiner();
			}
			if(data.index == 1){
				listLog();
			}
		});

		window.listWiner = function(){
			$('#lists').empty();
			flow.load({
				elem: '#lists' //指定列表容器
				,colSpan: 3 //列数
				,isAuto: true
				,end:'<td colspan="3" class="text-center load-box-fox"><?php echo lang("finance.finance_nodata"); ?></td>'
				,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
				var lis = [];
				$.post("<?php echo url('winer/lists'); ?>",{page:page}, function(res){
					layui.each(res.data, function(index, item){
						var html = '<tr>';
						html = html + '<td>'+item.title+'-'+item.id+'<br>'+parseFloat(item.buy_account)+'</td>';
						html = html + '<td>'+parseFloat(item.rate_account).toFixed(6)+'<br>'+item.time+'</td>';
						html = html + '<td>'+item.lock+'<br>'+item.upstatus+'</td>';	
						html = html + '</tr>';
						lis.push(html);
					}); 
					next(lis.join(''), page < res.pages);    
					});
				}
			});
		}

		window.listLog = function(){
			$('#listlog').empty();
			flow.load({
				elem: '#listlog' //指定列表容器
				,colSpan: 3 //列数
				,isAuto: true
				,end:'<td colspan="3" class="text-center load-box-fox"><?php echo lang("finance.finance_nodata"); ?></td>'
				,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
				var lis = [];
				$.post("<?php echo url('winer/listlog'); ?>",{page:page}, function(res){
					layui.each(res.data, function(index, item){
						var html = '<tr>';
						html = html + '<td>'+item.create_time+'</td>';
						html = html + '<td>'+item.title+'</td>';	
						html = html + '<td>'+parseFloat(item.all_account)+'</td>';
						html = html + '</tr>';
						lis.push(html);
					}); 
					next(lis.join(''), page < res.pages);    
					});
				}
			});
		}

		listWiner();
	})
</script>
</body>
</html>