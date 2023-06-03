<?php /*a:3:{s:56:"/www/wwwroot/61.4.114.53/app/mobile/view/ieorg/show.html";i:1630110852;s:60:"/www/wwwroot/61.4.114.53/app/mobile/view/layout/default.html";i:1630206160;s:65:"/www/wwwroot/61.4.114.53/app/mobile/view/./block/foot_script.html";i:1639227710;}*/ ?>
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
 * @Date: 2021-06-13 16:47:10
 * @LastEditTime: 2021-08-28 08:34:13
 * @Description: Forward, no stop
-->
<div class="a-header position-re layui-rows">
    <div class="layui-col-xs4">
        <a href="javascript:window.history.go(-1);"><i class="layui-icon layui-icon-left"></i></a>
    </div>
	<div class="layui-col-xs4 text-center">
		<?php echo lang('ieorg.title'); ?>
	</div>
	<div class="layui-col-xs4 text-right">
        <a href="<?php echo url('/mobile'); ?>"><i class="layui-icon layui-icon-home"></i></a>
    </div>
</div>
<div class="new-bg main-no">
	<!--主体-->
	<div class="ieo-top">
		<div class="layui-container">
			<div class="layui-row layui-col-space30">
				<div class="layui-col-xs12">
					<div class="ieo-img">
						<img src="<?php echo htmlentities($row['info']['logo']); ?>" >
					</div>
				</div>
				<div class="layui-col-xs12">
					<h3><?php echo htmlentities($row['title']); ?></h3>
					<span class="font-14 color-grey">(<?php echo htmlentities($row['coin_title']); ?>)</span>
					<hr>
					<div class="layui-row">
						<div class="layui-col-xs6 mt-10">
							<span class="color-grey"><?php echo lang('ieorg.list_num_price'); ?></span>
							<p class="mt-10">1 <?php echo htmlentities($row['coin_title']); ?> = <?php echo htmlentities($row['ieo_usdt_price']); ?> <?php echo lang('market.USDT'); ?></p>	
						</div>
						<div class="layui-col-xs6 mt-10">
							<span class="color-grey"><?php echo lang('ieorg.list_num_title'); ?></span>
							<p class="mt-10"><?php echo htmlentities($row['ieo_num']); ?> <?php echo htmlentities($row['coin_title']); ?></p>	
						</div>
					</div>
					<hr>
					<div class="mt-30">
						<a href="<?php echo htmlentities($row['ieo_site']); ?>" class="color-grey"><?php echo lang('ieorg.show_website'); ?></a>
						<a href="<?php echo htmlentities($row['ieo_link']); ?>" class="color-grey"><?php echo lang('ieorg.show_link'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="main">
		<div class="layui-container">
			<div class="layui-row layui-col-space20">
				<div class="layui-col-xs12">
					<div class="ieo-bottom">
						<div class="layui-tab layui-tab-brief">
							<ul class="layui-tab-title">
								<li class="layui-this"><?php echo lang('ieorg.show_tab_a'); ?></li>
								<li><?php echo lang('ieorg.show_tab_b'); ?></li>
							</ul>
							<div class="layui-tab-content">
								<div class="layui-tab-item layui-show">
									<?php echo html_entity_decode(htmlspecialchars_decode(fox_raw($row['info']['remark']))); ?>
								</div>
								<div class="layui-tab-item ">
									<?php echo html_entity_decode(htmlspecialchars_decode($row['info']['content'])); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="layui-col-xs12">
					<div class="ieo-oper">
						<h4><?php echo lang('ieorg.right_buy_title'); ?><a href="javascript:void(0);" onclick="buyall();" class="float-right color-blue"><?php echo lang('ieorg.right_buy_all'); ?></a></h4>
						<form class="layui-form mt-10" action="">
							<div class="layui-form-item">					
								<select name="product_id" id="get-product" lay-verify="required" lay-verType="tips" lay-filter="productId">
									<option value=""><?php echo lang('ieorg.select_product'); ?></option>
									<?php if(is_array($can_products) || $can_products instanceof \think\Collection || $can_products instanceof \think\Paginator): $i = 0; $__LIST__ = $can_products;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
									<option value="<?php echo htmlentities($vo['id']); ?>"><?php echo htmlentities($vo['title']); ?></option>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</select>			
							</div>
							<div class="layui-form-item">
								<input type="number" name="buy_account" value="" lay-verify="required|account" lay-verType="tips" placeholder="<?php echo lang('ieorg.please_input_num'); ?>" autocomplete="off" class="layui-input"/>
							</div>
							<div class="hidebox" id="money"></div>
							<div class="hidebox" id="equal"></div>
							<div class="layui-form-item" id="equal_tit"></div>
							<div class="layui-form-item font-12" id="money_tit"></div>
							<div class="layui-form-item font-12"><span id="buy_tit"></span><span id="buy_use_money"></span></div>
							<div class="layui-form-item">
								<span class="layui-btn btn-xxx" lay-submit lay-filter="ieorgForm"><?php echo lang('ieorg.buy_btn'); ?></span>
							</div>
						</form>
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

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		form.verify({
			account: [
				/^(?!(0[0-9]{0,}$))[0-9]{1,}[.]{0,}[0-9]{0,}$/,
				"<?php echo lang('ieorg.buy_num_check'); ?>"
			],
		});

		window.get_wallet = function(id){
			var good_id ="<?php echo htmlentities($row['id']); ?>";
			if(id){
				$.post("<?php echo url('ieorg/get_wallet'); ?>",{product_id:id,good_id:good_id},function(res){
					if(res.code == 1){
						var data =res.data
						$("#money").html(data.money);
						$("#equal").html(data.equal);
						$("#equal_tit").html(data.equal_tit);
						$("#money_tit").html(data.money_tit);
						$("#buy_tit").html(data.buy_tit);
					}
				})
			}
		}

		form.on('select(productId)', function(data){
			var id = data.value;
			$("#buy_use_money").html("");
			$("input[name='buy_account']").val("");
			get_wallet(id);
		});

		$("input[name='buy_account']").on("input", function () {
			var num =$(this).val();
			var product_id = $("#get-product").val();
			if(!product_id){
				var that = this;
				layer.msg("<?php echo lang('ieorg.please_select_product'); ?>",{shade:0.2,time:1000}, function(){
					$("input[name='buy_account']").val("");
				});
				return false;
			}
			if(num){
				var equal= $("#equal").text();
				$.post("<?php echo url('ieorg/get_num'); ?>",{num:num,equal:equal},function(res){
					if(res.code == 1){
						var data =res.data
						$("#buy_use_money").html(data.donum);
					}
				})
			}
		});

		window.buyall = function(){
			var product_id = $("#get-product").val();
			if(!product_id){
				var that = this;
				layer.msg("<?php echo lang('ieorg.please_select_product'); ?>",{shade:0.2,time:1000});
				return false;
			}
			var money = $("#money").text();
			var equal = $("#equal").text();
			$.post("<?php echo url('ieorg/get_nums'); ?>",{money:money,equal:equal},function(res){
				if(res.code == 1){
					var data =res.data
					$("input[name='buy_account']").val(data.donum);
					$("#buy_use_money").html(money);
				}
			})
		}

		form.on('submit(ieorgForm)', function(data){
			if(data.field.buy_account){
				data.field.ieo_id = "<?php echo htmlentities($row['id']); ?>";
				data.field.product_id = $("#get-product").val();
				data.field.money = $("#buy_use_money").text();
				loading =layer.load(1, {shade: [0.1,'#fff']});
				$.post("<?php echo url('ieorg/orderdo'); ?>", data.field, function (res) {
					layer.close(loading);
					if (res.code > 0) {
						layer.msg(res.msg, {time: 1800}, function () {
							window.location.reload();
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
		
	})
</script>
</body>
</html>