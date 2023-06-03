<?php /*a:4:{s:63:"/www/wwwroot/www.nsdkaqnn.com/app/mobile/view/market/index.html";i:1630222130;s:65:"/www/wwwroot/www.nsdkaqnn.com/app/mobile/view/layout/default.html";i:1630206160;s:74:"/www/wwwroot/www.nsdkaqnn.com/app/mobile/view/./block/mobile_footmenu.html";i:1637392268;s:70:"/www/wwwroot/www.nsdkaqnn.com/app/mobile/view/./block/foot_script.html";i:1639227710;}*/ ?>
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
 * @Date: 2021-07-12 16:20:09
 * @LastEditTime: 2021-08-29 15:28:50
 * @Description: Forward, no stop
-->

	<div class="a-header text-center">
		<?php echo lang('market.title'); ?>
	</div>
	<!--主体-->
	<div class="main padding-l-r">
		<div class="a-table">
			<!-- <h4><span><?php echo lang('market.USDT'); ?></span></h4> -->
			<table class="layui-table fox-table" lay-skin="nob">
				<thead>
					<tr>
						<th><span class="table-span"><?php echo lang('market.symbol'); ?>/<?php echo lang('market.amount'); ?></span></th>
						<th><span class="table-span"><?php echo lang('market.price'); ?></span></th>
						<th class="text-right"><span class="table-span"><?php echo lang('home_page.coin_updown'); ?></span></th>
					</tr> 
				</thead>
				<tbody>
				   <?php if(is_array($product) || $product instanceof \think\Collection || $product instanceof \think\Paginator): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<tr onclick='go_kline("<?php echo htmlentities($vo['code']); ?>");' style="cursor:pointer;">
						<td><div class="market-list">
							<img src="<?php echo htmlentities($vo['logo']); ?>" width="24" height="24">
								<div class="market-list-right">
									<span class="link-b"><?php echo htmlentities($vo['title']); ?></span><span class="font-14">/<?php echo lang('market.USDT'); ?></span>
									<p class="font-14" style="line-height: 18px;"><?php echo lang('market.amount'); ?><br><span id="amount_<?php echo htmlentities($vo['code']); ?>"><?php echo htmlentities(floatVal($vo['volume'])); ?></span></p>
								</div>
							</div>
						</td>
						<td>
						   <span id="price_<?php echo htmlentities($vo['code']); ?>"><?php echo htmlentities(floatVal($vo['last_price'])); ?></span>
					   </td>
						<td class="text-right"><span id="change_<?php echo htmlentities($vo['code']); ?>" <?php if($vo['change']>0): ?>class="layui-btn layui-btn-sm btn-green"<?php else: ?>class="layui-btn layui-btn-sm btn-red"<?php endif; ?>><?php echo htmlentities(fox_nums(floatVal($vo['change']))); ?>%</span></td>
					</tr>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
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

	<script src="/static/mobile/js/index/d3.v4.min.js?v=<?php echo htmlentities($version); ?>"></script>
	<script src="/static/mobile/js/index/index.js?v=<?php echo htmlentities($version); ?>"></script>
	<script>var page_out="market";</script>
	<script src="/static/mobile/js/websocket.js?v=<?php echo htmlentities($version); ?>"></script>
	<script>
		$(function(){
			socket.sendData({
				type: 'kline',
				find: 'market',
			},null,null)
		})
		function go_kline(a){
			storage.setItem("tobol",a);
			location.href="<?php echo url('deal/index'); ?>";
		}
	</script>
</body>
</html>