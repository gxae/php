<?php /*a:3:{s:64:"/www/wwwroot/nasdaqhome.com/app/mobile/view/member/tradelog.html";i:1630044406;s:63:"/www/wwwroot/nasdaqhome.com/app/mobile/view/layout/default.html";i:1630206160;s:68:"/www/wwwroot/nasdaqhome.com/app/mobile/view/./block/foot_script.html";i:1639227710;}*/ ?>
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
 * @Date: 2021-08-05 11:09:41
 * @LastEditTime: 2021-08-27 14:06:47
 * @Description: Forward, no stop
-->
<div class="a-header position-re">
	<a href="javascript:window.history.go(-1);"><i class="layui-icon layui-icon-left"></i></a>
	<div class="layui-inline h-span"><?php echo lang('public_memu.member_tradelog'); ?></div>
</div>
<div class="new-bg">
	<!--主体-->
	<div class="main-no mt-10">
		<div class="layui-container">
			<div class="layui-row white-box">
				<div class="layui-col-xs12 coinwin-bottom" style="margin-top:0px;">
					<div class="layui-tab layui-tab-brief" lay-filter="tabList">
						<ul class="layui-tab-title mobile-layui-tab-title">
						  <li class="layui-this"><?php echo lang('tradelog.tab_list_a'); ?></li>
						  <li><?php echo lang('tradelog.tab_list_b'); ?></li>
						  <li><?php echo lang('tradelog.tab_list_c'); ?></li>
						  <li><?php echo lang('tradelog.tab_list_d'); ?></li>
						  <li><?php echo lang('tradelog.tab_list_e'); ?></li>
						</ul>
						<div class="layui-tab-content mobile-layui-tab-content">
							<div class="layui-tab-item layui-show">
								<table class="layui-table table-tr fox-table-14" lay-skin="nob" lay-even>
									<thead>
									  <tr>
										<th><?php echo lang('tragelog_list_a.time'); ?><br><?php echo lang('tragelog_list_a.title'); ?></th>
										<th class="text-center" width="20%"><?php echo lang('tragelog_list_a.type'); ?><br><?php echo lang('tragelog_list_a.redirect'); ?></th>
										<th><?php echo lang('tragelog_list_a.account'); ?><br><?php echo lang('tragelog_list_a.money'); ?></th>
									  </tr> 
									</thead>
									<tbody id="lista">
									  
									</tbody>
								  </table>
							  </div>
							  <div class="layui-tab-item">
								<table class="layui-table table-tr fox-table-14" lay-skin="nob" lay-even>
									<thead>
										<tr>
											<th><?php echo lang('leverdeal.table_time'); ?><br><?php echo lang('leverdeal.table_style'); ?></th>
											<th><?php echo lang('leverdeal.table_buyprice'); ?>/<?php echo lang('leverdeal.table_closeprice'); ?><br><?php echo lang('leverdeal.table_account'); ?>/<?php echo lang('leverdeal.table_play'); ?></th>
											<th><?php echo lang('leverdeal.table_rates'); ?><br><?php echo lang('leverdeal.table_salt'); ?></th>
										</tr> 
									</thead>
									<tbody id="listb">
									  
									</tbody>
								  </table>
							  </div>
							  <div class="layui-tab-item">
								<table class="layui-table table-tr fox-table-14" lay-skin="nob" lay-even>
									<thead>
									  <tr>
										<th><?php echo lang('tragelog_list_c.time'); ?><br><?php echo lang('tragelog_list_c.type'); ?>/<?php echo lang('tragelog_list_c.title'); ?></th>
										<th><?php echo lang('tragelog_list_c.aprice'); ?><br><?php echo lang('tragelog_list_c.bprice'); ?></th>
										<th><?php echo lang('tragelog_list_c.iswin'); ?><br><?php echo lang('tragelog_list_c.money'); ?></th>
									  </tr> 
									</thead>
									<tbody id="listc">
									  
									</tbody>
								  </table>
							  </div>
							  <div class="layui-tab-item">
								<table class="layui-table table-tr fox-table-14" lay-skin="nob" lay-even>
									<thead>
									  <tr>
										<th><?php echo lang('tragelog_list_d.time'); ?><br><?php echo lang('tragelog_list_d.title'); ?></th>
										<th><?php echo lang('tragelog_list_d.account'); ?><br><?php echo lang('tragelog_list_d.money'); ?></th>
										<th class="text-center"><?php echo lang('tragelog_list_d.type'); ?></th>
									  </tr> 
									</thead>
									<tbody id="listd">
									  
									</tbody>
								  </table>
							  </div>
							  <div class="layui-tab-item">
								<table class="layui-table table-tr fox-table-14" lay-skin="nob" lay-even>
									<thead>
									  <tr>
										<th><?php echo lang('tragelog_list_e.time'); ?><br><?php echo lang('tragelog_list_e.title'); ?></th>
										<th><?php echo lang('tragelog_list_e.account'); ?><br><?php echo lang('tragelog_list_e.money'); ?></th>
										<th class="text-center"><?php echo lang('tragelog_list_e.type'); ?></th>
									  </tr> 
									</thead>
									<tbody id="liste">
									  
									</tbody>
								  </table>
							  </div>
							</div>
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
				refreshLista();
			}
			if(data.index == 1){
				refreshListb();
			}
			if(data.index == 2){
				refreshListc();
			}
			if(data.index == 3){
				refreshListd();
			}
			if(data.index == 4){
				refreshListe();
			}
		});

		window.refreshLista = function(){
			$('#lista').empty();
				flow.load({
				elem: '#lista' //指定列表容器
				,colSpan: 3 //列数
				,isAuto: true
				,end:'<td colspan="3" class="text-center"><?php echo lang("finance.finance_nodata"); ?></td>'
				,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
				var lis = [];
				$.post("<?php echo url('tradelog/lista'); ?>",{page:page}, function(res){
					layui.each(res.data, function(index, item){
						var html = '<tr>';
							html = html + '<td>'+item.create_time+'<br>'+item.title+'</td>';	
							html = html + '<td class="text-center"><span class="fcolor-'+item.type+'">'+item.otype+'</span>';	
							html = html + '<br><span class="fcolor-'+item.direction+'">'+item.odirection+'</span></td>';	
							html = html + '<td>'+item.account+'<br>';	
							html = html + '<span class="fcolor-'+item.direction+'">'+item.account_product+' '+item.account_sxf_tit+'</span></td>';
							html = html + '</tr>';
						lis.push(html);
					}); 
					next(lis.join(''), page < res.pages);    
					if(res.can_win_today){
						$("#can_win_today").html(res.can_win_today);
					}
					});
				}
			});
		}

		window.refreshListb = function(){
			$('#listb').empty();
				flow.load({
				elem: '#listb' //指定列表容器
				,colSpan: 3 //列数
				,isAuto: true
				,end:'<td colspan="3" class="text-center"><?php echo lang("finance.finance_nodata"); ?></td>'
				,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
				var lis = [];
				$.post("<?php echo url('tradelog/listb'); ?>",{page:page}, function(res){
					layui.each(res.data, function(index, item){
						var html = '<tr>';
						html = html + '<td>'+item.create_time+'<br>';	
						html = html + '<span class="leverdeal-color-'+item.style+'">'+item.ostyle+'</span></td>';
						html = html + '<td><span>'+parseFloat(item.buy_price)+'</span>/';	
						html = html + '<span>'+parseFloat(item.close_price)+'</span><br>';	
						html = html + ''+parseFloat(item.account)+'/';	
						html = html + ''+item.play_time+'</td>';	
						html = html + '<td><span class="leverdeal-color-'+item.style+'">'+item.owin+'</span><br>';	
						html = html + '<span class="leverdeal-color-'+item.style+'">'+parseFloat(item.win_account)+'</span></td>';	
						html = html + '</tr>';
						lis.push(html);
					}); 
					next(lis.join(''), page < res.pages);    
					});
				}
			});
		}

		window.refreshListc = function(){
			$('#listc').empty();
				flow.load({
				elem: '#listc' //指定列表容器
				,colSpan: 3 //列数
				,isAuto: true
				,end:'<td colspan="3" class="text-center"><?php echo lang("finance.finance_nodata"); ?></td>'
				,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
				var lis = [];
				$.post("<?php echo url('tradelog/listc'); ?>",{page:page}, function(res){
					layui.each(res.data, function(index, item){
						var html = '<tr>';
							html = html + '<td>'+item.create_time+'<br>';	
							html = html + '<span class="text-center  fcolor-'+item.op_style+'">'+item.ostyle+'</span>/';	
							html = html + ''+item.title+'</td>';	
							html = html + '<td>'+parseFloat(item.start_price)+'<br>'+parseFloat(item.end_price)+'</td>';
							html = html + '<td><span class="text-center  fcolor-'+item.is_win+'">'+item.oiswin+'</span><br>';		
							html = html + '<span class="fcolor-'+item.is_win+'">'+parseFloat(item.money).toFixed(4)+'</span></td>';
							html = html + '</tr>';
						lis.push(html);
					}); 
					next(lis.join(''), page < res.pages);    
					if(res.can_win_today){
						$("#can_win_today").html(res.can_win_today);
					}
					});
				}
			});
		}

		window.refreshListd = function(){
			$('#listd').empty();
				flow.load({
				elem: '#listd' //指定列表容器
				,colSpan: 3 //列数
				,isAuto: true
				,end:'<td colspan="3" class="text-center"><?php echo lang("finance.finance_nodata"); ?></td>'
				,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
				var lis = [];
				$.post("<?php echo url('tradelog/listd'); ?>",{page:page}, function(res){
					layui.each(res.data, function(index, item){
						var html = '<tr>';
							html = html + '<td>'+item.create_time+'<br>'+item.title+'</td>';	
							html = html + '<td>'+parseFloat(item.buy_account)+'<br>'+item.time+'</td>';	
							html = html + '<td class="text-center  fcolor-'+item.status+'">'+item.ostatus+'</td>';	
							html = html + '</tr>';
						lis.push(html);
					}); 
					next(lis.join(''), page < res.pages);    
					if(res.can_win_today){
						$("#can_win_today").html(res.can_win_today);
					}
					});
				}
			});
		}

		window.refreshListe = function(){
			$('#liste').empty();
				flow.load({
				elem: '#liste' //指定列表容器
				,colSpan: 3 //列数
				,isAuto: true
				,end:'<td colspan="3" class="text-center"><?php echo lang("finance.finance_nodata"); ?></td>'
				,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
				var lis = [];
				$.post("<?php echo url('tradelog/liste'); ?>",{page:page}, function(res){
					layui.each(res.data, function(index, item){
						var html = '<tr>';
							html = html + '<td>'+item.create_time+'<br>'+item.title+'</td>';	
							html = html + '<td>'+parseFloat(item.buy_account)+'<br>'+parseFloat(item.money)+' '+item.ptitle+'</td>';	
							html = html + '<td class="text-center  fcolor-'+item.type+'">'+item.otype+'</td>';	
							html = html + '</tr>';
						lis.push(html);
					}); 
					next(lis.join(''), page < res.pages);    
					if(res.can_win_today){
						$("#can_win_today").html(res.can_win_today);
					}
					});
				}
			});
		}

		refreshLista();
	})
	
</script>
</body>
</html>