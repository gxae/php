<?php /*a:3:{s:65:"/www/wwwroot/www.nsdkaqnn.com/app/mobile/view/member/account.html";i:1650025253;s:65:"/www/wwwroot/www.nsdkaqnn.com/app/mobile/view/layout/default.html";i:1630206160;s:70:"/www/wwwroot/www.nsdkaqnn.com/app/mobile/view/./block/foot_script.html";i:1639227710;}*/ ?>
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
 * @Date: 2021-07-08 21:39:08
 * @LastEditTime: 2021-08-27 13:19:33
 * @Description: Forward, no stop
-->
<div class="a-header position-re">
	<a href="javascript:window.history.go(-1);"><i class="layui-icon layui-icon-left"></i></a>
	<div class="layui-inline h-span"><?php echo lang('public_memu.member_account'); ?></div>
</div>
<div class="new-bg">
	<!--主体-->
	<div class="main padding-l-r">
		<div class="layui-container">
			<div class="layui-row white-box">
				<div class="layui-col-xs12">
					<div class="account-main mt-30">
						<div class="account-safe text-center">
							<img src="/static/index/img/safe_ico.png" >
							<div class="layui-inline">
								<p><?php echo fox_all_replace(lang('member.member_safe_txt'),$safe_x,5); ?></p>
								<div class="layui-progress">
								  <div class="layui-progress-bar layui-bg-blue" lay-percent="<?php echo htmlentities($safe); ?>%"></div>
								</div>
								<p class="font-12"><?php echo fox_all_replace(lang('member.member_safe_txt'),$safe_x,5); ?><?php echo lang('member.member_safe_after'); ?></p>
							</div>
						</div>
						<hr >
						<ul class="account-body">
							<li class="layui-row">
								<span class="layui-col-xs4"><i class="layui-icon layui-icon-ok-circle"></i><?php echo lang('member.member_invite_code'); ?></span>
								<span class="layui-col-xs4"><?php echo htmlentities($member['invite_code']); ?></span>
								<span class="layui-col-xs4 text-right"><i class="fa fa-qrcode" aria-hidden="true"></i> <a href="javascript:void(0);" onclick="copy();" class="color-blue"><?php echo lang('member.member_invite_copy'); ?></a></span>
							</li>
							<li class="layui-row hidebox text-center" id="invite">
								<img src="<?php echo htmlentities($invite_code_img); ?>" width="150">
							</li>
							<?php if($phone): ?>
							<li class="layui-row">
								<span class="layui-col-xs4"><i class="layui-icon layui-icon-ok-circle"></i><?php echo lang('member.member_phone'); ?></span>
								<span class="layui-col-xs4"><?php echo htmlentities($hide); ?></span>
								<span class="layui-col-xs4 text-right"></span>
							</li>
							<?php else: ?>
							<li class="layui-row">
								<span class="layui-col-xs4"><i class="layui-icon layui-icon-close-fill color-red"></i><?php echo lang('member.member_phone'); ?></span>
								<span class="layui-col-xs4"><?php echo lang('member.member_phone_txt'); ?></span>
								<span class="layui-col-xs4 text-right"><a href="javascript:void(0);" class="color-blue phoneset"><?php echo lang('member.member_phone_set'); ?></a></span>
							</li>
							<li class="layui-row text-center hidebox form-bg" id="phoneset">
								<form class="layui-form" action="">
									<div class="layui-inline">
										<div class="layui-input-inline" style="width: 160px;">
											<select lay-filter="selectPrefix" lay-search=""  lay-verify="required" lay-verType="tips" lay-reqText="<?php echo lang('wicket_page.register_prefix'); ?>">
												<option value=""><?php echo lang('wicket_page.register_prefix'); ?></option>
												<?php if(is_array($prefix_code) || $prefix_code instanceof \think\Collection || $prefix_code instanceof \think\Paginator): $i = 0; $__LIST__ = $prefix_code;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
												<option value="<?php echo htmlentities($vo['prefix']); ?>"><?php if(strstr($lang, 'cn')): ?><?php echo htmlentities($vo['cn']); else: ?><?php echo htmlentities($vo['en']); ?><?php endif; ?></option>
												<?php endforeach; endif; else: echo "" ;endif; ?>
											  </select>
										</div>
									</div>
									<div class="layui-inline">
										<div class="layui-input-inline text-right" style="width: 60px;"><?php echo lang('wicket_page.register_phone_input'); ?></div>
										<div class="layui-input-inline" style="width: 130px;">
										  <input type="text" name="username" lay-verify="required" lay-verType="tips" lay-reqText="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('wicket_page.register_phone_input')); ?>" placeholder="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('wicket_page.register_phone_input')); ?>" autocomplete="off" class="layui-input">
										</div>
<!--									<input type="hidden" id="prefix" name="prefix" value="">-->
<!--										<div class="layui-input-inline text-right" style="width: 60px;"><?php echo lang('wicket_page.login_code'); ?></div>-->
<!--										<div class="layui-input-inline" style="width: 80px;">-->
<!--											<input type="text" name="code" lay-verify="required" lay-verType="tips" lay-reqText="<?php echo lang('wicket_page.login_code'); ?>" placeholder="<?php echo lang('wicket_page.login_code'); ?>" value="" class="layui-input"/>-->
<!--										</div>-->
<!--										<button class="layui-inline layui-btn btn-red" id="btnSendCode"><?php echo fox_all_replace(lang('wicket_page.please_get'),lang('wicket_page.login_code')); ?></button>-->
<!--									</div>-->
									<div class="layui-inline">
										<button class="layui-btn layui-btn-normal" lay-submit lay-filter="phoneSet"><?php echo lang('member.phone_btn'); ?></button>
									</div>
								</form>
							</li>
							<?php endif; ?>
							<li class="layui-row">
								<span class="layui-col-xs4"><i class="layui-icon layui-icon-ok-circle"></i><?php echo lang('member.member_pwd'); ?></span>
								<span class="layui-col-xs6">&nbsp;</span>
								<span class="layui-col-xs2 text-right"><a href="javascript:void(0);" class="color-blue setpass"><?php echo lang('member.member_pwd_set'); ?></a></span>
							</li>
							<li class="layui-row hidebox form-bg" id="setpass">
								<form class="layui-form" action="">
									<div class="layui-inline">
										<label class="layui-form-label"><?php echo lang('member.sepass_opass_txt'); ?></label>
										<div class="layui-input-inline" style="width: 100px;">
										  <input type="password" name="opass" lay-verify="required|pwd" lay-verType="tips" lay-reqText="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('member.sepass_opass_txt')); ?>" autocomplete="off" class="layui-input">
										</div>
									</div>
									<div class="layui-inline">
										<label class="layui-form-label"><?php echo lang('member.sepass_npass_txt'); ?></label>
										<div class="layui-input-inline" style="width: 100px;">
										  <input type="password" name="npass" lay-verify="required|pwd" lay-verType="tips" lay-reqText="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('member.sepass_npass_txt')); ?>" autocomplete="off" class="layui-input">
										</div>
									</div>
									<div class="layui-inline">
										<label class="layui-form-label"><?php echo lang('member.sepass_cpass_txt'); ?></label>
										<div class="layui-input-inline" style="width: 100px;">
										  <input type="password" name="cpass" lay-verify="required|cpwd" lay-verType="tips" lay-reqText="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('member.sepass_cpass_txt')); ?>" autocomplete="off" class="layui-input">
										</div>
									</div>
									<div class="layui-inline">
										<button class="layui-btn layui-btn-normal" lay-submit lay-filter="setPass"><?php echo lang('member.sepass_btn'); ?></button>
									</div>
								</form>
							</li>
							<li class="layui-row">
								<span class="layui-col-xs4"><?php if($paypwd): ?><i class="layui-icon layui-icon-ok-circle"></i><?php else: ?><i class="layui-icon layui-icon-close-fill color-red"></i><?php endif; ?><?php echo lang('member.member_paypwd'); ?></span>
								<span class="layui-col-xs6">&nbsp;</span>
								<?php if($paypwd): ?>
								<span class="layui-col-xs2 text-right"><a href="javascript:void(0);" class="color-blue paypwdedit"><?php echo lang('member.member_paypwd_edit'); ?></a></span>
								<?php else: ?>
								<span class="layui-col-xs2 text-right"><a href="javascript:void(0);" class="color-blue paypwdset"><?php echo lang('member.member_paypwd_set'); ?></a></span>
								<?php endif; ?>
							</li>
							<li class="layui-row hidebox form-bg" id="paypwdset">
								<form class="layui-form" action="">
									<div class="layui-inline">
										<label class="layui-form-label"><?php echo lang('member.paypwd_npass_txt'); ?></label>
										<div class="layui-input-inline" style="width: 100px;">
										  <input type="password" name="paypass" lay-verify="required|pwd" lay-verType="tips" lay-reqText="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('member.paypwd_npass_txt')); ?>" autocomplete="off" class="layui-input">
										</div>
									</div>
									<div class="layui-inline">
										<label class="layui-form-label"><?php echo lang('member.paypwd_cpass_txt'); ?></label>
										<div class="layui-input-inline" style="width: 100px;">
										  <input type="password" name="cpaypass" lay-verify="required|paypwd" lay-verType="tips" lay-reqText="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('member.paypwd_cpass_txt')); ?>" autocomplete="off" class="layui-input">
										</div>
									</div>
									<div class="layui-inline">
										<button class="layui-btn layui-btn-normal" lay-submit lay-filter="paypwdSet"><?php echo lang('member.paypwd_btn'); ?></button>
									</div>
								</form>
							</li>
							<li class="layui-row hidebox form-bg" id="paypwdedit">
								<form class="layui-form" action="">
									<div class="layui-inline">
										<label class="layui-form-label"><?php echo lang('member.paypwd_opass_txt'); ?></label>
										<div class="layui-input-inline" style="width: 100px;">
										  <input type="password" name="opaypass" lay-verify="required|pwd" lay-verType="tips" lay-reqText="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('member.paypwd_opass_txt')); ?>" autocomplete="off" class="layui-input">
										</div>
									</div>
									<div class="layui-inline">
										<label class="layui-form-label"><?php echo lang('member.paypwd_npass_txt'); ?></label>
										<div class="layui-input-inline" style="width: 100px;">
										  <input type="password" name="epaypass" lay-verify="required|pwd" lay-verType="tips" lay-reqText="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('member.paypwd_npass_txt')); ?>" autocomplete="off" class="layui-input">
										</div>
									</div>
									<div class="layui-inline">
										<label class="layui-form-label"><?php echo lang('member.paypwd_cpass_txt'); ?></label>
										<div class="layui-input-inline" style="width: 100px;">
										  <input type="password" name="ecpaypass" lay-verify="required|epaypwd" lay-verType="tips" lay-reqText="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('member.paypwd_cpass_txt')); ?>" autocomplete="off" class="layui-input">
										</div>
									</div>
									<div class="layui-inline">
										<button class="layui-btn layui-btn-normal" lay-submit lay-filter="paypwdEdit"><?php echo lang('member.paypwd_ebtn'); ?></button>
									</div>
								</form>
							</li>
						</ul>
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

<script src="/static/mobile/js/clipboard.min.js?v=<?php echo htmlentities($version); ?>"></script>
<script>
	var codeurl = "<?php echo htmlentities($invite_code_url); ?>";

	function clipBoard(text) {
		const body = document.body;
		const input = document.createElement("input");
		body.append(input);
		input.style.opacity = 0;
		input.value = text;
		input.select();
		input.setSelectionRange(0, input.value.length);
		document.execCommand("Copy");
		input.blur();
		input.remove();
	}
	function copy() {
		$(".hidebox").fadeOut();
		clipBoard(codeurl);
		layer.msg("<?php echo lang('public.copyok'); ?>");
	}
	
	layui.use(['layer', 'jquery', 'form'], function(){
		var layer = layui.layer
		,$ = layui.jquery
		,form = layui.form;

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$(".fa-qrcode").hover(function(){
			$("#invite").fadeIn().siblings(".hidebox").hide();
		})
		$(".setpass").hover(function(){
			$("#setpass").fadeIn().siblings(".hidebox").hide();
		})
		$(".paypwdset").hover(function(){
			$("#paypwdset").fadeIn().siblings(".hidebox").hide();
		})
		$(".paypwdedit").hover(function(){
			$("#paypwdedit").fadeIn().siblings(".hidebox").hide();
		})
		$(".phoneset").hover(function(){
			$("#phoneset").fadeIn().siblings(".hidebox").hide();
		})

		form.on('select(selectPrefix)', function(data){
			$("#prefix").val(data.value);
		}); 

		form.verify({ 
			pwd: [
				/^[\S]{6,12}$/
				, "<?php echo lang('wicket_page.register_password_req'); ?>"
			],
			cpwd: function (value) {
				if ($('input[name=npass]').val() !== value)
					return "<?php echo lang('wicket_page.register_check_pass'); ?>";
			},
			paypwd: function (value) {
				if ($('input[name=paypass]').val() !== value)
					return "<?php echo lang('wicket_page.register_check_pass'); ?>";
			},
			epaypwd: function (value) {
				if ($('input[name=epaypass]').val() !== value)
					return "<?php echo lang('wicket_page.register_check_pass'); ?>";
			}
		})

		form.on('submit(setPass)', function(data){
			if(data.field.opass && data.field.npass && data.field.cpass){
				loading =layer.load(1, {shade: [0.1,'#fff']});
				$.post("<?php echo url('member/setpass'); ?>", data.field, function (res) {
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
		})

		form.on('submit(paypwdSet)', function(data){
			if(data.field.paypass && data.field.cpaypass){
				loading =layer.load(1, {shade: [0.1,'#fff']});
				$.post("<?php echo url('member/setpaypass'); ?>", data.field, function (res) {
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
		})

		form.on('submit(paypwdEdit)', function(data){
			if(data.field.epaypass && data.field.ecpaypass){
				loading =layer.load(1, {shade: [0.1,'#fff']});
				$.post("<?php echo url('member/setpaypass'); ?>", data.field, function (res) {
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
		})

		form.on('submit(phoneSet)', function(data){
			if(data.field.username){
				loading =layer.load(1, {shade: [0.1,'#fff']});
				$.post("<?php echo url('member/setphone'); ?>", data.field, function (res) {
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
		})

		var InterValObj; //timer变量，控制时间
		var count = 60; //间隔函数，1秒执行
		var curCount;//当前剩余秒数
		var btnsend = $("#btnSendCode");
		$('#btnSendCode').on('click', function() {
			var username = $('input[name=username]').val();
			var prefix = $('input[name=prefix]').val();
			if(username.length <= 3){
				var placeholder= $('input[name=username]').attr("placeholder");
				layer.msg(placeholder, {shade: 0.1,time: 1000});
				return false;
			}
			if(!prefix){
				layer.msg("<?php echo lang('send_email.send_prefix_no'); ?>", {shade: 0.1,time: 1000});
				return false;
			}
			if(username.length > 3){
				$.ajax({
					url: "<?php echo url('member/getcodes'); ?>",
					data: {username: username,prefix:prefix},
					type: "POST",
					success: function(res) {
						if (res.code > 0) {
							layer.msg(res.msg, {time: 1800}, function () {
								curCount = count;
								btnsend.addClass('layui-btn-disabled').attr("disabled","true");//设置按钮为禁用状态
								btnsend.text(curCount + " <?php echo lang('wicket_page.code_after'); ?>");
								InterValObj = window.setInterval(SetRemainTime, 1000); // 启动计时器timer处理函数，1秒执行一次
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
					}
				});
			}
			return false;
		});
		window.SetRemainTime = function (){
			if(curCount == 0){
				btnsend.text("<?php echo lang('wicket_page.code_resend'); ?>");
				window.clearInterval(InterValObj);// 停止计时器
				btnsend.removeClass('layui-btn-disabled').attr("disabled",false);
			} else{
				curCount--;
				btnsend.text(curCount + " <?php echo lang('wicket_page.code_after'); ?>");
			}
		}

	})
</script>
</body>
</html>