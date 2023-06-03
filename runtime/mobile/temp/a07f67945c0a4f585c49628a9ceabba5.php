<?php /*a:4:{s:65:"/www/wwwroot/nasdaqhome.com/app/mobile/view/finance/transfer.html";i:1630033524;s:63:"/www/wwwroot/nasdaqhome.com/app/mobile/view/layout/default.html";i:1630206160;s:72:"/www/wwwroot/nasdaqhome.com/app/mobile/view/./block/mobile_footmenu.html";i:1637392268;s:68:"/www/wwwroot/nasdaqhome.com/app/mobile/view/./block/foot_script.html";i:1639227710;}*/ ?>
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
 * @Date: 2021-07-22 18:23:24
 * @LastEditTime: 2021-08-27 11:05:24
 * @Description: Forward, no stop
-->
<div class="a-header position-re">
	<div class="layui-row">
		<div class="layui-col-xs3">
			<a href="javascript:window.history.go(-1);"><i class="layui-icon layui-icon-left"></i></a>
		</div>
		<div class="layui-col-xs6 text-center">
			<?php echo lang('finance.tf_title'); ?>
		</div>
		<div class="layui-col-xs3 text-right">
		</div>
	</div>
</div>
<div class="new-bg">
	<!--主体-->
	<div class="main padding-l-r">
		
		<div class="a-form">
			<div class="text-right"><a href="<?php echo url('finance/transferlog'); ?>"><?php echo lang('finance.transfer_logs'); ?><i class="layui-icon layui-icon-right"></i></a></div>
			<form class="layui-form mt-10" action="">
				<div class="layui-form-item">
					<label class="a-label"><?php echo lang('finance.transfer_from'); ?></label>
					<div class="">
						<select id="before-coin-type" name="before_type" lay-verify="required" lay-filter="beforeType">
						</select>
					</div>
					<div class="a-lable"><?php echo lang('finance.transfer_to'); ?></div>
					<div class="">
						<select id="after-coin-type" name="after_type" lay-verify="required" lay-filter="afterType" lay-verType="tips" lay-reqText="<?php echo lang('finance.after_select'); ?>">
						</select>
					</div>
				</div>
				<div class="layui-form-item">
					<label class="a-label"><?php echo lang('finance.transfer_coin'); ?></label>
					<div class="">
						<select id="get-product" name="product_id" lay-verify="required" lay-verType="tips" lay-filter="productId">
							
						</select>
					</div>
				</div>
				
				<div class="layui-form-item">
					<label class="a-label"><?php echo lang('finance.transfer_num'); ?></label>
					<div class="">
						<input type="number" name="account"  lay-verify="required|account" lay-verType="tips" lay-reqText="<?php echo lang('finance.transfer_num_check'); ?>" placeholder="<?php echo lang('public.please_input'); ?><?php echo lang('finance.transfer_num'); ?>" autocomplete="off" class="layui-input">
						<p class="mt-10" id="can_transfer"></p>
					</div>				
				</div>
				<div class="layui-form-item">
						<button class="layui-btn layui-btn-normal layui-btn-fluid layui-btn-lg btn-xxx" lay-submit lay-filter="transferForm"><?php echo lang('finance.transfer_btn'); ?></button>
				</div>
			</form>
	
		</div>
	</div>
</div>
<!--footer-->
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

<script>
	var type = "<?php echo htmlentities($type); ?>";
	var after_select = "<?php echo lang('finance.after_select'); ?>";
	var coins_select = "<?php echo lang('finance.coins_select'); ?>";
	
	layui.use(['layer', 'form', 'jquery'], function(){
		var layer = layui.layer
		,form = layui.form
		,$ = layui.jquery;

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		form.verify({
			account: [
				/^(?!(0[0-9]{0,}$))[0-9]{1,}[.]{0,}[0-9]{0,}$/,
				"<?php echo lang('finance.transfer_num_check'); ?>"
			],
		});

		window.get_product = function (){
			var from = $("#before-coin-type").val();
			var to = $("#after-coin-type").val();
			$.post("<?php echo url('finance/get_product'); ?>",{from:from,to:to},function(res){
				if(res.code == 1){
					$("#get-product").empty();
					$("#get-product").append('<option value="">'+coins_select+'</option>');
					var data =res.data
					var html = "";
					for (var i = 0; i < data.length; i++) {
						$("#get-product").append('<option value="'+data[i]['id']+'">'+data[i]['title']+'</option>');
					}
					form.render();
				}
			})
		}
		window.before_coin_type  = function (type,to){
			$.post("<?php echo url('finance/before_coin_type'); ?>",{type:type,to:to},function(res){
				if(res.code == 1){
					$("#before-coin-type").empty();
					var data =res.data
					for (var i = 0; i < data.length; i++) {
						if(parseInt(data[i]['key']) === parseInt(type)){
							$("#before-coin-type").append('<option value="'+data[i]['key']+'" selected>'+data[i]['vol']+'</option>');
						}else{
							$("#before-coin-type").append('<option value="'+data[i]['key']+'">'+data[i]['vol']+'</option>');
						}
					}
					form.render();
				}
			})
		}
		window.after_coin_type  = function (type,to){
			$.post("<?php echo url('finance/after_coin_type'); ?>",{type:type,to:to},function(res){
				if(res.code == 1){
					$("#after-coin-type").empty();
					$("#after-coin-type").append('<option value="">'+after_select+'</option>');
					var data =res.data
					for (var i = 0; i < data.length; i++) {
						if(parseInt(data[i]['key']) === parseInt(type)){
							$("#after-coin-type").append('<option value="'+data[i]['key']+'" selected>'+data[i]['vol']+'</option>');
						}else{
							$("#after-coin-type").append('<option value="'+data[i]['key']+'">'+data[i]['vol']+'</option>');
						}
					}
					form.render();
				}
			})
		}
		window.get_wallet = function (){
			var product_id = $("#get-product").val();
			var from = $("#before-coin-type").val();
			var to = $("#after-coin-type").val();
			$.post("<?php echo url('finance/get_wallet'); ?>",{product_id:product_id,from:from,to:to},function(res){
				if(res.code == 1){
					var data =res.data
					$("#can_transfer").html("<?php echo lang('finance.transfer_can'); ?>："+data.money+data.title);
				}
			})
		}
		
		form.on('select(productId)', function(data){
			var id = data.value;
			get_wallet();
		});

		form.on('select(beforeType)', function(data){
			var type = data.value;
			before_coin_type(type,0);
			after_coin_type(type,1);
		});

		form.on('select(afterType)', function(data){
			$("#get-product").empty();
			$("#can_transfer").empty();
			var type = data.value;
			var bf = $("#before-coin-type").val();
			if(type == bf){
				before_coin_type(type,1);
			}
			// 
			after_coin_type(type,0);
			get_wallet();
			get_product();
		});

		form.on('submit(transferForm)', function(data){
			if(data.field.account){
				loading =layer.load(1, {shade: [0.1,'#fff']});
				$.post("<?php echo url('finance/transfer'); ?>", data.field, function (res) {
					layer.close(loading);
					if (res.code > 0) {
						layer.msg(res.msg, {time: 1800}, function () {
							location.href = res.url;
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

		$(function(){
		if(type > 0){
			before_coin_type(type,0);
			after_coin_type(type,1);
		}else{
			before_coin_type(1,0);
			after_coin_type(1,1);
		}
	});

	})
	
</script>
</body>
</html>