<?php /*a:4:{s:66:"/www/wwwroot/www.nsdkaqnn.com/app/mobile/view/leverdeal/index.html";i:1650260877;s:65:"/www/wwwroot/www.nsdkaqnn.com/app/mobile/view/layout/default.html";i:1630206160;s:74:"/www/wwwroot/www.nsdkaqnn.com/app/mobile/view/./block/mobile_footmenu.html";i:1637392268;s:70:"/www/wwwroot/www.nsdkaqnn.com/app/mobile/view/./block/foot_script.html";i:1639227710;}*/ ?>
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
<script src="/static/mobile/trading/pako.js?v=<?php echo htmlentities($version); ?>"></script>
<script src="/static/mobile/trading/event.js?v=<?php echo htmlentities($version); ?>"></script>
<script src="/static/mobile/trading/charting_library/charting_library.min.js?v=<?php echo htmlentities($version); ?>"></script>
<link rel="stylesheet" type="text/css" href="/static/mobile/lib/tablesort/tablesorter.css?v=<?php echo htmlentities($version); ?>"/>
<link rel="stylesheet" href="/static/mobile/trading/trading.css?v=<?php echo htmlentities($version); ?>">
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
<script src="/static/mobile/js/websocket.js?v=<?php echo htmlentities($version); ?>"></script>
<script src="/static/mobile/trading/datafeed.js?v=<?php echo htmlentities($version); ?>"></script>
<script src="/static/mobile/trading/chartConfig.js?v=<?php echo htmlentities($version); ?>"></script>

<div class="new-bg">
	<!--主体-->
	<div class="main">
		<div class="lever-top">
			<div class="deal-top-left deal-bg hidebox" id="kline_lists_box">
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
			<div class="lever-top-left deal-bg hidebox" id="deal_top_box">
				<div class="a-header layui-rows">
					<div class="layui-col-xs9 kline_coin_left" style="cursor:pointer"><i class="fa fa-bars"></i>
						<span class="trading_top_title_m"></span>
						<span class="trading_top_change_m"></span>
					</div>
					<div class="layui-col-xs3 text-right closea"><a href="javascript:void(0);" onclick="hide_all()"><i class="fa fa-times-circle-o"></i></a></div>
				</div>
				<div class="deal-top-center-title">
					<p class="layui-inline">
						<span id="trading_top_price"></span><br>
						<span>≈</span>
						<span id="trading_top_usd"></span>
						<span>$</span>
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
			<div class="lever-top-right deal-bg hidebox deal_trade_box">
				<div class="a-header layui-rows">
					<div class="layui-col-xs9 kline_coin_left" style="cursor:pointer"><i class="fa fa-bars"></i>
						<span class="trading_top_title_m"></span>
						<span class="trading_top_change_m"></span>
					</div>
					<div class="layui-col-xs3 text-right closea"><a href="javascript:void(0);" onclick="hide_all()"><i class="fa fa-times-circle-o"></i></a></div>
				</div>
				<h5>
					<?php echo lang('deal.depth_title'); ?>
					<div class="trade-checkout">
						<span class="depth-biao" data-value="0"><img src="/static/mobile/img/trade-check-1.png" ></span>
						<span class="depth-biao" data-value="1"><img src="/static/mobile/img/trade-check-2.png" ></span>
						<span class="depth-biao" data-value="2"><img src="/static/mobile/img/trade-check-3.png" ></span>
					</div>
				</h5>
				<!-- <table class="layui-table" lay-skin="nob">
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
				</table> -->
			</div>
		</div>
		<div class="lever-bottom layui-rows first_box">
			<div class="layui-row play-tab">
				<div class="layui-col-xs6 text-right">
					<a href="<?php echo url('leverdeal/index'); ?>" class="layui-btn layui-btn-normal layui-btn-sm no-radius"><?php echo lang('mobile_home.le_title'); ?></a>
				</div>
				<div class="layui-col-xs6 text-left">
					<a href="<?php echo url('seconds/index'); ?>" class="layui-btn layui-btn-primarys layui-btn-sm no-radius"><?php echo lang('mobile_home.op_title'); ?></a>
				</div>
			</div>
			<div class="a-header layui-rows">
				<div class="layui-col-xs9 kline_coin_left" style="cursor:pointer"><i class="fa fa-bars"></i>
					<span class="trading_top_title_m"></span>
					<span class="trading_top_change_m"></span>
				</div>
				<div class="layui-col-xs3 text-right"><a href="javascript:void(0);" onclick="show_kline('deal_top_box','')"><i class="fa fa-line-chart" aria-hidden="true"></i></a></div>
			</div>
			<div class="lever-bottom-right deal-bg layui-row pd-10 mt-20">
				<div class="layui-col-xs5 kline-box-depth">
					<table class="layui-table depth-table" lay-skin="nob">
						<tbody id="bids_box"></tbody>
						<tbody>
						  <tr><td colspan="2" class="depth-box">
							  <span class="color-green font-25" id="right_price">000</span>
						  </td></tr>
						</tbody>
						<tbody>
							<tr><td colspan="2" class="depth-box">
								<span>≈</span>
								<span id="right_price_usd"></span>
								<span>$</span>
							</td></tr>
						  </tbody>
						<tbody id="asks_box"></tbody>
					  </table>
				</div>
				<div class="layui-col-xs7 kline-box-trade-level">
					<div class="layui-tab layui-tab-brief">
					<ul class="layui-tab-title">
						<li class="layui-this"><?php echo lang('leverdeal.btn_buy'); ?></li>
						<li><?php echo lang('leverdeal.btn_sell'); ?></li>
					</ul>
					<div class="layui-tab-content">
						<input type="hidden" name="deal_price" value="0"  autocomplete="off" class="layui-input deal-price">
						<input type="hidden" name="close_price" id="close_price" value="0"  autocomplete="off" class="layui-input close-price">
						<div class="font-14"><?php echo lang('leverdeal.can_use_money'); ?><span class="can-use-money span-margin"></span><span class="pro-tit span-margin"></span>
							<span class="le-play-time hidebox"></span>
							<span class="buy-play-time hidebox"></span>
							<span class="sell-play-time hidebox"></span>
							<span class="le-order-rate hidebox"></span>
							<br><?php echo lang('leverdeal.play_sxf_title'); ?>：<span class="le-sx-fee-100 span-margin"></span>
							<span class="le-sx-fee hidebox"></span>
						</div>
						<div class="layui-tab-item layui-show">
							<div class="layui-col-xs12">
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
										<p><?php echo lang('leverdeal.max_num'); ?></p>
										<p class="text-right">≈<span class="buy_num_this span-margin"></span></p>
									</div>
									<div class="layui-form-item">
										<p><?php echo lang('leverdeal.right_price_this'); ?></p>
										<p class="text-right">≈<span class="right_price_this span-margin"></span><?php echo lang('leverdeal.after_usdt'); ?></p>
									</div>
									<div class="layui-form-item">
										<p><?php echo lang('leverdeal.margin_this'); ?></p>
										<p class="text-right">≈<span class="buy_margin_this span-margin"></span><?php echo lang('leverdeal.after_usdt'); ?></p>
									</div>
									<div class="layui-form-item">
										<p><?php echo lang('leverdeal.sxf_this'); ?></p>
										<p class="text-right">≈<span class="buy_sxf_this span-margin"></span><?php echo lang('leverdeal.after_usdt'); ?></p>
									</div>
									<div class="layui-form-item">
										<button type="button" class="layui-btn btn-green" lay-submit lay-filter="buyForm"><?php echo lang('leverdeal.btn_buy'); ?><span class="pro-tit span-margin"></span></button>
									</div>
								</form>
							</div>
						</div>
						<div class="layui-tab-item">
							<div class="layui-col-xs12">
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
										<p><?php echo lang('leverdeal.max_num'); ?></p>
										<p class="text-right">≈<span class="sell_num_this span-margin"></span></p>
									</div>
									<div class="layui-form-item">
										<p><?php echo lang('leverdeal.right_price_this'); ?></p>
										<p class="text-right">≈<span class="right_price_this span-margin"></span><?php echo lang('leverdeal.after_usdt'); ?></p>
									</div>
									<div class="layui-form-item">
										<p><?php echo lang('leverdeal.margin_this'); ?></p>
										<p class="text-right">≈<span class="sell_margin_this span-margin"></span><?php echo lang('leverdeal.after_usdt'); ?></p>
									</div>
									<div class="layui-form-item">
										<p><?php echo lang('leverdeal.sxf_this'); ?></p>
										<p class="text-right">≈<span class="sell_sxf_this span-margin"></span><?php echo lang('leverdeal.after_usdt'); ?></p>
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
			<div class="deal-bottom-left deal-bg padding-l-r mt-20">
				<div class="layui-tab layui-tab-brief" lay-filter="tabList">
				  <ul class="layui-tab-title">
				    <li class="layui-this"><?php echo lang('leverdeal.left_order'); ?></li>
				    <li><?php echo lang('leverdeal.left_history'); ?></li>
				  </ul>
				  <div class="layui-tab-content mobile-layui-tab-content">
				    <div class="layui-tab-item layui-show">
						<table class="layui-table fox-table" lay-skin="nob" lay-even>
							<colgroup>
								<col width="30%">
								<col width="50%">
								<col width="20%">
							</colgroup>
							<thead>
							<tr>
								<th><span class="table-span-list"><?php echo lang('leverdeal.table_time'); ?>/<?php echo lang('leverdeal.table_style'); ?></span></th>
								<th><span class="table-span-list"><?php echo lang('leverdeal.table_buyprice'); ?>/<?php echo lang('leverdeal.table_nowprice'); ?>/<?php echo lang('leverdeal.table_account'); ?>/<?php echo lang('leverdeal.table_play'); ?></span></th>
								<th><span class="table-span-list"><?php echo lang('leverdeal.table_rates'); ?>/<?php echo lang('leverdeal.table_do'); ?></span></th>
							</tr> 
							</thead>
							<tbody id="lista">
							
							</tbody>
						</table>
					</div>
					<div class="layui-tab-item">
						<table class="layui-table fox-table" lay-skin="nob" lay-even>
							<colgroup>
								<col width="30%">
								<col width="50%">
								<col width="20%">
							</colgroup>
							<thead>
							<tr>
								<th><span class="table-span-list"><?php echo lang('leverdeal.table_time'); ?>/<?php echo lang('leverdeal.table_style'); ?></span></th>
								<th><span class="table-span-list"><?php echo lang('leverdeal.table_buyprice'); ?>/<?php echo lang('leverdeal.table_closeprice'); ?>/<?php echo lang('leverdeal.table_account'); ?>/<?php echo lang('leverdeal.table_play'); ?></span></th>
								<th><span class="table-span-list"><?php echo lang('leverdeal.table_rates'); ?>/<?php echo lang('leverdeal.table_salt'); ?></span></th>
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
	</div>
</div>
<!--
 * @Author: Fox Blue
 * @Date: 2021-08-17 17:41:21
 * @LastEditTime: 2021-08-25 21:52:33
 * @Description: Forward, no stop
-->
<!--底部-->
<style>
    button{
        background-color: #2a405c;
        border:none;
    color:#768da9;
    }
</style>
<div class="footer box-shadow-foot">	
    <div class="footer-tab layui-inline">
        <!--<a href="<?php echo url('/mobile'); ?>">-->
            <button class="menuBtn" onclick="menuClick('mobile')" data="mobile">
            <img src="/static/mobile/imgn/home_ico<?php if($footmenu=='home'): ?>_HL<?php endif; ?>.png" >
            <p <?php if($footmenu=='home'): ?> class="active"<?php endif; ?>><?php echo lang('mobile_foot.home'); ?></p>
        </button>
    </div>
    <div class="footer-tab layui-inline">
        <!--<a href="<?php echo url('market/index'); ?>">-->
            <button class="menuBtn" onclick="menuClick('market')" data="market">
            <img src="/static/mobile/imgn/market_ico<?php if($footmenu=='market'): ?>_HL<?php endif; ?>.png" >
            <p <?php if($footmenu=='market'): ?> class="active"<?php endif; ?>><?php echo lang('mobile_foot.market'); ?></p>
        </button>
    </div>
    <div class="footer-tab layui-inline">
        <!--<a href="<?php echo url('deal/index'); ?>">-->
            <button class="menuBtn" onclick="menuClick('deal')"  data="deal">
            <img src="/static/mobile/imgn/trade_ico<?php if($footmenu=='deal'): ?>_HL<?php endif; ?>.png" >
            <p <?php if($footmenu=='deal'): ?> class="active"<?php endif; ?>><?php echo lang('mobile_foot.deal'); ?></p>
        </button>
    </div>
    <div class="footer-tab layui-inline">
        <!--<a href="<?php echo url('leverdeal/index'); ?>">-->
        <button class="menuBtn"onclick="menuClick('leverdeal')"  data="leverdeal">
            <img src="/static/mobile/imgn/lever_ico<?php if($footmenu=='leverdeal'): ?>_HL<?php endif; ?>.png" >
            <p <?php if($footmenu=='leverdeal'): ?> class="active"<?php endif; ?>><?php echo lang('mobile_foot.leverdeal'); ?></p>
        </button>
    </div>
    <div class="footer-tab layui-inline">
        <button class="menuBtn" onclick="menuClick('finance')" data="finance">
            <img src="/static/mobile/imgn/assets_ico<?php if($footmenu=='finance'): ?>_HL<?php endif; ?>.png" >
            <p <?php if($footmenu=='finance'): ?> class="active"<?php endif; ?>><?php echo lang('mobile_foot.finance'); ?></p>
        </button>
    </div>
</div>
<script type="text/javascript">
    /*$(document).ready(function(){
        $(".menuBtn").click(function(){
            var type = $(".menuBtn").attr("data");
            console.log(type == 'mobile');
            if(type == 'mobile'){
                window.location.href = "<?php echo url('/mobile'); ?>"
            }else if(type == 'market'){
                window.location.href = "<?php echo url('market/index'); ?>"
            }else if(type == 'deal'){
                window.location.href = "<?php echo url('deal/index'); ?>"
            }else if(type == 'leverdeal'){
                window.location.href = "<?php echo url('leverdeal/index'); ?>"
            }else if(type == 'finance'){
                window.location.href = "<?php echo url('finance/index'); ?>"
            }
        });
    });*/
    function menuClick(type){
        if(type == 'mobile'){
            window.location.href = "<?php echo url('/mobile'); ?>"
        }else if(type == 'market'){
            window.location.href = "<?php echo url('market/index'); ?>"
        }else if(type == 'deal'){
            window.location.href = "<?php echo url('deal/index'); ?>"
        }else if(type == 'leverdeal'){
            window.location.href = "<?php echo url('leverdeal/index'); ?>"
        }else if(type == 'finance'){
            window.location.href = "<?php echo url('finance/index'); ?>"
        }
    }
</script>
<!--
 * @Author: Fox Blue
 * @Date: 2021-07-01 18:58:10
 * @LastEditTime: 2021-08-25 16:18:44
 * @Description: Forward, no stop
-->
<script src="/static/mobile/js/script.js?v=<?php echo htmlentities($version); ?>"></script>
<script src="/static/mobile/js/clipboard.min.js?v=<?php echo htmlentities($version); ?>"></script>
<script src="/static/mobile/js/iosapp.js"></script>

<script src="/static/mobile/js/socketset.js?v=<?php echo htmlentities($version); ?>"></script>
<script src="/static/mobile/js/websocket.js?v=<?php echo htmlentities($version); ?>"></script>
<script type="text/javascript" src="/static/mobile/lib/tablesort/tablesorter.js?v=<?php echo htmlentities($version); ?>"></script>
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
	/*function plusReady() {
	var ws = plus.webview.currentWebview();
	ws.overrideUrlLoading({
		mode: 'reject'
	}, function(e) {
		console.log('url: ' + e.url);
	})
	}
	document.addEventListener('plusready', plusReady, false);*/
	$(function(){
		sessionStorage.setItem("ins1", 0);
		sessionStorage.setItem("ins2", 0);
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
				,colSpan: 3 //列数
				,isAuto: true
				,end:'<td colspan="3" class="text-center"><?php echo lang("finance.finance_nodata"); ?></td>'
				,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
				var lis = [];
				$.post("<?php echo url('leverdeal/lista'); ?>",{page:page,code:localsym}, function(res){
					layui.each(res.data, function(index, item){
						var html = '<tr id="list'+item.id+'">';
						html = html + '<td>'+item.create_time+'<br>';	
						html = html + '<span class="leverdeal-color-'+item.style+'">'+item.ostyle+'</span></td>';
						html = html + '<td>'+parseFloat(item.buy_price)+'<br>';	
						html = html + '<span class="price_'+item.id+'" id="price_'+item.id+'">'+parseFloat(item.now_price)+'</span><br>';	
						html = html + ''+parseFloat(item.account)+'/';	
						html = html + ''+item.play_time+'</td>';	
						html = html + '<td><span id="win_'+item.id+'" class="win'+item.id+' leverdeal-color-'+item.style+'">'+parseFloat(item.win_account)+'</span><br>';	
						html = html + '<a href="javascript:void(0);" onclick="orderThis('+item.id+')" class="layui-btn layui-btn-xs fox-btn-xs layui-btn-warm"><?php echo lang("leverdeal.do_btn"); ?></a></td>';
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
				,colSpan: 3 //列数
				,isAuto: true
				,end:'<td colspan="3" class="text-center"><?php echo lang("finance.finance_nodata"); ?></td>'
				,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
				var lis = [];
				$.post("<?php echo url('leverdeal/listb'); ?>",{page:page,code:localsym}, function(res){
					layui.each(res.data, function(index, item){
						var html = '<tr>';
						html = html + '<td>'+item.create_time+'<br>';	
						html = html + '<span class="leverdeal-color-'+item.style+'">'+item.ostyle+'</span></td>';
						html = html + '<td>'+parseFloat(item.buy_price)+'<br>'+parseFloat(item.close_price)+'<br>'+parseFloat(item.account)+'/';	
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
			,disabled: false
			,showstep: true //开启间隔点
			,setTips: function(value){ //自定义提示文本
				return value + '%';
			}
			,change: function(value){
				var buymax = parseFloat($(".buy_num_this").text());
				if(value > 0){
					sessionStorage.setItem("ins1", value);
					$(".layui-slider .layui-slider-tips").show();
					var num = floatMul(buymax,value/100);
					$('#buy_account').val(num);
				}else{
					$('#buy_account').val(0);
				}
			}
		});

		var ins2 = slider.render({
			elem: '#slideNum2'
			,step: 1 //步长
			,stepshow: 25 //间隔
			,disabled: false
			,showstep: true //开启间隔点
			,theme: '#ef5656'
			,setTips: function(value){ //自定义提示文本
				return value + '%';
			}
			,change: function(value){
				var sellmax = parseFloat($(".sell_num_this").text());
				if(value > 0){
					sessionStorage.setItem("ins2", value);
					var num = floatMul(sellmax,value/100);
					$('#sell_account').val(num);
				}else{
					$('#sell_account').val(0);
				}
			}
		});
		
		$("#slideNum1 .layui-slider-wrap").on("touchstart", function (e) {
			var startX = e.originalEvent.targetTouches[0].pageX;//开始坐标X
			$(this).on('touchmove', function (e) {
				arguments[0].preventDefault();//阻止手机浏览器默认事件
			});
			$(this).on('touchend', function (e) {
				var lenth = $("#slideNum1 .layui-slider").width();
				var endX = e.originalEvent.changedTouches[0].pageX;//结束坐标X
				e.stopPropagation();//停止DOM事件逐层往上传播
				var val = Math.floor((endX - startX)/lenth * 100);
				if(val > 0 && val <= 100){
					$("#slideNum1 .layui-slider .layui-slider-tips").show();
					var value = sessionStorage.getItem("ins1");
					if(value){
						var num = parseInt(value) + parseInt(val);
					}else{
						var num = val;
					}
					if(num <100){
						sessionStorage.setItem("ins1", num);
					}else{
						sessionStorage.setItem("ins1", 100);
					}
					ins1.setValue(num);
					var buymax = parseFloat($(".buy_num_this").text());
					var nums = floatMul(buymax,value/100);
					$('#buy_account').val(nums);
				}else {
					$("#slideNum1 .layui-slider .layui-slider-tips").show();
					var value = sessionStorage.getItem("ins1");
					if(value){
						var num = parseInt(value) + parseInt(val);
						if(num>0){
							ins1.setValue(num);
							var buymax = parseFloat($(".buy_num_this").text());
							var nums = floatMul(buymax,value/100);
							$('#buy_account').val(nums);
							sessionStorage.setItem("ins1", num);
						}else{
							$("#slideNum1 .layui-slider .layui-slider-tips").hide();
							ins1.setValue(0);
							$('#buy_account').val(0);
							sessionStorage.removeItem("ins1");
						}
					}
				}
				$(this).off('touchmove touchend');
			});
		});

		$("#slideNum2 .layui-slider-wrap").on("touchstart", function (e) {
			var startX = e.originalEvent.targetTouches[0].pageX;//开始坐标X
			$(this).on('touchmove', function (e) {
				arguments[0].preventDefault();//阻止手机浏览器默认事件
			});
			$(this).on('touchend', function (e) {
				var lenth = $("#slideNum2 .layui-slider").width();
				var endX = e.originalEvent.changedTouches[0].pageX;//结束坐标X
				e.stopPropagation();//停止DOM事件逐层往上传播
				var val = Math.floor((endX - startX)/lenth * 100);
				if(val > 0 && val <= 100){
					$("#slideNum2 .layui-slider .layui-slider-tips").show();
					var value = sessionStorage.getItem("ins2");
					if(value){
						var num = parseInt(value) + parseInt(val);
					}else{
						var num = val;
					}
					if(num <100){
						sessionStorage.setItem("ins2", num);
					}else{
						sessionStorage.setItem("ins2", 100);
					}
					ins2.setValue(num);
					var sellmax = parseFloat($(".sell_num_this").text());
					var nums = floatMul(sellmax,value/100);
					$('#sell_account').val(nums);
				}else {
					$("#slideNum2 .layui-slider .layui-slider-tips").show();
					var value = sessionStorage.getItem("ins1");
					if(value){
						var num = parseInt(value) + parseInt(val);
						if(num>0){
							ins2.setValue(num);
							var sellmax = parseFloat($(".sell_num_this").text());
							var nums = floatMul(sellmax,value/100);
							$('#sell_account').val(nums);
							sessionStorage.setItem("ins2", num);
						}else{
							$("#slideNum2 .layui-slider .layui-slider-tips").hide();
							ins2.setValue(0);
							$('#sell_account').val(0);
							sessionStorage.removeItem("ins2");
						}
					}
				}
				$(this).off('touchmove touchend');
			});
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