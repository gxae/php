<?php /*a:5:{s:62:"/www/wwwroot/nsdkqdsdf.com/app/index/view/leverdeal/index.html";i:1638691858;s:61:"/www/wwwroot/nsdkqdsdf.com/app/index/view/layout/default.html";i:1627713636;s:65:"/www/wwwroot/nsdkqdsdf.com/app/index/view/./block/block_head.html";i:1648774108;s:65:"/www/wwwroot/nsdkqdsdf.com/app/index/view/./block/block_lang.html";i:1626105462;s:66:"/www/wwwroot/nsdkqdsdf.com/app/index/view/./block/foot_script.html";i:1626363790;}*/ ?>
<!--
 * @Author: Fox Blue
 * @Date: 2021-05-31 13:44:29
 * @LastEditTime: 2021-07-31 14:40:36
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
    <link rel="stylesheet" href="/static/index/layui/css/layui.css?v=<?php echo htmlentities($version); ?>" media="all">
    <link rel="stylesheet" href="/static/index/css/style.css?v=<?php echo htmlentities($version); ?>" media="all">
    <?php if($theme=='Dark'): ?>
    <link rel="stylesheet" href="/static/index/css/dark.css?v=<?php echo htmlentities($version); ?>" media="all">
    <?php endif; ?>
    <link rel="stylesheet" href="/static/index/lib/font-awesome-4.7.0/css/font-awesome.min.css?v=<?php echo htmlentities($version); ?>" media="all">
    <script src="/static/index/js/jquery-3.4.1/jquery-3.4.1.min.js?v=<?php echo htmlentities($version); ?>"></script>
    <?php if($langJs): ?>
    <script src="<?php echo htmlentities($langJs); ?>?v=<?php echo htmlentities($version); ?>" charset="utf-8"></script>
    <?php endif; ?>
    <script src="/static/plugs/layui-v2.5.6/layui.js?v=<?php echo htmlentities($version); ?>" charset="utf-8"></script>
    <script>
        var langSec = "<?php echo url('ajax/lang'); ?>";
        var themeSec = "<?php echo url('ajax/theme'); ?>";
        var site_type = "<?php echo sysconfig('site','site_type'); ?>";
        var local_socket = "<?php echo sysconfig('api','local_socket'); ?>";
        var api_socket = "<?php echo sysconfig('api','api_socket'); ?>";
        var userWallet = "<?php echo url('finance/userwallet'); ?>";
    </script>
</head>
<body>
<script src="/static/index/trading/pako.js?v=<?php echo htmlentities($version); ?>"></script>
<script src="/static/index/trading/event.js?v=<?php echo htmlentities($version); ?>"></script>
<script src="/static/index/trading/charting_library/charting_library.min.js?v=<?php echo htmlentities($version); ?>"></script>
<link rel="stylesheet" type="text/css" href="/static/index/lib/tablesort/tablesorter.css?v=<?php echo htmlentities($version); ?>"/>
<link rel="stylesheet" href="/static/index/trading/trading.css?v=<?php echo htmlentities($version); ?>">
<script>
var page_out="leverdeal",
	lang_kline = "<?php echo lang('kline_list.lang'); ?>";
	symbol_first ="<?php echo sysconfig('api','leverdeal_first'); ?>";
	var Webtheme = "<?php echo htmlentities($theme); ?>";
	var Productone = "<?php echo url('ajax/get_product'); ?>";
	var depth_bid = "<?php echo lang('deal.depth_bid'); ?>";
	var depth_ask = "<?php echo lang('deal.depth_ask'); ?>";
	var uid = "<?php echo session('member.id'); ?>";
</script>
<script src="/static/index/js/websocket.js?v=<?php echo htmlentities($version); ?>"></script>
<script src="/static/index/trading/datafeed.js?v=<?php echo htmlentities($version); ?>"></script>
<script src="/static/index/trading/chartConfig.js?v=<?php echo htmlentities($version); ?>"></script>
<div class="header">
	<!--
 * @Author: Fox Blue
 * @Date: 2021-07-06 21:04:33
 * @LastEditTime: 2021-10-10 13:39:26
 * @Description: Forward, no stop
-->

<ul class="layui-nav layui-row" lay-filter="">
    <div class="menu-left layui-col-xs8">
        <a href="<?php echo server_url(); ?>" class="logo" ><img style="width: 80px;height: 80px;" src="<?php echo sysconfig('site','logo_image'); ?>" ></a>
        <li class="layui-nav-item <?php if($topmenu=='market'): ?>layui-this<?php endif; ?>"><a href="<?php echo url('market/index'); ?>"><?php echo lang('public_memu.market'); ?></a></li>
        <li class="layui-nav-item <?php if($topmenu=='deal'): ?>layui-this<?php endif; ?>"><a href="<?php echo url('deal/index'); ?>"><?php echo lang('public_memu.deal'); ?></a></li>
        <li class="layui-nav-item <?php if($topmenu=='leverdeal'): ?>layui-this<?php endif; ?>"><a href="<?php echo url('leverdeal/index'); ?>"><?php echo lang('public_memu.leverdeal'); ?></a></li>
        <li class="layui-nav-item <?php if($topmenu=='seconds'): ?>layui-this<?php endif; ?>"><a href="<?php echo url('seconds/index'); ?>"><?php echo lang('public_memu.seconds'); ?></a></li>
        <li class="layui-nav-item">
            <a href="javascript:;"><i class="fa fa-list-ul" aria-hidden="true"></i></a>
            <dl class="layui-nav-child">
                <dd><a <?php if($topmenu=='winer'): ?>class="layui-this"<?php endif; ?> href="<?php echo url('winer/index'); ?>"><?php echo lang('public_memu.winer'); ?></a></dd>
               <!-- <dd><a <?php if($topmenu=='coinwin'): ?>class="layui-this"<?php endif; ?> href="<?php echo url('coinwin/index'); ?>"><?php echo lang('public_memu.coinwin'); ?></a></dd>
                <dd><a <?php if($topmenu=='ieorg'): ?>class="layui-this"<?php endif; ?> href="<?php echo url('ieorg/index'); ?>"><?php echo lang('public_memu.eiorg'); ?></a></dd>-->
                <?php if(sysconfig('base','site_kefu')): ?>
                <dd><a href="<?php echo sysconfig('base','site_kefu'); ?>"><?php echo lang('public_memu.kefu'); ?></a></dd>
                <?php endif; ?>
            </dl>
        </li>
        <?php if(session('member')): ?>
        <li class="layui-nav-item <?php if($topmenu=='finance'): ?>layui-this<?php endif; ?>"><a href="<?php echo url('finance/index'); ?>"><?php echo lang('public_memu.finance'); ?></a></li>
        <?php endif; ?>
    </div>
    <div class="menu-right layui-col-xs3">
        <?php if(session('member')): ?>
        <li class="layui-nav-item">
            <a href="<?php echo url('member/account'); ?>" style="max-width: 120px;overflow: hidden;"><i class="layui-icon layui-icon-username" style="font-size: 18px;"></i><?php echo session('member.username'); ?></a>
            <dl class="layui-nav-child">
                <dd><a href="<?php echo url('member/account'); ?>"><i class="layui-icon layui-icon-set-fill"></i><?php echo lang('public_memu.member_account'); ?></a></dd>
                <dd><a href="<?php echo url('member/team'); ?>"><i class="layui-icon layui-icon-diamond"></i><?php echo lang('public_memu.member_team'); ?></a></dd>
                <dd><a href="<?php echo url('member/tradelog'); ?>"><i class="layui-icon layui-icon-menu-fill"></i><?php echo lang('public_memu.member_tradelog'); ?></a></dd>
                <dd><a href="<?php echo url('member/incomeset'); ?>"><i class="layui-icon layui-icon-set-fill"></i><?php echo lang('public_memu.member_incomeset'); ?></a></dd>
                <dd><a href="<?php echo url('member/authset'); ?>"><i class="layui-icon layui-icon-friends"></i><?php echo lang('public_memu.member_authset'); ?></a></dd>
                <dd><a href="<?php echo url('dealings/recharge'); ?>"><i class="fa fa-share"></i><?php echo lang('public_memu.member_recharge'); ?></a></dd>
                <dd><a href="<?php echo url('dealings/withdraw'); ?>"><i class="fa fa-reply"></i><?php echo lang('public_memu.member_withdraw'); ?></a></dd>
                <?php if(sysconfig('member','turn_usdt')=='open'): ?>
                <dd><a href="<?php echo url('member/turnusdt'); ?>"><i class="fa fa fa-transgender-alt"></i><?php echo lang('public_memu.member_turn_usdt'); ?></a></dd>
                <?php endif; ?>
                <dd><a href="<?php echo url('index/loginout'); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i><?php echo lang('public_memu.loginout'); ?></a></dd>
            </dl>
        </li>
        <?php else: ?>
        <li class="layui-nav-item"><a href="<?php echo url('wicket/login'); ?>" class="layui-btn btn-nobg"><?php echo lang('public_memu.login'); ?></a></li>
        <li class="layui-nav-item"><a href="<?php echo url('wicket/register'); ?>" class="layui-btn layui-btn-normal"><?php echo lang('public_memu.register'); ?></a></li>
        <?php endif; ?>
        <li class="layui-nav-item">
            <div class="testswitch">
                <input class="testswitch-checkbox" id="onoffswitch" type="checkbox" <?php if($theme !== 'Dark'): ?>checked<?php endif; ?>>
                <label class="testswitch-label" for="onoffswitch">
                    <span class="testswitch-inner" data-on="A" data-off="B"></span>
                    <span class="testswitch-switch"></span>
                </label>
            </div>
        </li>
        <!--
 * @Author: Fox Blue
 * @Date: 2021-07-01 19:06:12
 * @LastEditTime: 2021-07-12 23:57:43
 * @Description: Forward, no stop
-->
<li class="layui-nav-item" style="margin-top:-0px">
    <a href="javascript:;"><img src="/static/index/img/earth.png" class="mr-10"><?php echo lang('lang'); ?></a>
    <dl class="layui-nav-child">
        <?php if(is_array($langlist) || $langlist instanceof \think\Collection || $langlist instanceof \think\Paginator): $k = 0; $__LIST__ = $langlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if(in_array($key, $allow_lang_list)): ?>
        <dd><a href="javascript:void(0);" onClick="changelang('<?php echo htmlentities($key); ?>')"><img src="<?php echo htmlentities($lang_img[lang($key)]); ?>" class="lang-img mr-10"><?php echo htmlentities($vo); ?></a></dd>
        <?php endif; ?>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </dl>
</li>
    </div>	  
</ul>
<div class="layui-clear"></div>
</div>
<div class="new-bg">
	<!--主体-->
	<div class="lever-box">
		<div class="lever-top">
			<div class="deal-top-left deal-bg">
				<a class="color-blue"><?php echo lang('deal.USDT'); ?></a>
				<table class="layui-table" lay-skin="nob" id="list_pro">
				  <thead>
				    <tr>
				      <th><?php echo lang('deal.left_symbol'); ?></th>
				      <th lay-data="{field:'price', sort:true}"><?php echo lang('deal.left_price'); ?></th>
				      <th><?php echo lang('deal.left_change'); ?></th>
				    </tr> 
				  </thead>
				  <tbody id="symbol">
					<?php if(is_array($product) || $product instanceof \think\Collection || $product instanceof \think\Paginator): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				    <tr data-value="<?php echo htmlentities($vo['code']); ?>" id="left_list_<?php echo htmlentities($vo['code']); ?>" style="cursor:pointer;">
				      <td data-value="<?php echo htmlentities($vo['code']); ?>"><?php echo htmlentities($vo['title']); ?></td>
				      <td data-value="<?php echo htmlentities($vo['code']); ?>" id="left_price_<?php echo htmlentities($vo['code']); ?>"><?php echo htmlentities(floatVal($vo['last_price'])); ?></td>
				      <td data-value="<?php echo htmlentities($vo['code']); ?>" id="left_change_<?php echo htmlentities($vo['code']); ?>" <?php if($vo['change']>0): ?>class="color-green"<?php else: ?>class="color-red"<?php endif; ?>><?php echo htmlentities(fox_nums(floatVal($vo['change']))); ?>%</td>
				    </tr>
				    <?php endforeach; endif; else: echo "" ;endif; ?>
				  </tbody>
				</table>
			</div>
			<div class="lever-top-left deal-bg" style="padding:0;">
				<div class="et-chart-wrap">
					<div class="et-chart-setting">
						<div class="times time-range" id="interval">
							<span data-value="1" data-kline="1"><?php echo lang('kline_list.time'); ?></span>
							<span class="active" data-value="1"><?php echo lang('kline_list.1_min'); ?></span>
							<span data-value="5"><?php echo lang('kline_list.5_min'); ?></span>
							<span data-value="15"><?php echo lang('kline_list.15_min'); ?></span>
							<span data-value="30"><?php echo lang('kline_list.30_min'); ?></span>
							<span data-value="60"><?php echo lang('kline_list.60_min'); ?></span>
							<span data-value="240"><?php echo lang('kline_list.240_min'); ?></span>
							<span data-value="1d"><?php echo lang('kline_list.1_day'); ?></span>
						</div>
					</div>
					<div class="trading-view">
						<div id="tv_chart_container"></div>
					</div>
				</div>
			</div>
			<div class="lever-top-right deal-bg">
				<h5>
					<?php echo lang('deal.depth_title'); ?>
					<div class="trade-checkout">
						<span class="depth-biao" data-value="0"><img src="/static/index/img/trade-check-1.png" ></span>
						<span class="depth-biao" data-value="1"><img src="/static/index/img/trade-check-2.png" ></span>
						<span class="depth-biao" data-value="2"><img src="/static/index/img/trade-check-3.png" ></span>
					</div>
				</h5>
				<table class="layui-table" lay-skin="nob">
				  <thead>
				    <tr>
				      <th><?php echo lang('deal.depth_redirect'); ?></th>
				      <th><?php echo lang('deal.depth_price'); ?></th>
				      <th><?php echo lang('deal.depth_total'); ?></th>
				    </tr> 
				  </thead>
				  <tbody id="bids_box"></tbody>
				  <tbody>
					<tr><td colspan="3" class="depth-box">
						<span class="color-green" id="right_price">000</span>
						<span>≈</span>
						<span id="right_price_usd"></span>
						<span>$</span>
					</td></tr>
				  </tbody>
				  <tbody id="asks_box"></tbody>
				</table>
			</div>
		</div>
		<div class="lever-bottom">
			<div class="lever-bottom-left deal-bg">
				<div class="layui-tab layui-tab-brief" lay-filter="tabList">
				  <ul class="layui-tab-title">
				    <li class="layui-this"><?php echo lang('leverdeal.left_order'); ?></li>
				    <li><?php echo lang('leverdeal.left_history'); ?></li>
				  </ul>
				  <div class="layui-tab-content">
				    <div class="layui-tab-item layui-show">
						<table class="layui-table" lay-skin="nob" lay-even>
							<thead>
							<tr>
								<th><?php echo lang('leverdeal.table_time'); ?></th>
								<th><?php echo lang('leverdeal.table_style'); ?></th>
								<th><?php echo lang('leverdeal.table_buyprice'); ?></th>
								<th><?php echo lang('leverdeal.table_nowprice'); ?></th>
								<th><?php echo lang('leverdeal.table_account'); ?></th>
								<th><?php echo lang('leverdeal.table_play'); ?></th>
								<th><?php echo lang('leverdeal.table_rates'); ?></th>
								<th><?php echo lang('leverdeal.table_do'); ?></th>
							</tr> 
							</thead>
							<tbody id="lista">
							
							</tbody>
						</table>
					</div>
					<div class="layui-tab-item">
						<table class="layui-table" lay-skin="nob" lay-even>
							<thead>
							<tr>
								<th><?php echo lang('leverdeal.table_time'); ?></th>
								<th><?php echo lang('leverdeal.table_style'); ?></th>
								<th><?php echo lang('leverdeal.table_buyprice'); ?></th>
								<th><?php echo lang('leverdeal.table_closeprice'); ?></th>
								<th><?php echo lang('leverdeal.table_account'); ?></th>
								<th><?php echo lang('leverdeal.table_play'); ?></th>
								<th><?php echo lang('leverdeal.table_rates'); ?></th>
								<th><?php echo lang('leverdeal.table_salt'); ?></th>
							</tr> 
							</thead>
							<tbody id="listb">
							
							</tbody>
						</table>
					</div>
				  </div>
				</div>
			</div>
			<div class="lever-bottom-right deal-bg">
				<div class="layui-tab layui-tab-brief">
				  <ul class="layui-tab-title">
				    <li class="layui-this"><?php echo lang('leverdeal.title'); ?></li>
					<li class="float-right"><a href="<?php echo url('finance/transfer',['type'=>2]); ?>"><?php echo lang('finance.right_transfer'); ?></a></li>			
				  </ul>
				  <div class="layui-tab-content">
				    <div class="layui-tab-item layui-show">
							<div class="layui-row layui-col-space20">
								<input type="hidden" name="deal_price" value="0"  autocomplete="off" class="layui-input deal-price">
								<input type="hidden" name="close_price" id="close_price" value="0"  autocomplete="off" class="layui-input close-price">
								<div class="layui-col-xs6 ">
									<div class="font-14"><?php echo lang('leverdeal.can_use_money'); ?><span class="can-use-money span-margin"></span><span class="pro-tit span-margin"></span></div>
									<form class="layui-form" action="">
										<div class="layui-form-item">
											<label class="layui-form-label"><?php echo lang('leverdeal.play_time_title'); ?>：</label>
											<div class="layui-input-block">
												<select name="play_time" class="play_time" lay-verify="required" lay-filter="playTime" data-type="buy">
												</select>
											</div>
										</div>
										<div class="layui-form-item">
											<label class="layui-form-label"><?php echo lang('leverdeal.buy_account'); ?>：</label>
											<div class="layui-input-block position-re">
												<input type="number" id="buy_account" name="account" value="0" lay-verify="required|buy_account" lay-verType="tips" autocomplete="off" class="layui-input">
											</div>
										</div>
										<div class="layui-form-item mt-30" id="slideNum1"></div>
										<div class="layui-form-item mt-30">
											<span><?php echo lang('leverdeal.max_num'); ?></span>
											<span class="float-right">≈<span class="buy_num_this span-margin"></span></span>
										</div>
										<div class="layui-form-item">
											<span><?php echo lang('leverdeal.right_price_this'); ?></span>
											<span class="float-right">≈<span class="right_price_this span-margin"></span><?php echo lang('leverdeal.after_usdt'); ?></span>
										</div>
										<div class="layui-form-item">
											<span><?php echo lang('leverdeal.margin_this'); ?></span>
											<span class="float-right">≈<span class="buy_margin_this span-margin"></span><?php echo lang('leverdeal.after_usdt'); ?></span>
										</div>
										<div class="layui-form-item">
											<span><?php echo lang('leverdeal.sxf_this'); ?></span>
											<span class="float-right">≈<span class="buy_sxf_this span-margin"></span><?php echo lang('leverdeal.after_usdt'); ?></span>
										</div>
										<div class="layui-form-item">
											<button type="button" class="layui-btn btn-green" lay-submit lay-filter="buyForm"><?php echo lang('leverdeal.btn_buy'); ?><span class="pro-tit span-margin"></span></button>
										</div>
									</form>
								</div>
								<div class="layui-col-xs6 ">
									<div class="font-14 text-right"><span class="le-play-time hidebox"></span>
										<span class="buy-play-time hidebox"></span>
										<span class="sell-play-time hidebox"></span>
										<span class="le-order-rate hidebox"></span>
										<?php echo lang('leverdeal.play_sxf_title'); ?>：<span class="le-sx-fee-100 span-margin"></span>
										<span class="le-sx-fee hidebox"></span>
									</div>
									<form class="layui-form" action="">
										<div class="layui-form-item">
											<label class="layui-form-label"><?php echo lang('leverdeal.play_time_title'); ?>：</label>
											<div class="layui-input-block">
												<select name="play_time" class="play_time" lay-verify="required" lay-filter="playTime" data-type="sell">
												</select>
											</div>
										</div>
										<div class="layui-form-item">
											<label class="layui-form-label"><?php echo lang('leverdeal.buy_account'); ?>：</label>
											<div class="layui-input-block position-re">
												<input type="number" id="sell_account" name="account" value="0" lay-verify="required|sell_account" lay-verType="tips" autocomplete="off" class="layui-input">
											</div>
										</div>
										<div class="layui-form-item mt-30" id="slideNum2"></div>
										<div class="layui-form-item mt-30">
											<span><?php echo lang('leverdeal.max_num'); ?></span>
											<span class="float-right">≈<span class="sell_num_this span-margin"></span></span>
										</div>
										<div class="layui-form-item">
											<span><?php echo lang('leverdeal.right_price_this'); ?></span>
											<span class="float-right">≈<span class="right_price_this span-margin"></span><?php echo lang('leverdeal.after_usdt'); ?></span>
										</div>
										<div class="layui-form-item">
											<span><?php echo lang('leverdeal.margin_this'); ?></span>
											<span class="float-right">≈<span class="sell_margin_this span-margin"></span><?php echo lang('leverdeal.after_usdt'); ?></span>
										</div>
										<div class="layui-form-item">
											<span><?php echo lang('leverdeal.sxf_this'); ?></span>
											<span class="float-right">≈<span class="sell_sxf_this span-margin"></span><?php echo lang('leverdeal.after_usdt'); ?></span>
										</div>
										<div class="layui-form-item">
											<button type="button" class="layui-btn btn-red" lay-submit lay-filter="sellForm"><?php echo lang('leverdeal.btn_sell'); ?><span class="pro-tit span-margin"></span></button>
										</div>
									</form>
								</div>
							</div>
						</div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--
 * @Author: Fox Blue
 * @Date: 2021-07-01 18:58:10
 * @LastEditTime: 2021-07-15 23:43:10
 * @Description: Forward, no stop
-->
<script src="/static/index/js/script.js?v=<?php echo htmlentities($version); ?>"></script>
<script src="/static/index/js/clipboard.min.js?v=<?php echo htmlentities($version); ?>"></script>

<script src="/static/index/js/socketset.js?v=<?php echo htmlentities($version); ?>"></script>
<script src="/static/index/js/websocket.js?v=<?php echo htmlentities($version); ?>"></script>
<script type="text/javascript" src="/static/index/lib/tablesort/tablesorter.js?v=<?php echo htmlentities($version); ?>"></script>
<!-- 拦截点击logo跳转 -->
<script type="text/javascript">
	var t;
	var tasks = new Map();
	// 定时计时任务，这里是1秒执行一次
	setInterval(function () {
		for (var key in tasks) {
		tasks[key]();
		}
	}, 3000)
	// 添加定时任务
	function addTask(key, value) {
		if (typeof value === "function") {
		tasks[key] = value;
		}
	}
	// 删除定时任务
	function delTask(task) {
		delete tasks[task];
	} 
	function plusReady() {
	var ws = plus.webview.currentWebview();
	ws.overrideUrlLoading({
		mode: 'reject'
	}, function(e) {
		console.log('url: ' + e.url);
	})
	}
	document.addEventListener('plusready', plusReady, false);
	$(function(){
		socket.sendData({
			type: 'kline',
			find: 'leverdeal',
		},null,null)
		$("#list_pro").DataTable( {
			"info": false,
			columnDefs: [
				{ orderable: false, targets: 0 }
			],
			"order": [],
			"searching":false,
			searchable:false,
			paging: false
		} );
	})
	layui.use(['layer','element','jquery','slider', 'form', 'flow'], function(){
		var layer = layui.layer
		,element = layui.element
		,$ = layui.jquery
		,form = layui.form
		,slider = layui.slider
		var flow = layui.flow;

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		form.verify({
			buy_account: function(value, item){
				var money = parseFloat($(".can-use-money").text());
				if(money <= 0){
					return "<?php echo lang('leverdeal.check_nomony'); ?>";
				}
				var ze = /^(?!(0[0-9]{0,}$))[0-9]{1,}[.]{0,}[0-9]{0,}$/;
                if (!ze.test(value))//判断数字正确否
                {
					return "<?php echo lang('leverdeal.check_buy_account'); ?>";
				}
				var buymax = parseFloat($(".buy_num_this").text());
				if(value > buymax)//判断最大量
				{
					return "<?php echo lang('leverdeal.check_buy_account_enough'); ?>" + buymax;
				}
			},
			sell_account: function(value, item){
				var money = parseFloat($(".can-use-money").text());
				if(money <= 0){
					return "<?php echo lang('leverdeal.check_nomony'); ?>";
				}
				var ze = /^(?!(0[0-9]{0,}$))[0-9]{1,}[.]{0,}[0-9]{0,}$/;
				if (!ze.test(value))//判断数字正确否
                {
					return "<?php echo lang('leverdeal.check_sell_account'); ?>";
				}
				var sellmax = parseFloat($(".sell_num_this").text());
				if(value > sellmax)//判断最大购买量
				{
					return "<?php echo lang('leverdeal.check_sell_account_enough'); ?>" + sellmax;
				}
			}
		});

		element.on('tab(tabList)', function(data){
			if(data.index == 0){
				refreshLista();
			}
			if(data.index == 1){
				refreshListb();
			}
		});

		window.orderThis = function(id){
			layer.msg("<?php echo lang('leverdeal.do_ask'); ?>", {
			time: 0 //不自动关闭
			,shade: 0.3
			,area: ['250px', '100px']
			,btn: ["<?php echo lang('leverdeal.do_ask_yes'); ?>", "<?php echo lang('leverdeal.do_ask_no'); ?>"]
			,yes: function(index){
				layer.close(index);
				$.post("<?php echo url('leverdeal/order_this'); ?>", {id:id}, function (res) {
					if (res.code > 0) {
						layer.msg(res.msg, {time: 1800},function(){
							playTime();
							refreshLista();
						});
					}else{
						if(res.url){
							layer.msg(res.msg, {time: 1800}, function () {
								location.href = res.url;
							});
						}else{
							layer.msg(res.msg, {time: 1800});
						}
					}
				})	
			}
			});
		}

		window.goThis = function(obj,id){
			addTask(obj, function () {
				$.post("<?php echo url('leverdeal/findorder'); ?>", {id:id}, function (res) {
					if (res.code > 0) {
						var data = res.data;
						var price = parseFloat(data.now_price);
						var win = parseFloat(data.win_account);
						$("#price_"+id).html(price);
						$("#win_"+id).html(win);
					}else{
						delTask(obj);
						$("#"+obj).remove();
						refreshListb();
					}
				})
			});
		}

		window.refreshLista = function(){
			$('#lista').empty();
				flow.load({
				elem: '#lista' //指定列表容器
				,colSpan: 8 //列数
				,isAuto: false
				,end:'<td colspan="8" class="text-center load-box-fox"><?php echo lang("finance.finance_nodata"); ?></td>'
				,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
				var lis = [];
				$.post("<?php echo url('leverdeal/lista'); ?>",{page:page,code:localsym}, function(res){
					layui.each(res.data, function(index, item){
						var html = '<tr id="list'+item.id+'">';
						html = html + '<td>'+item.create_time+'</td>';	
						html = html + '<td class="leverdeal-color-'+item.style+'">'+item.ostyle+'</td>';
						html = html + '<td>'+parseFloat(item.buy_price)+'</td>';	
						html = html + '<td class="price_'+item.id+'" id="price_'+item.id+'">'+parseFloat(item.now_price)+'</td>';	
						html = html + '<td>'+parseFloat(item.account)+'</td>';	
						html = html + '<td>'+item.play_time+'</td>';	
						html = html + '<td id="win_'+item.id+'" class="win'+item.id+' leverdeal-color-'+item.style+'">'+parseFloat(item.win_account)+'</td>';	
						html = html + '<td><a href="javascript:void(0);" onclick="orderThis('+item.id+')" class="layui-btn layui-btn-sm layui-btn-warm"><?php echo lang("leverdeal.do_btn"); ?></a></td>';
						html = html + '</tr>';
						lis.push(html);
						goThis("list"+item.id,item.id);
					}); 
					next(lis.join(''), page < res.pages);    
					});
				}
			});
		}

		window.refreshListb = function(){
			$('#listb').empty();
				flow.load({
				elem: '#listb' //指定列表容器
				,colSpan: 8 //列数
				,isAuto: false
				,end:'<td colspan="8" class="text-center load-box-fox"><?php echo lang("finance.finance_nodata"); ?></td>'
				,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
				var lis = [];
				$.post("<?php echo url('leverdeal/listb'); ?>",{page:page,code:localsym}, function(res){
					layui.each(res.data, function(index, item){
						var html = '<tr>';
						html = html + '<td>'+item.create_time+'</td>';	
						html = html + '<td class="leverdeal-color-'+item.style+'">'+item.ostyle+'</td>';
						html = html + '<td>'+parseFloat(item.buy_price)+'</td>';	
						html = html + '<td>'+parseFloat(item.close_price)+'</td>';	
						html = html + '<td>'+parseFloat(item.account)+'</td>';	
						html = html + '<td>'+item.play_time+'</td>';	
						html = html + '<td class="leverdeal-color-'+item.style+'">'+item.owin+'</td>';	
						html = html + '<td class="leverdeal-color-'+item.style+'">'+parseFloat(item.win_account)+'</td>';	
						html = html + '</tr>';
						lis.push(html);
					}); 
					next(lis.join(''), page < res.pages);    
					});
				}
			});
		}

		form.on('submit(buyForm)', function(data){
			if(data.field.account){
				var money = parseFloat($(".can-use-money").text());
				var buy_price = $("#close_price").val();
				data.field.buy_price = buy_price;
				data.field.money = money;
				data.field.code = localsym;
				data.field.style = 1;
				loading =layer.load(1, {shade: [0.1,'#fff']});
				$.post("<?php echo url('leverdeal/orderdo'); ?>", data.field, function (res) {
					layer.close(loading);
					if (res.code > 0) {
						layer.msg(res.msg, {time: 1800},function(){
							playTime();
							ins1.setValue(0);
							$('#buy_account').val(0);
							refreshLista();
						});
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
			}
			return false;
		});

		form.on('submit(sellForm)', function(data){
			if(data.field.account){
				var money = parseFloat($(".can-use-money").text());
				var buy_price = $("#close_price").val();
				data.field.buy_price = buy_price;
				data.field.money = money;
				data.field.code = localsym;
				data.field.style = 2;
				loading =layer.load(1, {shade: [0.1,'#fff']});
				$.post("<?php echo url('leverdeal/orderdo'); ?>", data.field, function (res) {
					layer.close(loading);
					if (res.code > 0) {
						layer.msg(res.msg, {time: 1800},function(){
							playTime();
							ins2.setValue(0);
							$('#sell_account').val(0);
							refreshLista();
						});
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
			}
			return false;
		});

		var ins1 = slider.render({
			elem: '#slideNum1'
			,step: 1 //步长
			,stepshow: 25 //间隔
			,showstep: true //开启间隔点
			,setTips: function(value){ //自定义提示文本
				return value + '%';
			}
			,change: function(value){
				var buymax = parseFloat($(".buy_num_this").text());
				if(value > 0){
					var num = floatMul(buymax,value/100);
					$('#buy_account').val(num);
				}
			}
		});

		var ins2 = slider.render({
			elem: '#slideNum2'
			,step: 1 //步长
			,stepshow: 25 //间隔
			,showstep: true //开启间隔点
			,theme: '#ef5656'
			,setTips: function(value){ //自定义提示文本
				return value + '%';
			}
			,change: function(value){
				var sellmax = parseFloat($(".sell_num_this").text());
				if(value > 0){
					var num = floatMul(sellmax,value/100);
					$('#sell_account').val(num);
				}
			}
		});

		window.playTime = function(){
			var title ="<?php echo lang('leverdeal.play_time_title'); ?>";
			$.post("<?php echo url('leverdeal/get_play_time'); ?>",{code:localsym},function(res){
				if(res.code == 1){
					var play_time = res.data.play_time
					var prophtml = '';
					for(var i=0;i<play_time.length;i++){
						if(i === 0){
							prophtml = prophtml+'<option value="'+play_time[i]+'" selected>'+play_time[i]+title+'</option>';
						}else{
							prophtml = prophtml+'<option value="'+play_time[i]+'">'+play_time[i]+title+'</option>';
						}
					}
					$(".play_time").html(prophtml);
					form.render();
				}
			})
		}

		form.on('select(playTime)', function(data){
			var type =$(data.elem).data('type');
			var value = data.value;
			var price = parseFloat($("#right_price").text())
			var margin = floatp(price,value)
			$("."+type+"-play-time").html(value);
			$("."+type+"_margin_this").html(margin);
			var can = parseFloat($('.can-use-money').text())
			var cans =  parseFloat($("."+type+"-play-time").text())
			var num = floatMul(can,cans)
            $("."+type+"_num_this").html(num.toFixed(4));
			if(type == 'buy'){
				ins1.setValue(0);
				$('#buy_account').val(0);
			}
			if(type == 'sell'){
				ins2.setValue(0);
				$('#sell_account').val(0);
			}
		});

		$('.deal-price').bind('input propertychange change',function(){
			refreshLista();
			refreshListb();
			playTime();
		})

		$('.close-price').bind('input propertychange change',function(){
			var buy = $("#buy_account").val();
			var sell = $("#sell_account").val();
			if(buy>0){
				var value = parseFloat($(".buy-play-time").text())
				var price = parseFloat($("#right_price").text())
				var margin = floatp(price,value)
				margin = margin.toFixed(4)
				var margins = floatMul(margin,buy)
				$(".buy_margin_this").html(margins);
				var sx_fee = parseFloat($(".le-sx-fee").text())
				var sxf = floatMul(margin,sx_fee) 
				var fwf = floatMul(sxf,buy) 
				$(".buy_sxf_this").html(fwf);
			}else{
				var value = parseFloat($(".le-play-time").text())
				var price = parseFloat($("#right_price").text())
				var margin = floatp(price,value)
				margin = margin.toFixed(4)
				$(".buy_sxf_this").html("0.0000");
				$(".buy_margin_this").html(margin);
			}
			if(sell>0){
				var value = parseFloat($(".sell-play-time").text())
				var price = parseFloat($("#right_price").text())
				var margin = floatp(price,value)
				margin = margin.toFixed(4)
				var margins = floatMul(margin,sell)
				$(".sell_margin_this").html(margins);
				var sx_fee = parseFloat($(".le-sx-fee").text())
				var sxf = floatMul(margin,sx_fee) 
				var fwf = floatMul(sxf,sell) 
				$(".sell_sxf_this").html(fwf);
			}else{
				var value = parseFloat($(".le-play-time").text())
				var price = parseFloat($("#right_price").text())
				var margin = floatp(price,value)
				margin = margin.toFixed(4)
				$(".sell_sxf_this").html("0.0000");
				$(".sell_margin_this").html(margin);
			}
			var can = parseFloat($('.can-use-money').text())
			var buyplay =  parseFloat($('.buy-play-time').text())
            var sellplay =  parseFloat($('.sell-play-time').text())
			var sellnum = floatMul(can,sellplay);
			var buynum = floatMul(can,buyplay);
            $(".sell_num_this").html(sellnum.toFixed(4));
            $(".buy_num_this").html(buynum.toFixed(4));
		})
		refreshLista();
		playTime();

	})
	
</script>

</body>
</html>