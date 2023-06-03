<?php /*a:5:{s:60:"/www/wwwroot/www.nsdkaqnn.com/app/index/view/deal/index.html";i:1628751926;s:64:"/www/wwwroot/www.nsdkaqnn.com/app/index/view/layout/default.html";i:1627713636;s:68:"/www/wwwroot/www.nsdkaqnn.com/app/index/view/./block/block_head.html";i:1648774108;s:68:"/www/wwwroot/www.nsdkaqnn.com/app/index/view/./block/block_lang.html";i:1626105462;s:69:"/www/wwwroot/www.nsdkaqnn.com/app/index/view/./block/foot_script.html";i:1626363790;}*/ ?>
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
var page_out="deal",
	lang_kline = "<?php echo lang('kline_list.lang'); ?>";
	symbol_first ="<?php echo sysconfig('api','deal_first'); ?>";
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
	<div class="deal-box">
		<div class="deal-top">
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
			<div class="deal-top-center deal-bg">
				<div class="deal-top-center-title">
					<h3 class="layui-inline" id="trading_top_title"></h3>
					<p class="layui-inline">
						<span id="trading_top_price"></span><br>
						<span>≈</span>
						<span id="trading_top_usd"></span>
						<span>$</span>
					</p>
					<p class="layui-inline">
						<span><?php echo lang('deal.top_change'); ?></span><br>
						<span id="trading_top_change"></span>
					</p>
					<p class="layui-inline">
						<span><?php echo lang('deal.top_high'); ?></span><br>
						<span class="color-grey" id="trading_top_high"></span>
					</p>
					<p class="layui-inline">
						<span><?php echo lang('deal.top_low'); ?></span><br>
						<span class="color-grey" id="trading_top_low"></span>
					</p>
					<p class="layui-inline">
						<span><?php echo lang('deal.top_volume'); ?></span><br>
						<span class="color-grey" id="trading_top_volume"></span>
					</p>
				</div>
				<div class="deal-top-center-body">
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
			</div>
			<div class="deal-top-right-box deal-bg">
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
			<div class="deal-top-right-box deal-bg logs-box">
				<h5><?php echo lang('deal.right_title'); ?></h5>
				<table class="layui-table" lay-skin="nob">
				  <thead>
				    <tr>
				      <th><?php echo lang('deal.right_date'); ?></th>
				      <th><?php echo lang('deal.right_price'); ?></th>
				      <th><?php echo lang('deal.right_num'); ?></th>
				    </tr> 
				  </thead>
				  <tbody id="model_logs">
				  </tbody>
				</table>
			</div>
		</div>
		<div class="deal-bottom">
			<div class="deal-bottom-left deal-bg">
				<div class="layui-tab layui-tab-brief">
				  <ul class="layui-tab-title">
				    <li class="layui-this"><?php echo lang('deal_trade.left_now_title'); ?></li>
				    <li><?php echo lang('deal_trade.left_history_title'); ?></li>
				  </ul>
				  <div class="layui-tab-content">
				    <div class="layui-tab-item layui-show">
						<table class="layui-table" lay-skin="nob">
							<thead>
							<tr>
								<th><?php echo lang('deal_trade.table_time'); ?></th>
								<th><?php echo lang('deal_trade.table_depth'); ?></th>
								<th><?php echo lang('deal_trade.table_type'); ?></th>
								<th><?php echo lang('deal_trade.table_redirect'); ?></th>
								<th><?php echo lang('deal_trade.table_price'); ?></th>
								<th><?php echo lang('deal_trade.table_account'); ?></th>
								<th><?php echo lang('deal_trade.table_status'); ?></th>
							</tr> 
							</thead>
							<tbody id="nowlist">
							
							</tbody>
						</table>
					</div>
				    <div class="layui-tab-item">
						<table class="layui-table" lay-skin="nob">
							<thead>
							<tr>
								<th><?php echo lang('deal_trade.table_time'); ?></th>
								<th><?php echo lang('deal_trade.table_depth'); ?></th>
								<th><?php echo lang('deal_trade.table_type'); ?></th>
								<th><?php echo lang('deal_trade.table_redirect'); ?></th>
								<th><?php echo lang('deal_trade.table_price'); ?></th>
								<th><?php echo lang('deal_trade.table_account'); ?></th>
								<th><?php echo lang('deal_trade.table_status'); ?></th>
							</tr> 
							</thead>
							<tbody id="historylist">
							
							</tbody>
						</table>
					</div>
				  </div>
				</div>
			</div>
			<div class="deal-bottom-right deal-bg">
				<span class="ex-buy-min hidebox"></span>
				<span class="ex-sell-min hidebox"></span>
				<span class="can-buy-max hidebox"></span>
				<span class="can-sell-max hidebox"></span>
				<div class="layui-tab layui-tab-brief">
				  <ul class="layui-tab-title">
				    <li class="layui-this"><?php echo lang('deal_trade.form_title_one'); ?></li>
				    <li><?php echo lang('deal_trade.form_title_two'); ?></li>
					<li class="float-right"><a href="<?php echo url('finance/transfer',['type'=>1]); ?>"><?php echo lang('finance.right_transfer'); ?></a></li>			
				  </ul>
				  <div class="layui-tab-content">
					  	<!-- 市价交易 -->
						<div class="layui-tab-item layui-show">
							<div class="layui-row layui-col-space20">
								<div class="layui-col-xs6 ">
									<div class="font-14"><?php echo lang('deal_trade.form_can_use'); ?><span class="can-usdt-box"></span><span class="can-usdt-box-tit"></span></div>
									<form class="layui-form" action="">
										<div class="layui-form-item">
											<label class="layui-form-label"><?php echo lang('deal_trade.form_buy_price'); ?></label>
											<div class="layui-input-block deal-price-input">
												<?php echo lang('deal_trade.form_one_price'); ?>
											</div>
										</div>
										<div class="layui-form-item">
											<label class="layui-form-label"><?php echo lang('deal_trade.form_buy_account'); ?></label>
											<div class="layui-input-block position-re">
												<input type="number" name="buy_account3" value="0" lay-verify="required|buy_account" lay-verType="tips" autocomplete="off" class="layui-input buy-account3">
												<span class="input-span can-product-box-tit"></span>
											</div>
										</div>
										<input type="hidden" name="price_usdt3">
										<div class="layui-form-item hidebox mt-30" id="slideNum3"></div>
										<div class="layui-form-item mt-30"><?php echo lang('deal_trade.form_trade_account'); ?><span class="buy-account-volume3">0.00000000</span><span class="can-usdt-box-tit"></span></div>
										<div class="layui-form-item">
											<button type="button" class="layui-btn btn-green" lay-submit lay-filter="sbuyForm"><?php echo lang('deal_trade.form_buy_btn'); ?><span class="can-product-box-tit"></span></button>
										</div>
									</form>
								</div>
								<div class="layui-col-xs6 ">
									<div class="font-14"><?php echo lang('deal_trade.form_can_use'); ?><span class="can-product-box"></span><span class="can-product-box-tit"></span></div>
									<form class="layui-form" action="">
										<div class="layui-form-item">
											<label class="layui-form-label"><?php echo lang('deal_trade.form_sell_price'); ?></label>
											<div class="layui-input-block deal-price-input">
												<?php echo lang('deal_trade.form_one_price'); ?>
											</div>
										</div>
										<div class="layui-form-item">
											<label class="layui-form-label"><?php echo lang('deal_trade.form_sell_account'); ?></label>
											<div class="layui-input-block position-re">
												<input type="number" name="buy_account4" value="0" lay-verify="required|sell_account" lay-verType="tips" autocomplete="off" class="layui-input buy-account4">
												<span class="input-span can-product-box-tit"></span>
											</div>
										</div>
										<input type="hidden" name="price_usdt4">
										<div class="layui-form-item hidebox mt-30" id="slideNum4"></div>
										<div class="layui-form-item mt-30"><?php echo lang('deal_trade.form_trade_account'); ?><span class="buy-account-volume4">0.00000000</span> <span class="can-usdt-box-tit"></span></div>
										<div class="layui-form-item">
											<button type="button" class="layui-btn btn-red" lay-submit lay-filter="ssellForm"><?php echo lang('deal_trade.form_sell_btn'); ?><span class="can-product-box-tit"></span></button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!-- 限价交易 -->
						<div class="layui-tab-item">
							<div class="layui-row layui-col-space20">
								<div class="layui-col-xs6 ">
									<div class="font-14"><?php echo lang('deal_trade.form_can_use'); ?><span class="can-usdt-box"></span><span class="can-usdt-box-tit"></span></div>
									<form class="layui-form" action="">
										<div class="layui-form-item">
											<label class="layui-form-label"><?php echo lang('deal_trade.form_buy_price'); ?></label>
											<div class="layui-input-block position-re">
												<input type="number" name="deal_price" value="0"  autocomplete="off" class="layui-input deal-price">
												<span class="input-span can-usdt-box-tit"></span>
											</div>
										</div>
										<div class="layui-form-item">
											<label class="layui-form-label"><?php echo lang('deal_trade.form_buy_account'); ?></label>
											<div class="layui-input-block position-re">
												<input type="number" name="buy_account1" value="0" lay-verify="required|buy_account" lay-verType="tips" autocomplete="off" class="layui-input buy-account1">
												<span class="input-span can-product-box-tit"></span>
											</div>
										</div>
										<input type="hidden" name="price_usdt1">
										<div class="layui-form-item hidebox mt-30" id="slideNum1"></div>
										<div class="layui-form-item mt-30"><?php echo lang('deal_trade.form_trade_account'); ?><span class="buy-account-volume1">0.00000000</span><span class="can-usdt-box-tit"></span></div>
										<div class="layui-form-item">
											<button type="button" class="layui-btn btn-green" lay-submit lay-filter="buyForm"><?php echo lang('deal_trade.form_buy_btn'); ?><span class="can-product-box-tit"></span></button>
										</div>
									</form>
								</div>
								<div class="layui-col-xs6 ">
									<div class="font-14"><?php echo lang('deal_trade.form_can_use'); ?><span class="can-product-box"></span><span class="can-product-box-tit"></span></div>
									<form class="layui-form" action="">
										<div class="layui-form-item">
											<label class="layui-form-label"><?php echo lang('deal_trade.form_sell_price'); ?></label>
											<div class="layui-input-block position-re">
												<input type="number" name="deal_price" value="0" autocomplete="off" class="layui-input deal-price">
												<span class="input-span can-usdt-box-tit"></span>
											</div>
										</div>
										<div class="layui-form-item">
											<label class="layui-form-label"><?php echo lang('deal_trade.form_sell_account'); ?></label>
											<div class="layui-input-block position-re">
												<input type="number" name="buy_account2" value="0" lay-verify="required|sell_account" lay-verType="tips" autocomplete="off" class="layui-input buy-account2">
												<span class="input-span can-product-box-tit"></span>
											</div>
										</div>
										<input type="hidden" name="price_usdt2">
										<div class="layui-form-item hidebox mt-30" id="slideNum2"></div>
										<div class="layui-form-item mt-30"><?php echo lang('deal_trade.form_trade_account'); ?><span class="buy-account-volume2">0.00000000</span> <span class="can-usdt-box-tit"></span></div>
										<div class="layui-form-item">
											<button type="button" class="layui-btn btn-red" lay-submit lay-filter="sellForm"><?php echo lang('deal_trade.form_sell_btn'); ?><span class="can-product-box-tit"></span></button>
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
	function plusReady() {
	var ws = plus.webview.currentWebview();
	ws.overrideUrlLoading({
		mode: 'reject'
	}, function(e) {
		console.log('url: ' + e.url);
	})
	}
	document.addEventListener('plusready', plusReady, false);

	layui.use(['layer','element','slider','jquery', 'form', 'flow'], function(){
		var layer = layui.layer
		,element = layui.element
		,$ = layui.jquery
		,form = layui.form
		,slider = layui.slider;
		var flow = layui.flow;

		var ins1 = slider.render({
			elem: '#slideNum1'
			,step: 1 //步长
			,stepshow: 25 //间隔
			,showstep: true //开启间隔点
			,setTips: function(value){ //自定义提示文本
				return value + '%';
			}
			,change: function(value){
				var buyusdt = parseFloat($(".can-usdt-box").text());
				var buymax = parseFloat($(".can-buy-max").text());
				if(value > 0){
					var num = floatMul(buymax,value/100);
					var volume = floatMul(buyusdt,value/100);
					$('input[name="buy_account1"]').val(num);
					$('.buy-account-volume1').html(volume);
					$('input[name="price_usdt1"]').val(volume);
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
				var sellproduct = parseFloat($(".can-product-box").text());
				var sellmax = parseFloat($(".can-sell-max").text());
				var price = parseFloat($('input[name="deal_price"]').val());
				var sellusdt = floatMul(sellproduct,price);
				if(value > 0){
					var num = floatMul(sellmax,value/100);
					var volume = floatMul(sellusdt,value/100);
					$('input[name="buy_account2"]').val(num);
					$('.buy-account-volume2').html(volume);
					$('input[name="price_usdt2"]').val(volume);
				}
			}
		});

		var ins3 = slider.render({
			elem: '#slideNum3'
			,step: 1 //步长
			,stepshow: 25 //间隔
			,showstep: true //开启间隔点
			,setTips: function(value){ //自定义提示文本
				return value + '%';
			}
			,change: function(value){
				var buyusdt = parseFloat($(".can-usdt-box").text());
				var buymax = parseFloat($(".can-buy-max").text());
				if(value > 0){
					var num = floatMul(buymax,value/100);
					var volume = floatMul(buyusdt,value/100);
					$('input[name="buy_account3"]').val(num);
					$('.buy-account-volume3').html(volume);
					$('input[name="price_usdt3"]').val(volume);
				}
			}
		});

		var ins4 = slider.render({
			elem: '#slideNum4'
			,step: 1 //步长
			,stepshow: 25 //间隔
			,showstep: true //开启间隔点
			,theme: '#ef5656'
			,setTips: function(value){ //自定义提示文本
				return value + '%';
			}
			,change: function(value){
				var sellproduct = parseFloat($(".can-product-box").text());
				var sellmax = parseFloat($(".can-sell-max").text());
				var price = parseFloat($('input[name="deal_price"]').val());
				var sellusdt = floatMul(sellproduct,price);
				if(value > 0){
					var num = floatMul(sellmax,value/100);
					var volume = floatMul(sellusdt,value/100);
					$('input[name="buy_account4"]').val(num);
					$('.buy-account-volume4').html(volume);
					$('input[name="price_usdt4"]').val(volume);
				}
			}
		});

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		form.verify({
			buy_account: function(value, item){
				var ze = /^(?!(0[0-9]{0,}$))[0-9]{1,}[.]{0,}[0-9]{0,}$/;
                if (!ze.test(value))//判断数字正确否
                {
					return "<?php echo lang('deal_trade.check_buy_account'); ?>";
				}
				var buymax = parseFloat($(".can-buy-max").text());
				if(value > buymax)//判断最大卖出量
				{
					return "<?php echo lang('deal_trade.check_buy_account_enough'); ?>" + buymax;
				}
				var ebmin = parseFloat($(".ex-buy-min").text());
				if(ebmin > 0 && value < ebmin)//判断最小量
				{
					return "<?php echo lang('deal_trade.check_buy_account_min'); ?>" + ebmin;
				}
			},
			sell_account: function(value, item){
				var ze = /^(?!(0[0-9]{0,}$))[0-9]{1,}[.]{0,}[0-9]{0,}$/;
				if (!ze.test(value))//判断数字正确否
                {
					return "<?php echo lang('deal_trade.check_sell_account'); ?>";
				}
				var sellmax = parseFloat($(".can-sell-max").text());
				if(value > sellmax)//判断最大购买量
				{
					return "<?php echo lang('deal_trade.check_sell_account_enough'); ?>" + sellmax;
				}
				var ebmin = parseFloat($(".ex-sell-min").text());
				if(ebmin > 0 && value < ebmin)//判断最小量
				{
					return "<?php echo lang('deal_trade.check_sell_account_min'); ?>" + ebmin;
				}
			}
		});

		form.on('submit(buyForm)', function(data){
			if(data.field.buy_account1){
				data.field.code = localsym;
				loading =layer.load(1, {shade: [0.1,'#fff']});
				$.post("<?php echo url('order/dodeal'); ?>", data.field, function (res) {
					layer.close(loading);
					if (res.code > 0) {
						layer.msg(res.msg, {time: 1800},function(){
							refreshOrder(res.id);
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
			}
			return false;
		});

		form.on('submit(sellForm)', function(data){
			if(data.field.buy_account2){
				data.field.code = localsym;
				loading =layer.load(1, {shade: [0.1,'#fff']});
				$.post("<?php echo url('order/dodeal'); ?>", data.field, function (res) {
					layer.close(loading);
					if (res.code > 0) {
						layer.msg(res.msg, {time: 1800},function(){
							refreshOrder(res.id);
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
			}
			return false;
		});

		form.on('submit(sbuyForm)', function(data){
			if(data.field.buy_account3){
				data.field.code = localsym;
				loading =layer.load(1, {shade: [0.1,'#fff']});
				$.post("<?php echo url('order/dodeal'); ?>", data.field, function (res) {
					layer.close(loading);
					if (res.code > 0) {
						layer.msg(res.msg, {time: 1800},function(){
							refreshOrder(res.id);
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
			}
			return false;
		});

		form.on('submit(ssellForm)', function(data){
			if(data.field.buy_account4){
				data.field.code = localsym;
				loading =layer.load(1, {shade: [0.1,'#fff']});
				$.post("<?php echo url('order/dodeal'); ?>", data.field, function (res) {
					layer.close(loading);
					if (res.code > 0) {
						layer.msg(res.msg, {time: 1800},function(){
							refreshOrder(res.id);
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
			}
			return false;
		});

		$('.buy-account1').bind('input propertychange change',function(e){
			var val = $(this).val();
			var buyusdt = parseFloat($(".can-usdt-box").text());
			var buymax = parseFloat($(".can-buy-max").text());
			var price = parseFloat($('input[name="deal_price"]').val());
			var usdt = floatMul(val,price);
			if(usdt > buyusdt){
				$('.buy-account-volume1').html("0.00000000");
				$('input[name="price_usdt1"]').val(0);
				$('input[name="buy_account1"]').val(0);
				layer.tips("<?php echo lang('deal_trade.check_buy_account_enough'); ?>" + buymax, '.buy-account1',{tips: 1, time:10000});
			}else{
				$('.buy-account-volume1').html(usdt);
				$('input[name="price_usdt1"]').val(usdt);
			}
		})

		$('.buy-account3').bind('input propertychange change',function(e){
			var val = $(this).val();
			var buyusdt = parseFloat($(".can-usdt-box").text());
			var buymax = parseFloat($(".can-buy-max").text());
			var price = parseFloat($('input[name="deal_price"]').val());
			var usdt = floatMul(val,price);
			if(usdt > buyusdt){
				$('.buy-account-volume3').html("0.00000000");
				$('input[name="price_usdt3"]').val(0);
				$('input[name="buy_account3"]').val(0);
				layer.tips("<?php echo lang('deal_trade.check_buy_account_enough'); ?>" + buymax, '.buy-account3',{tips: 1, time:10000});
			}else{
				$('.buy-account-volume3').html(usdt);
				$('input[name="price_usdt3"]').val(usdt);
			}
		})

		$('.buy-account2').bind('input propertychange change',function(e){
			var val = $(this).val();
			var sellproduct = parseFloat($(".can-product-box").text());
			var sellmax = parseFloat($(".can-sell-max").text());
			var price = parseFloat($('input[name="deal_price"]').val());
			var usdt = floatMul(val,price);
			if(val > sellmax){
				$('.buy-account-volume2').html("0.00000000");
				$('input[name="price_usdt2"]').val(0);
				$('input[name="buy_account2"]').val(0);
				layer.tips("<?php echo lang('deal_trade.check_sell_account_enough'); ?>" + sellmax, '.buy-account2',{tips: 1, time:10000});
			}else{
				$('.buy-account-volume2').html(usdt);
				$('input[name="price_usdt2"]').val(usdt);
			}
		})

		$('.buy-account4').bind('input propertychange change',function(e){
			var val = $(this).val();
			var sellproduct = parseFloat($(".can-product-box").text());
			var sellmax = parseFloat($(".can-sell-max").text());
			var price = parseFloat($('input[name="deal_price"]').val());
			var usdt = floatMul(val,price);
			if(val > sellmax){
				$('.buy-account-volume4').html("0.00000000");
				$('input[name="price_usdt4"]').val(0);
				$('input[name="buy_account4"]').val(0);
				layer.tips("<?php echo lang('deal_trade.check_sell_account_enough'); ?>" + sellmax, '.buy-account4',{tips: 1, time:10000});
			}else{
				$('.buy-account-volume4').html(usdt);
				$('input[name="price_usdt4"]').val(usdt);
			}
		})

		window.refreshOrder = function(id){
			refreshNow(id);
			refreshHistory();
		}

		window.refreshHistory = function(){
			$('#historylist').empty();
				flow.load({
				elem: '#historylist' //指定列表容器
				,colSpan: 7 //列数
				,isAuto: false
				,end:'<td colspan="7" class="text-center load-box-fox"><?php echo lang("finance.finance_nodata"); ?></td>'
				,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
				var lis = [];
				$.post("<?php echo url('deal/historylist'); ?>",{page:page,code:localsym}, function(res){
					layui.each(res.data, function(index, item){
						var html = '';
						html = html + '<tr><td>'+ item.create_time +'</td><td>'+ item.title +'</td><td>'+ item.typelist +'</td><td>'+ item.directionlist +'</td><td>'+ item.price_usdt +'</td><td>'+ item.account +'</td><td>'+ item.statuslist +'</td></tr>';
						if(item.status==1){
							html = html + '<tr class="hidebox"><td colspan="7">';
								html = html + '<div class="layui-row">';
									html = html + '<div class="layui-col-xs2"><?php echo lang("deal_trade.table_pro_acount"); ?></div>';	
									html = html + '<div class="layui-col-xs2">'+item.account_product+'</div>';
									html = html + '<div class="layui-col-xs2"><?php echo lang("deal_trade.table_account"); ?></div>';	
									html = html + '<div class="layui-col-xs2">'+item.account+'</div>';
									html = html + '<div class="layui-col-xs2 text-right"><?php echo lang("deal_trade.table_do"); ?></div>';	
									html = html + '<div class="layui-col-xs2 text-right"><a href="javascript:void(0)" onclick="dealBack('+item.id+');"><span class="color-red"><?php echo lang("deal_trade.table_doback"); ?></span></a></div>';	
								html = html + '</div>';	
							html = html + '</td></tr>';
						}else{
							html = html + '<tr class="hidebox"><td colspan="7">';
								html = html + '<div class="layui-row">';
									html = html + '<div class="layui-col-xs2"><?php echo lang("deal_trade.table_pro_acount"); ?> '+item.account_sxf_tit+'</div>';	
									html = html + '<div class="layui-col-xs2">'+item.account_product+'</div>';	
									html = html + '<div class="layui-col-xs2"><?php echo lang("deal_trade.table_sxf"); ?></div>';	
									html = html + '<div class="layui-col-xs2">'+item.account_sxf+' '+item.account_sxf_tit+'</div>';
									html = html + '<div class="layui-col-xs2"><?php echo lang("deal_trade.table_close"); ?></div>';
									html = html + '<div class="layui-col-xs2">'+item.price_product+'</div>';	
								html = html + '</div>';	
							html = html + '</td></tr>';
						}
						lis.push(html);
					}); 
					next(lis.join(''), page < res.pages);    
					});
				}
			});
		}

		window.refreshNow = function(id){
			if(id <= 0){
				return false;
			}else{
				$.post("<?php echo url('deal/findnow'); ?>",{id:id}, function(res){
					var item = res.data;
					var html = '';
					html = html + '<tr><td>'+ item.create_time +'</td><td>'+ item.title +'</td><td>'+ item.typelist +'</td><td>'+ item.directionlist +'</td><td>'+ item.price_usdt +'</td><td>'+ item.account +'</td><td>'+ item.statuslist +'</td></tr>';
					if(item.status==1){
						html = html + '<tr class="hidebox"><td colspan="7">';
							html = html + '<div class="layui-row">';
								html = html + '<div class="layui-col-xs2"><?php echo lang("deal_trade.table_pro_acount"); ?></div>';	
								html = html + '<div class="layui-col-xs2">'+item.account_product+'</div>';
								html = html + '<div class="layui-col-xs2"><?php echo lang("deal_trade.table_account"); ?></div>';	
								html = html + '<div class="layui-col-xs2">'+item.account+'</div>';
								html = html + '<div class="layui-col-xs2 text-right"><?php echo lang("deal_trade.table_do"); ?></div>';	
								html = html + '<div class="layui-col-xs2 text-right"><a href="javascript:void(0)" onclick="dealBack('+item.id+');"><span class="color-red"><?php echo lang("deal_trade.table_doback"); ?></span></a></div>';	
							html = html + '</div>';	
						html = html + '</td></tr>';
					}else{
						html = html + '<tr class="hidebox"><td colspan="7">';
							html = html + '<div class="layui-row">';
								html = html + '<div class="layui-col-xs2"><?php echo lang("deal_trade.table_pro_acount"); ?> '+item.account_sxf_tit+'</div>';	
								html = html + '<div class="layui-col-xs2">'+item.account_product+'</div>';	
								html = html + '<div class="layui-col-xs2"><?php echo lang("deal_trade.table_sxf"); ?></div>';	
								html = html + '<div class="layui-col-xs2">'+item.account_sxf+' '+item.account_sxf_tit+'</div>';
								html = html + '<div class="layui-col-xs2"><?php echo lang("deal_trade.table_close"); ?></div>';
								html = html + '<div class="layui-col-xs2">'+item.price_product+'</div>';	
							html = html + '</div>';	
						html = html + '</td></tr>';
					}
					$("#nowlist").prepend(html);
				})
			}
		}

		window.sliderBack = function(){
			ins1.setValue(0);
			$('input[name="buy_account1"]').val(0);
			ins2.setValue(0);
			$('input[name="buy_account2"]').val(0);
			ins3.setValue(0);
			$('input[name="buy_account3"]').val(0);
			ins4.setValue(0);
			$('input[name="buy_account4"]').val(0);
		}
		$('.deal-price').bind('input propertychange change',function(){
			sliderBack();
			refreshHistory();
		})
		refreshOrder(0);
		window.showDeal = function(_this){
			$(_this).parent().parent().next().addClass("show-deal").fadeIn().siblings(".hidebox").removeClass("show-deal").hide();
		}
		window.dealBack =function(id){
			if(id){
				$.post("<?php echo url('deal/findback'); ?>",{id:id}, function(res){
					if (res.code > 0) {
						layer.msg(res.msg, {time: 1800},function(){
							refreshOrder(res.id);
							get_userwallet(localsym,page_out);
						});
					} else {
						if(res.url){
							layer.msg(res.msg, {time: 1800}, function () {
								location.href = res.url;
							});
						}else{
							layer.msg(res.msg, {time: 1800},function(){
								refreshOrder(res.id);
								get_userwallet(localsym,page_out);
							});
						}
					}
				})
			}
		}
	})
	$(function(){
		socket.sendData({
			type: 'kline',
			find: 'deal',
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
</script>



</body>
</html>