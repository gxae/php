<?php /*a:3:{s:59:"/www/wwwroot/61.4.114.53/app/mobile/view/coinwin/lists.html";i:1630512130;s:60:"/www/wwwroot/61.4.114.53/app/mobile/view/layout/default.html";i:1630206160;s:65:"/www/wwwroot/61.4.114.53/app/mobile/view/./block/foot_script.html";i:1639227710;}*/ ?>
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
<div class="a-header position-re layui-rows">
    <div class="layui-col-xs4">
        <a href="javascript:window.history.go(-1);"><i class="layui-icon layui-icon-left"></i></a>
    </div>
	<div class="layui-col-xs4 text-center">
		<?php echo lang('coinwin.title'); ?>
	</div>
	<div class="layui-col-xs4 text-right">
        <a href="<?php echo url('/mobile'); ?>"><i class="layui-icon layui-icon-home"></i></a>
    </div>
</div>
<div class="new-bg">
	<div class="main-no">
		<div class="layui-container">
			<div class="text-center coinwin-header">
				<span class="flag"><?php echo htmlentities($coin_title); ?></span>
				<div class="layui-row">
					<div class="layui-col-xs6">
						<span><?php echo number_format($info['money'],4); ?></span>
						<p><?php echo lang('coinwin.now_wallet'); ?></p>
					</div>
					<div class="layui-col-xs6">
						<span id="can_win_today"></span>
						<p><?php echo lang('coinwin.can_today_win'); ?></p>
					</div>
					<div class="layui-col-xs6">
						<span><?php echo number_format($info['rate_account'],4); ?></span>
						<p><?php echo lang('coinwin.all_win'); ?></p>
					</div>
					<div class="layui-col-xs6">
						<span><?php echo number_format($info['buy_account'],4); ?></span>
						<p><?php echo lang('coinwin.now_order_in'); ?></p>
					</div>
				</div>
			</div>
			<div class="layui-row layui-col-space20 coinwin-body">
			  <?php if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			  <div class="layui-col-xs12">
				<form class="layui-form" action="">
			    <div class="layui-panel">
			     <h3><?php echo htmlentities($vo['info']['title']); ?></h3>
					<input type="hidden" name="good_id" value="<?php echo htmlentities($vo['id']); ?>">
					 <input type="" name="buy_account" value="" lay-verify="required|account" lay-verType="tips" placeholder="<?php echo lang('coinwin.min_coin_num'); ?><?php echo htmlentities(floatVal($vo['play_price'])); ?>" class="layui-input"/>
					 <div class="layui-row">
					 	<div class="layui-col-xs4">
					 		<span class="font-25"><?php echo htmlentities(floatVal($vo['play_price'])); ?></span>
							<p class="color-grey"><?php echo lang('coinwin.min_coin_num'); ?></p>
					 	</div>
						<div class="layui-col-xs4">
							<span class="font-25"><?php echo floatVal(bc_mul($vo['play_rate'],100)); ?></span>
							<p class="color-grey"><?php echo lang('coinwin.all_rate'); ?></p>
						</div>
						<div class="layui-col-xs4 text-right">
							<span class="font-25"><?php echo htmlentities(floatVal($vo['play_time'])); ?></span>
							<p class="color-grey"><?php echo lang('coinwin.play_time'); ?></p>
						</div>
					 </div>
					 <div class="mt-30">
					 	<button class="layui-btn layui-btn-normal" lay-submit lay-filter="formCoin<?php echo htmlentities($vo['id']); ?>"><?php echo lang('coinwin.btn_buy'); ?></button>
					 </div>
			    </div> 
				</form>  
			  </div>
			 <?php endforeach; endif; else: echo "" ;endif; ?>
			</div> 
			<div class="layui-clear"></div>
			<!--收益-->
			<div class="coinwin-bottom">
				<div class="layui-tab layui-tab-brief" lay-filter="tabList">
				  <ul class="layui-tab-title">
				    <li class="layui-this"><?php echo lang('coinwin.bottom_tab_a'); ?></li>
				    <li><?php echo lang('coinwin.bottom_tab_b'); ?></li>
				    <li><?php echo lang('coinwin.bottom_tab_c'); ?></li>
				  </ul>
				  <div class="layui-tab-content mobile-layui-tab-content">
						<div class="layui-tab-item layui-show">
							<table class="layui-table fox-table" lay-skin="nob" lay-even>
							  <thead>
							    <tr>
							      <th><span class="table-span-list"><?php echo lang('coinwin.table_tit_good'); ?></th>
							      <th><span class="table-span-list"><?php echo lang('coinwin.table_tit_buy'); ?>/<?php echo lang('coinwin.table_tit_win'); ?></span></th>
							      <th><span class="table-span-list"><?php echo lang('coinwin.table_tit_time'); ?></span></th>
							      <th><span class="table-span-list"><?php echo lang('coinwin.table_tit_type'); ?></span></th>
							    </tr> 
							  </thead>
							  <tbody id="lista">
							    
							  </tbody>
							</table>
						</div>
						<div class="layui-tab-item">
							<table class="layui-table fox-table" lay-skin="nob" lay-even>
								<thead>
									<tr>
										<th><span class="table-span-list"><?php echo lang('coinwin.table_tit_good'); ?></th>
										<th><span class="table-span-list"><?php echo lang('coinwin.table_tit_buy'); ?>/<?php echo lang('coinwin.table_tit_win'); ?></span></th>
										<th><span class="table-span-list"><?php echo lang('coinwin.table_tit_time'); ?></span></th>
										<th><span class="table-span-list"><?php echo lang('coinwin.table_tit_type'); ?></span></th>
									</tr> 
								</thead>
								<tbody id="listb">
							    
								</tbody>
							</table>
						</div>
						<div class="layui-tab-item">
							<table class="layui-table fox-table" lay-skin="nob" lay-even>
							  <thead>
							    <tr>
									<th><span class="table-span-list"><?php echo lang('coinwin.table_tit_times'); ?>/<?php echo lang('coinwin.table_tit_good'); ?></span></th>
									<th><span class="table-span-list"><?php echo lang('coinwin.table_tit_wins'); ?></span></th>
									<th><span class="table-span-list"><?php echo lang('coinwin.table_tit_types'); ?></span></th>
							    </tr> 
							  </thead>
							  <tbody id="listc">
							    
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
var product_id ="<?php echo htmlentities($product_id); ?>";
layui.use(['layer','element','jquery', 'form', 'flow'], function(){
	var layer = layui.layer
	,element = layui.element
	,$ = layui.jquery
	,form = layui.form
	var flow = layui.flow;

	form.verify({
		account: [
			/^(?!(0[0-9]{0,}$))[0-9]{1,}[.]{0,}[0-9]{0,}$/
			,"<?php echo lang('coinwin.check_buy_number'); ?>"
		] 
	});

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

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
	});

	window.refreshLista = function(){
		$('#lista').empty();
			flow.load({
			elem: '#lista' //指定列表容器
			,colSpan: 4 //列数
			,isAuto: true
			,end:'<td colspan="4" class="text-center"><?php echo lang("finance.finance_nodata"); ?></td>'
			,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
			var lis = [];
			$.post("<?php echo url('coinwin/lista'); ?>",{product_id:product_id,page:page}, function(res){
				layui.each(res.data, function(index, item){
					var html = '<tr>';
					html = html + '<td>'+item.title+'</td>';	
					html = html + '<td>'+parseFloat(item.buy_account)+'<br>'+parseFloat(item.rate_account).toFixed(4)+'</td>';	
					html = html + '<td>'+item.lock+'</td>';
					html = html + '<td>'+item.upstatus+'</td>';	
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
			,colSpan: 4 //列数
			,isAuto: true
			,end:'<td colspan="4" class="text-center"><?php echo lang("finance.finance_nodata"); ?></td>'
			,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
			var lis = [];
			$.post("<?php echo url('coinwin/listb'); ?>",{product_id:product_id,page:page}, function(res){
				layui.each(res.data, function(index, item){
					var html = '<tr>';
					html = html + '<td>'+item.title+'</td>';	
					html = html + '<td>'+parseFloat(item.buy_account)+'<br>'+parseFloat(item.rate_account).toFixed(4)+'</td>';	
					html = html + '<td>------</td>';
					html = html + '<td>'+item.upstatus+'</td>';	
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
			$.post("<?php echo url('coinwin/listc'); ?>",{product_id:product_id,page:page}, function(res){
				layui.each(res.data, function(index, item){
					var html = '<tr>';
					html = html + '<td>'+item.create_time+'<br>'+item.remark+'</td>';	
					html = html + '<td>'+item.allacount+'</td>';	
					html = html + '<td>'+item.ordertype+'</td>';	
					html = html + '</tr>';
					lis.push(html);
				}); 
				next(lis.join(''), page < res.pages);    
				});
			}
		});
	}
	
	//监听提交
	<?php if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	form.on('submit(formCoin<?php echo htmlentities($vo['id']); ?>)', function(data){
		loading =layer.load(1, {shade: [0.1,'#fff']});
		data.field.product_id=product_id;
		$.post("<?php echo url('coinwin/dobuy'); ?>", data.field, function (res) {
			layer.close(loading);
			if (res.code > 0) {
				if(res.url){
					layer.msg(res.msg, {time: 1800}, function () {
						location.href = res.url;
					});
				}else{
					layer.msg(res.msg, {time: 1800}, function () {
						window.location.reload();
					});
				}
			} else {
				if(res.url){
					layer.msg(res.msg, {time: 1800}, function () {
						location.href = res.url;
					});
				}else{
					layer.msg(res.msg, {time: 1800});
				}
			}
		});
		return false;
	});
	<?php endforeach; endif; else: echo "" ;endif; ?>

	refreshLista();
});
</script>

</body>
</html>