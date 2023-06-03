<?php /*a:4:{s:62:"/www/wwwroot/www.nsdkaqnn.com/app/mobile/view/winer/index.html";i:1634091916;s:65:"/www/wwwroot/www.nsdkaqnn.com/app/mobile/view/layout/default.html";i:1630206160;s:74:"/www/wwwroot/www.nsdkaqnn.com/app/mobile/view/./block/mobile_backhome.html";i:1629389878;s:70:"/www/wwwroot/www.nsdkaqnn.com/app/mobile/view/./block/foot_script.html";i:1639227710;}*/ ?>
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
 * @Date: 2021-08-05 14:49:53
 * @LastEditTime: 2021-10-13 10:24:46
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
		<div class="layui-container">
			<div class="white-box mt-20">
				<div class="transfer-box">
					<h5>
						<span class="layui-inline"><?php echo lang('winer.title'); ?></span>
						<div class="layui-inline float-right">
							<a href="<?php echo url('show/news',['id'=>16]); ?>" class="color-yellow mr-10"><?php echo lang('winer.rules'); ?></a>
							<a href="<?php echo url('winer/lists'); ?>" class="color-blue"><?php echo lang('winer.lists'); ?></a>
						</div>
					</h5>
					<hr >
					<div class="set-form">
						<form class="layui-form" action="" lay-filter="test2">
						  <div class="layui-form-item">
								<label class="layui-form-label"><?php echo lang('winer.products'); ?></label>
								<div class="layui-input-block">
									<select id="winer_id" name="winer_id" lay-verify="required" lay-filter="winerSec">
										<?php if(is_array($winers) || $winers instanceof \think\Collection || $winers instanceof \think\Paginator): $i = 0; $__LIST__ = $winers;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
										<option value="<?php echo htmlentities($vo['id']); ?>"><?php echo htmlentities($vo['coin']); ?></option>
										<?php endforeach; endif; else: echo "" ;endif; ?>
									</select>
								</div>
							</div>
							<div class="layui-form-item">
								<label class="layui-form-label"><?php echo lang('winer.times'); ?>：</label>
								<div class="layui-input-block">
									<select name="time" id="time" lay-verify="required">
										<option value="7" selected>7</option>
										<option value="15">15</option>
										<option value="30">30</option>
										<option value="60">60</option>
										<option value="90">90</option>
										<option value="180">180</option>
									</select>
								</div>
							</div>
							<div class="layui-form-item">
							  <label class="layui-form-label"><?php echo lang('winer.nums'); ?>：</label>
							  <div class="layui-input-block">
							    <input type="number" id="buy_account" name="buy_account" lay-verify="required|account" lay-verType="tips" placeholder="<?php echo lang('public.please_input'); ?><?php echo lang('winer.nums'); ?>" autocomplete="off" class="layui-input">
							  </div>
							</div>
							<div class="layui-form-item">
							  <label class="layui-form-label"><?php echo lang('winer.paypwd'); ?>：</label>
							  <div class="layui-input-block">
							    <input type="password" name="paypwd" required  lay-verType="tips" lay-verify="required" placeholder="<?php echo lang('public.please_input'); ?><?php echo lang('winer.paypwd'); ?>" autocomplete="off" class="layui-input">
							  </div>
							</div>
							<div class="layui-form-item">
								<label class="layui-form-label"><?php echo lang('winer.rates'); ?>：</label>
								<div class="layui-input-block"><span class="set-span" id="this_rate"></span><span class="span-margin">%</span></div>
							</div>
							<div class="layui-form-item">
								<label class="layui-form-label"><?php echo lang('winer.rates_gs'); ?>：</label>
								<div class="layui-input-block"><span class="set-span" id="guess_rate"></span></div>
							</div>
							<div class="layui-form-item">
								<label class="layui-form-label"><?php echo lang('winer.moneys'); ?>：</label>
								<div class="layui-input-block"><span class="set-span" id="user_wallet"><?php echo htmlentities($user_wallet['ex_money']); ?></span><span class="span-margin"><?php echo htmlentities($user_wallet['title']); ?></span></div>
							</div>
							<div class="layui-form-item">
								 <button class="layui-btn layui-btn-fluid layui-btn-normal layui-btn-lg" lay-submit lay-filter="buyForm"><?php echo lang('winer.btn_sub'); ?></button>
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
	
		form.verify({
			account: [
				/^(?!(0[0-9]{0,}$))[0-9]{1,}[.]{0,}[0-9]{0,}$/
				,"<?php echo lang('winer.check_buy_number'); ?>"
			] 
		});
	
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		form.on('select(winerSec)', function(data){
			$("#buy_account").val('');
			$("#guess_rate").html('');
			findRate();
		});

		window.findRate = function(){
			var winer_id = $("#winer_id").val();
			if(!winer_id){
				winer_id = "<?php echo htmlentities($pro_id); ?>";
			}
			if(winer_id){
				$.post("<?php echo url('winer/get_rate'); ?>",{winer_id:winer_id},function(res){
					if(res.code == 1){
						var data =res.data
						var html = '';
						$("#this_rate").html(floatMul(data.rate,100));
						$.each(data.play_time,function(i,item){
                            html += '<option value="' + item +'">' + item + '</option>';
                        });
                        $('#time').html(html);
						form.render('select', 'test2');
					}
				})
			}
		}

		$("input[name='buy_account']").on("input", function () {
			var num =$(this).val();
			var winer_id = $("#winer_id").val();
			var time = $("#time").val();
			if(!winer_id){
				winer_id = "<?php echo htmlentities($pro_id); ?>";
			}
			if(num && winer_id){
				$.post("<?php echo url('winer/get_num'); ?>",{num:num,winer_id:winer_id,time:time},function(res){
					if(res.code == 1){
						var data =res.data
						$("#guess_rate").html(data.guess_rate);
					}
				})
			}
		});

		form.on('submit(buyForm)', function(data){
			if(data.field.buy_account){
				var winer_id = $("#winer_id").val();
				if(!winer_id){
					winer_id = "<?php echo htmlentities($pro_id); ?>";
				}
				data.field.winer_id = winer_id;
				loading =layer.load(1, {shade: [0.1,'#fff']});
				$.post("<?php echo url('winer/orderdo'); ?>", data.field, function (res) {
					layer.close(loading);
					if (res.code > 0) {
						layer.msg(res.msg, {time: 1800}, function () {
							if(res.url){
								location.href = res.url;
							}else{
								window.location.reload();
							}
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
	window.onload=function(){
		findRate();
	}
</script>
</body>
</html>