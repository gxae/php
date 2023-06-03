<?php /*a:5:{s:60:"/www/wwwroot/nsdkqdsdf.com/app/index/view/seconds/index.html";i:1630469468;s:61:"/www/wwwroot/nsdkqdsdf.com/app/index/view/layout/default.html";i:1627713636;s:65:"/www/wwwroot/nsdkqdsdf.com/app/index/view/./block/block_head.html";i:1648774108;s:65:"/www/wwwroot/nsdkqdsdf.com/app/index/view/./block/block_lang.html";i:1626105462;s:66:"/www/wwwroot/nsdkqdsdf.com/app/index/view/./block/foot_script.html";i:1626363790;}*/ ?>
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
<link rel="stylesheet" href="/static/index/trading/trading.css?v=<?php echo htmlentities($version); ?>">
<link rel="stylesheet" href="/static/index/css/times.css?v=<?php echo htmlentities($version); ?>" media="all">
<script>
var page_out="seconds",
	lang_kline = "<?php echo lang('kline_list.lang'); ?>";
	symbol_first ="<?php echo sysconfig('api','seconds_first'); ?>";
	var Webtheme = "<?php echo htmlentities($theme); ?>";
	var Productone = "<?php echo url('ajax/get_product'); ?>";
	var depth_bid = "<?php echo lang('deal.depth_bid'); ?>";
	var depth_ask = "<?php echo lang('deal.depth_ask'); ?>";
	var play_time = "<?php echo lang('seconds_trade.play_time'); ?>";
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
	<div class="seconds-box">
		<div class="seconds-left">
			<div class="seconds-left-top deal-bg">
				<div class="layui-tab layui-tab-brief">
					<ul class="layui-tab-title" id="symbol">
						<?php if(is_array($product) || $product instanceof \think\Collection || $product instanceof \think\Paginator): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<li data-value="<?php echo htmlentities($vo['code']); ?>" id="left_list_<?php echo htmlentities($vo['code']); ?>"><?php echo htmlentities($vo['title']); ?></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					<div class="layui-tab-content">
						<?php if(is_array($product) || $product instanceof \think\Collection || $product instanceof \think\Paginator): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<div data-value="<?php echo htmlentities($vo['code']); ?>" id="left_list_show_<?php echo htmlentities($vo['code']); ?>" class="layui-tab-item">
							<div class="layui-row text-center">
								<div class="layui-col-xs3">
									<p id="trading_top_price_<?php echo htmlentities($vo['code']); ?>"></p>
									<span><?php echo lang('deal.top_price'); ?></span>
								</div>
								<div class="layui-col-xs3">
									<p id="trading_top_change_<?php echo htmlentities($vo['code']); ?>"></p>
									<span><?php echo lang('deal.top_change'); ?></span>
								</div>
								<div class="layui-col-xs3">
									<p>≈<span id="trading_top_usd_<?php echo htmlentities($vo['code']); ?>"></span>$</p>
									<span><?php echo lang('deal.top_usd'); ?></span>
								</div>
								<div class="layui-col-xs3">
									<p id="trading_top_volume_<?php echo htmlentities($vo['code']); ?>"></p>
									<span><?php echo lang('deal.top_volume'); ?></span>
								</div>
							</div>
						</div>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
			</div>
			<div class="seconds-left-center deal-bg" style="min-height: 400px;">
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
			<div class="seconds-left-bottom deal-bg">
				<div class="layui-tab layui-tab-brief" lay-filter="tabList">
					<ul class="layui-tab-title">
						<li class="layui-this"><?php echo lang('seconds_trade.bottom_left_a'); ?></li>
						<li><?php echo lang('seconds_trade.bottom_left_b'); ?></li>
					</ul>	
					<div class="layui-tab-content">
						<div class="layui-tab-item layui-show">
							<table class="layui-table" lay-skin="nob">
							  <thead>
							    <tr>
									<th><?php echo lang('seconds_trade.table_direct'); ?></th>
									<th><?php echo lang('seconds_trade.table_num'); ?></th>
									<th><?php echo lang('seconds_trade.table_buyprice'); ?></th>
									<th><?php echo lang('seconds_trade.table_nowprice'); ?></th>
									<th class="text-center"><?php echo lang('seconds_trade.table_win'); ?></th>
									<th><?php echo lang('seconds_trade.table_timer'); ?></th>
							    </tr> 
							  </thead>
							  <tbody id="lista">
							    
							  </tbody>
							</table>
						</div>
						<div class="layui-tab-item">
							<table class="layui-table" lay-skin="nob">
							  <thead>
							    <tr>
									<th><?php echo lang('seconds_trade.table_direct'); ?></th>
									<th><?php echo lang('seconds_trade.table_num'); ?></th>
									<th><?php echo lang('seconds_trade.table_buyprice'); ?></th>
									<th><?php echo lang('seconds_trade.table_endprice'); ?></th>
									<th><?php echo lang('seconds_trade.table_wins'); ?></th>
									<th><?php echo lang('seconds_trade.table_sxf'); ?></th>
									<th class="text-center"><?php echo lang('seconds_trade.table_salt'); ?></th>
							    </tr> 
							  </thead>
							  <tbody id="listb">
							    
								</tbody>
							</table>
						</div>
					</div>	
				</div>
			</div>
		</div>
		<div class="seconds-right">
			<div class="seconds-right-head deal-bg text-center">
				<span><img src="/static/index/img/seconds_r_h.png" ><?php echo lang('seconds_trade.right_op_title'); ?></span>
				<p><span class="can-use-money"></span><span class="can-use-money-tit span-margin"></span></p>
			</div>
			<div class="seconds-right-body deal-bg">
				<input type="hidden" name="deal_price" value="0"  autocomplete="off" class="layui-input deal-price">
				<form class="layui-form fox-form" action="">
					 <div class="layui-form-item">
						 <label><img src="/static/index/img/seconds_r_ico.png" class="seconds_r_ico"><?php echo lang('seconds_trade.right_op_type'); ?></label>
						 <div class="mt-10">
							 <a href="javascript:void(0);" onclick="priceShow(this,'usdt','manual');" class="layui-unselect layui-form-radio layui-form-radioed" style="font-size: 14px;"><?php echo lang('seconds_trade.right_op_usdt'); ?></a>
							 <a href="javascript:void(0);" onclick="priceShow(this,'manual','usdt');" class="layui-unselect layui-form-radio" style="font-size: 14px;"><?php echo lang('seconds_trade.right_op_manual'); ?></a>
						</div>
					 </div>
					 <div class="layui-form-item">
						 <label><img src="/static/index/img/seconds_r_ico.png" class="seconds_r_ico"><?php echo lang('seconds_trade.right_op_num'); ?></label>
						 <div id="op-play-price-box" class="op-play-price usdt"></div>
						 <div id="op-play-price-boxs" class="op-play-price manual hidebox">
							<input type="number" name="account" value="0" lay-verType="tips" autocomplete="off" class="layui-input" style="width: 150px;">
						 </div>
					 </div>
					 <div class="layui-form-item">
						 <label><img src="/static/index/img/seconds_r_ico.png" class="seconds_r_ico"><?php echo lang('seconds_trade.right_op_time'); ?></label>
						 <div id="op-play-time-box" class="op-play-time"></div>
					</div>
					<div class="layui-form-item">
						<p class="deal-price-input"><a class="float-right" href="<?php echo url('finance/transfer',['type'=>1]); ?>"><?php echo lang('finance.right_transfer'); ?></a></p>
						<div class="layui-clear"></div>
						<p>
							<span><?php echo lang('seconds_trade.right_op_money'); ?></span>
							<span class="float-right"><span class="can-use-money"></span><span class="can-use-money-tit span-margin"></span></span>
						</p>
						<p>
							<span><?php echo lang('seconds_trade.right_op_prop'); ?></span>
							<span id="op-play-prop-box" class="float-right"></span>
						</p>
					</div>
					<div class="layui-form-item">
						<p><button type="button" class="layui-btn btn-green layui-btn-lg layui-btn-radius" lay-submit lay-filter="buyForm"><?php echo lang('seconds_trade.btn_buy'); ?></button></p>
						<p><button type="button" class="layui-btn btn-red layui-btn-lg layui-btn-radius" lay-submit lay-filter="sellForm"><?php echo lang('seconds_trade.btn_sell'); ?></button></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div id="show-times-box" class="show-times-box hidebox">
	<div class="times-head text-center times-tit"></div>
	<div id="js-times-box" class="times-box">
		<svg class="times-circle" width="200" height="200">
			<circle cx="100" cy="100" r="97" fill="#FFF" stroke="#f0ba43" stroke-width="5"></circle>
			<circle id="js-sec-circle" class="times-sec-circle" cx="100" cy="100" r="97" fill="transparent" stroke="#F4F1F1" stroke-width="7" transform="rotate(-90 100 100)"></circle>
			<text class="times-sec-unit hidebox" x="180" y="30" fill="#BDBDBD"><?php echo lang('seconds_trade.play_time'); ?></text>
		</svg>
		<div id="js-sec-text" class="times-sec-text"></div>
		<div class="price-sec-title"><?php echo lang('seconds_trade.now_price_title'); ?></div>
		<div id="times-sec-price" class="times-sec-price"></div>
	</div>
	<div id="times-box-wait" class="times-box-wait hidebox">
		<div class="head-tit-wait"><i class="layui-icon layui-icon-loading layui-anim layui-anim-rotate layui-anim-loop"></i></div>
		<div class="head-content-wait"><?php echo lang('seconds_trade.order_loading'); ?></div>
	</div>
	<div id="times-box-ok" class="times-box-ok hidebox">
		<div class="head-tit-ok" id="ok_fee"></div>
		<div class="head-content-ok" id="ok_tit"></div>
	</div>
	<div id="times-body" class="times-body">
		<div id="time-op-style" class="hidebox"></div>
		<div id="time-op-prop" class="hidebox"></div>
		<div id="times-sec-change" class="hidebox"></div>
		<div id="show_ordering" class="hidebox">
			<div class="layui-row text-center">
				<div class="layui-col-xs3"><?php echo lang('seconds_trade.play_redirect'); ?></div>
				<div class="layui-col-xs3"><?php echo lang('seconds_trade.play_account'); ?></div>
				<div class="layui-col-xs3"><?php echo lang('seconds_trade.start_price'); ?></div>
				<div class="layui-col-xs3" id="play_props"></div>
			</div>
			<div class="layui-row text-center">
				<div class="layui-col-xs3" id="time_redirect"></div>
				<div class="layui-col-xs3" id="time_play_price"></div>
				<div class="layui-col-xs3" id="start_price"></div>
				<div class="layui-col-xs3" id="end_price"></div>
			</div>
		</div>
		<div id="show_orderok" class="show_orderok hidebox">
			<div class="layui-row">
				<div class="layui-col-xs5"><?php echo lang('seconds_trade.play_redirect'); ?></div>
				<div class="layui-col-xs7" id="time_redirecto"></div>
			</div>
			<div class="layui-row">
				<div class="layui-col-xs5"><?php echo lang('seconds_trade.play_account'); ?></div>
				<div class="layui-col-xs7" id="time_play_priceo"></div>
			</div>
			<div class="layui-row">
				<div class="layui-col-xs5"><?php echo lang('seconds_trade.end_priceo'); ?></div>
				<div class="layui-col-xs7" id="end_sepriceo"></div>
			</div>
			<div class="layui-row">
				<div class="layui-col-xs5"><?php echo lang('seconds_trade.end_ordero'); ?></div>
				<div class="layui-col-xs7" id="end_priceo"></div>
			</div>
		</div>
	</div>
	<div class="times-footer">
		<a href="javascript:void(0);" onclick="orderGo();" class="layui-btn layui-btn-warm layui-btn-fluid"><?php echo lang('seconds_trade.btn_ordergo'); ?></a></a>
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
<!-- 拦截点击logo跳转 -->
<script type="text/javascript">
	var t;
	var tasks = new Map();
	// 定时计时任务，这里是1秒执行一次
	setInterval(function () {
		for (var key in tasks) {
		tasks[key]();
		}
	}, 1000)
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
	var timer = null;
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
		});

		window.get_seconds_form = function(localsym,page_out){
			var pricehtml = '';
			$.post(userWallet,{code:localsym,pages:page_out},function(res){
				if(res.code == 1){
					var data =res.data
					if($('.can-use-money-tit').length>0){
						$('.can-use-money').html(data.money)
						$('.can-use-money-tit').html(data.pro_tit)
						var op_play_price = data.op_play_price
						var pricehtml = '';
						for(var i=0;i<op_play_price.length;i++){
						if(i === 0){
							pricehtml = pricehtml+'<input type="radio" name="play_price" value="'+op_play_price[i]+'" title="'+op_play_price[i]+'" checked>';
						}else{
							pricehtml = pricehtml+'<input type="radio" name="play_price" value="'+op_play_price[i]+'" title="'+op_play_price[i]+'">';
						}
						}
						$("#op-play-price-box").html(pricehtml)
						var op_play_time = data.op_play_time
						var op_play_prop = data.op_play_prop
						var timehtml = '';
						for(var i=0;i<op_play_time.length;i++){
						if(i === 0){
							timehtml = timehtml+'<input type="radio" name="play_time" lay-filter="playTime" data-prop="'+i+'" data-propval="'+op_play_prop[i]+'" value="'+op_play_time[i]+'" title="'+getDuration(op_play_time[i])+'" checked>';
							$("#time-op-prop").text(op_play_prop[i]);
						}else{
							timehtml = timehtml+'<input type="radio" name="play_time" lay-filter="playTime" data-prop="'+i+'" data-propval="'+op_play_prop[i]+'" value="'+op_play_time[i]+'" title="'+getDuration(op_play_time[i])+'">';
						}
						}
						$("#op-play-time-box").html(timehtml)
						var op_play_prop = data.op_play_prop
						var prophtml = '';
						for(var i=0;i<op_play_prop.length;i++){
							if(i === 0){
								prophtml = prophtml+'<span id="prop-'+i+'" class="op-play-pro">'+op_play_prop[i]+'%</span>';
							}else{
								prophtml = prophtml+'<span id="prop-'+i+'" class="op-play-pro hidebox">'+op_play_prop[i]+'%</span>';
							}
						}
						$("#op-play-prop-box").html(prophtml)
					}
					form.render();
				}
			})
		}

		window.formRender = function(){
			// var num = 2;
			// var dtimer = setInterval(function(){
			// 	--num;
			// 	if(num == 0){
			// 		clearInterval(dtimer);
			// 	}else{
			// 		form.render();
			// 	}
			// },500);
			get_seconds_form(localsym,page_out);
		}

		window.orderGo = function(){
			layer.closeAll();
		}

		window.goprogress = function(obj,t,m,win,type,num,price){
			addTask(obj, function () {
				var nowprice = $("#times-sec-price").text();
				$(".list-price").text(nowprice);
				num = parseFloat(num);
				var prop = $("#time-op-prop").text();
				var changes = floatSub(nowprice,price);
				var true_fee = floatMul(num,prop/100);
				var all_fee = floatAdd(true_fee,num);
				if(type == 1){
					if(changes > 0){
						$('#'+win).removeClass("color-red").addClass("color-green");
						$('#'+win).text('+'+all_fee);
					}else{
						$('#'+win).removeClass("color-green").addClass("color-red");
						$('#'+win).text('-'+num);
					}
				}else if(type == 2){
					if(changes >= 0){
						$('#'+win).removeClass("color-green").addClass("color-red");
						$('#'+win).text('-'+num);
					}else{
						$('#'+win).removeClass("color-red").addClass("color-green");
						$('#'+win).text('+'+all_fee);
					}
				}
				t++;
				n = Math.round((t/m)*100);
				element.progress(obj, n+'%');
				if (t == m) {
					//倒计时结束，删除定时任务
					delTask(obj);
					$("#"+obj).remove();
					refreshListb();
				}
			});
		}

		window.refreshListb = function(){
			$('#listb').empty();
				flow.load({
				elem: '#listb' //指定列表容器
				,colSpan: 7 //列数
				,isAuto: false
				,end:'<td colspan="7" class="text-center load-box-fox"><?php echo lang("finance.finance_nodata"); ?></td>'
				,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
				var lis = [];
				$.post("<?php echo url('seconds/listb'); ?>",{page:page,code:localsym}, function(res){
					layui.each(res.data, function(index, item){
						var html = '<tr>';
						html = html + '<td>'+item.opstyle+'</td>';	
						html = html + '<td>'+parseFloat(item.op_number)+'</td>';
						html = html + '<td>'+parseFloat(item.start_price)+'</td>';	
						html = html + '<td>'+parseFloat(item.end_price)+'</td>';
						html = html + '<td>'+item.iswin+'</td>';	
						if(item.sx_fee > 0){
							html = html + '<td>'+parseFloat(item.sx_fee)+'</td>';
						}else{
							html = html + '<td>------</td>';
						}
						html = html + '<td class="text-center">'+item.fee+'</td>';	
						html = html + '</tr>';
						lis.push(html);
					}); 
					next(lis.join(''), page < res.pages);    
					});
				}
			});
		}

		window.refreshLista = function(){
			$('#lista').empty();
				flow.load({
				elem: '#lista' //指定列表容器
				,colSpan: 6 //列数
				,isAuto: false
				,end:'<td colspan="6" class="text-center load-box-fox"><?php echo lang("finance.finance_nodata"); ?></td>'
				,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
				var lis = [];
				$.post("<?php echo url('seconds/lista'); ?>",{page:page,code:localsym}, function(res){
					layui.each(res.data, function(index, item){
						var html = '<tr id="list'+item.id+'">';
						html = html + '<td>'+item.opstyle+'</td>';	
						html = html + '<td>'+parseFloat(item.op_number)+'</td>';
						html = html + '<td>'+parseFloat(item.start_price)+'</td>';	
						html = html + '<td class="price'+item.id+' list-price"></td>';
						html = html + '<td id="win'+item.id+'" class="text-center"></td>';	
						html = html + '<td><div data-time="'+item.creates_time+'" data-stop="'+item.play_time+'" lay-filter="list'+item.id+'" class="layui-progress"><div class="layui-progress-bar layui-bg-orange" lay-percent="50%"></div></div></td>';	
						html = html + '</tr>';
						lis.push(html);
						goprogress("list"+item.id,item.creates_time,item.play_time,"win"+item.id,item.op_style,item.op_number,item.start_price);
					}); 
					next(lis.join(''), page < res.pages);    
					});
				}
			});
		}

		window.timeWait = function(id){
			$("#js-times-box").hide();
			$("#times-body").hide();
			$("#times-box-wait").show();
			findOrder(id);
		}

		window.findOrder = function(id){
			$.post("<?php echo url('order/findseconds'); ?>", {id,id}, function (res) {
				layer.close(loading);
				if (res.code > 0) {
					var data = res.data;
					$("#play_props").text("<?php echo lang('seconds_trade.order_endprice'); ?>");
					if(data.win == 1){
						$("#ok_fee").removeClass("color-red").addClass("color-green").text("+"+parseFloat(data.fee));
						$("#ok_tit").text("<?php echo lang('seconds_trade.order_win_1'); ?>");
						$("#end_price").removeClass("color-red").addClass("color-green").text(parseFloat(data.price));
						$("#end_sepriceo").removeClass("color-red").addClass("color-green").text(parseFloat(data.price));
						$("#end_priceo").removeClass("color-red").addClass("color-green").text("+"+parseFloat(data.fee));
						get_userwallet(localsym,page_out);
						refreshListb();
					}else{
						$("#ok_fee").removeClass("color-green").addClass("color-red").text("-"+parseFloat(data.fee));
						$("#ok_tit").text("<?php echo lang('seconds_trade.order_win_2'); ?>");
						$("#end_price").removeClass("color-green").addClass("color-red").text(parseFloat(data.price));
						$("#end_sepriceo").removeClass("color-green").addClass("color-red").text(parseFloat(data.price));
						$("#end_priceo").removeClass("color-green").addClass("color-red").text("-"+parseFloat(data.fee));
					}
					$("#times-box-ok").show();
					$("#times-body").show();
					$("#show_ordering").hide();
					$("#show_orderok").show();
					$("#times-box-wait").hide();
				} else {
					findOrder(id);
				}
			});
			return false;
		}

		window.timesSet = function(time,id) {
			refreshLista();
			refreshListb();
			clearInterval(timer);
			document.getElementById("js-times-box").style.display = "block";
			$("#times-body").show();
			$("#show_orderok").hide();
			$("#show_ordering").show();
			$("#times-box-ok").hide();
			$("#play_props").text("<?php echo lang('seconds_trade.play_props'); ?>");
			$("#end_price").removeClass("color-green").removeClass("color-red");
			$("#end_priceo").removeClass("color-green").removeClass("color-red");
			var t = time;
			var n = document.getElementById("js-sec-circle");
			var et = Math.round(t / time * 628);
			n.style.strokeDashoffset = et - 628
			document.getElementById("js-sec-text").innerHTML = t;
			timer = setInterval(function() {
				if ( t <= 0){
					clearInterval(timer);
					timeWait(id);
				}else {
					if($('#times-sec-price').length>0){
						var change = $("#times-sec-change").text();
						var nowprice = $("#times-sec-price").text();
						var start_price = $("#start_price").text();
						var op_type = $("#time-op-style").text();
						var prop = $("#time-op-prop").text();
						var play_price =  $("#time_play_price").text();
						var changes = floatSub(nowprice,start_price);
						var true_fee = floatMul(play_price,prop/100);
						var all_fee = floatAdd(true_fee,play_price);
						
						if(op_type == '1'){
							$("#time_redirect").removeClass("color-red").addClass("color-green").text("<?php echo lang('seconds_trade.btn_buy'); ?>");
							$("#time_redirecto").removeClass("color-red").addClass("color-green").text("<?php echo lang('seconds_trade.btn_buy'); ?>");
							if(changes > 0){
								$('#end_price').removeClass("color-red").addClass("color-green");
								$('#end_price').text('+'+all_fee);
								$('#end_priceo').removeClass("color-red").addClass("color-green");
								$('#end_priceo').text('+'+all_fee);
							}else{
								$('#end_price').removeClass("color-green").addClass("color-red");
								$('#end_price').text('-'+play_price);
								$('#end_priceo').removeClass("color-green").addClass("color-red");
								$('#end_priceo').text('-'+play_price);
							}
						}else if(op_type == '2'){
							$("#time_redirect").removeClass("color-green").addClass("color-red").text("<?php echo lang('seconds_trade.btn_sell'); ?>");
							$("#time_redirecto").removeClass("color-green").addClass("color-red").text("<?php echo lang('seconds_trade.btn_sell'); ?>");
							if(changes >= 0){
								$('#end_price').removeClass("color-green").addClass("color-red");
								$('#end_price').text('-'+play_price);
								$('#end_priceo').removeClass("color-green").addClass("color-red");
								$('#end_priceo').text('-'+play_price);
							}else{
								$('#end_price').removeClass("color-red").addClass("color-green");
								$('#end_price').text('+'+all_fee);
								$('#end_priceo').removeClass("color-red").addClass("color-green");
								$('#end_priceo').text('+'+all_fee);
							}
						}
					}
					t -= 1,
					document.getElementById("js-sec-text").innerHTML = t;
					var e = Math.round(t / time * 628);
					n.style.strokeDashoffset = e - 628
				}
			},
			970);
		}

		window.showTime = function(){
			$("#times-box-wait").hide();
			layer.open({
				type: 1,
				title: false,
				closeBtn: true,
				skin:'fox-layui-box',
				area: ['auto'],
				shade: 0.5,
				content: $('#show-times-box')
			})
		}

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$('.deal-price').bind('input propertychange change',function(){
			refreshLista();
			refreshListb();
			formRender();
		})

		form.on('radio(playTime)', function(data){
            var n = $(data.elem).data('prop');//被点击的radio的value值
            var val = $(data.elem).data('propval');//被点击的radio的value值
			$("#prop-"+n).fadeIn().siblings(".op-play-pro").hide();
			$("#time-op-prop").text(val);
        });

		form.on('submit(buyForm)', function(data){
			var start_price = $("#times-sec-price").text();
			data.field.code = localsym;
			data.field.start_price = start_price;
			if(data.field.account > 0){
				data.field.op_number = data.field.account;
			}else{
				data.field.op_number = data.field.play_price;
			}
			var ze = /^(?!(0[0-9]{0,}$))[0-9]{1,}[.]{0,}[0-9]{0,}$/;
			if (!ze.test(data.field.op_number))//判断数字正确否
			{
				layer.msg( "<?php echo lang('seconds_trade.check_op_number'); ?>");
				return false;
			}
			data.field.op_style = 1;
			loading =layer.load(1, {shade: [0.1,'#fff']});
			$("#start_price").text(start_price);
			$("#end_sepriceo").text(start_price);
			$('#end_price').text(data.field.play_price);
			$('#end_priceo').text(data.field.play_price);
			$("#time-op-style").text(1);//买涨
			$("#time_redirect").removeClass("color-red").addClass("color-green").text("<?php echo lang('seconds_trade.btn_buy'); ?>");
			$("#time_redirecto").removeClass("color-red").addClass("color-green").text("<?php echo lang('seconds_trade.btn_buy'); ?>");
			$("#time_play_price").text(data.field.op_number);
			$("#time_play_priceo").text(data.field.op_number);
			$.post("<?php echo url('order/doseconds'); ?>", data.field, function (res) {
				layer.close(loading);
				if (res.code > 0) {
					layer.msg(res.msg, {time: 600},function(){
						timesSet(data.field.play_time,res.id);
						showTime();
						get_userwallet(localsym,page_out);
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
			return false;
		})

		form.on('submit(sellForm)', function(data){
			// layer.msg(JSON.stringify(data.field));
			var start_price = $("#times-sec-price").text();
			$("#start_price").text(start_price);
			$("#end_sepriceo").text(start_price);
			$('#end_price').text(data.field.play_price);
			$('#end_priceo').text(data.field.play_price);
			$("#time-op-style").text(2);//买跌
			$("#time_redirect").removeClass("color-green").addClass("color-red").text("<?php echo lang('seconds_trade.btn_sell'); ?>");
			$("#time_redirecto").removeClass("color-green").addClass("color-red").text("<?php echo lang('seconds_trade.btn_sell'); ?>");
			data.field.code = localsym;
			data.field.start_price = start_price;
			if(data.field.account > 0){
				data.field.op_number = data.field.account;
			}else{
				data.field.op_number = data.field.play_price;
			}
			var ze = /^(?!(0[0-9]{0,}$))[0-9]{1,}[.]{0,}[0-9]{0,}$/;
			if (!ze.test(data.field.op_number))//判断数字正确否
			{
				layer.msg( "<?php echo lang('seconds_trade.check_op_number'); ?>");
				return false;
			}
			data.field.op_style = 2;
			$("#time_play_price").text(data.field.op_number);
			$("#time_play_priceo").text(data.field.op_number);
			loading =layer.load(1, {shade: [0.1,'#fff']});
			$.post("<?php echo url('order/doseconds'); ?>", data.field, function (res) {
				layer.close(loading);
				if (res.code > 0) {
					layer.msg(res.msg, {time: 600},function(){
						timesSet(data.field.play_time,res.id);
						showTime();
						get_userwallet(localsym,page_out);
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
			return false;
		})

	})

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
			find: 'seconds',
		},null,null)
		
	})
	window.onload=function(){
		formRender();
		refreshLista();
		refreshListb();
	}
	function priceShow(_this,typea,typeb){
		$(_this).addClass("layui-form-radioed").siblings().removeClass("layui-form-radioed");
		$("."+typea).fadeIn();
		$("."+typeb).fadeOut(100);
		if(typea == 'usdt'){
			$("input[name='account'").val(0);
		}
	}

	function getDuration(second) {
		if(second <= 60){
			return second + "<?php echo lang('time_format.second'); ?>";
		}else{
			var days = Math.floor(second / 86400);
			var hours = Math.floor((second % 86400) / 3600);
			var minutes = Math.floor(((second % 86400) % 3600) / 60);
			var seconds = Math.floor(((second % 86400) % 3600) % 60);
			var duration = '';
			if(days > 0){
				duration = duration + days + "<?php echo lang('time_format.day'); ?>";
			}
			if(hours > 0){
				duration = duration + hours + "<?php echo lang('time_format.hour'); ?>";
			}
			if(minutes > 0){
				duration = duration + minutes + "<?php echo lang('time_format.minute'); ?>";
			}
			if(seconds > 0){
				duration = duration + seconds + "<?php echo lang('time_format.second'); ?>";
			}
			return duration;
		}
		
	}
	
</script>

</body>
</html>