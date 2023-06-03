<?php /*a:4:{s:66:"/www/wwwroot/www.nsdkaqnn.com/app/mobile/view/wicket/register.html";i:1655146059;s:65:"/www/wwwroot/www.nsdkaqnn.com/app/mobile/view/layout/default.html";i:1630206160;s:70:"/www/wwwroot/www.nsdkaqnn.com/app/mobile/view/./block/mobile_lang.html";i:1629906308;s:70:"/www/wwwroot/www.nsdkaqnn.com/app/mobile/view/./block/foot_script.html";i:1639227710;}*/ ?>
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
 * @Date: 2021-07-06 23:24:23
 * @LastEditTime: 2021-08-26 17:17:29
 * @Description: Forward, no stop
-->
<style type="text/css">
input::-ms-input-placeholder{text-align: center;}
input::-webkit-input-placeholder{ transform: translate(0, 11%);
  -webkit-transform: translate(0, 11%);}
</style>
<div class="header">
    <ul class="layui-nav">
      <li class="layui-nav-item"><a style="padding-left: 0px;" href="javascript:window.history.go(-1);"><i class="layui-icon layui-icon-left" style="font-size: 18px;"></i></a></li>
      <li class="layui-nav-item float-right">
        <!--
 * @Author: Fox Blue
 * @Date: 2021-08-17 22:32:47
 * @LastEditTime: 2021-08-25 23:45:09
 * @Description: Forward, no stop
-->
<a class="link-b" href="javascript:;"><img src="/static/mobile/imgn/earth.png" class="mr-10" style="width: 20px !important;"><?php echo lang('lang'); ?></a>
<dl class="layui-nav-child">
    <?php if(is_array($langlist) || $langlist instanceof \think\Collection || $langlist instanceof \think\Paginator): $k = 0; $__LIST__ = $langlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if(in_array($key, $allow_lang_list)): ?>
    <dd><a href="javascript:void(0);" onClick="changelang('<?php echo htmlentities($key); ?>')"><img src="<?php echo htmlentities($lang_img[lang($key)]); ?>" class="lang-img mr-10"><?php echo htmlentities($vo); ?></a></dd>
    <?php endif; ?>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</dl>
      </li>
    </ul>
</div>
<div class="login-bg">
	<div class="login-box">
		<div class="login-logo">
			<a href="<?php echo url('/mobile/index'); ?>"><img style="width:300px;height: 200px" src="<?php echo sysconfig('site','logo_image'); ?>" ></a>
		</div>
		<div class="wicket-btn-box" id="wicket-btn-box">
			<div class="layui-row wicket-list">
				<?php if(sysconfig('base','member_register') == 'phone' ||  sysconfig('base','member_register') == 'all'): ?>
				<div class="layui-col-xs6 wicket-btn" onclick="select_me(this,'phone');" data-type="phone" data-txt="<?php echo lang('wicket_page.login_phone'); ?>" data-tips="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('wicket_page.login_phone')); ?>" data-hoder="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('wicket_page.login_phone')); ?>"><?php echo lang('wicket_page.txt_phone'); ?></div>
				<?php endif; if(sysconfig('base','member_register') == 'email' ||  sysconfig('base','member_register') == 'all'): ?>
				<div class="layui-col-xs6 wicket-btn" onclick="select_me(this,'email');" data-type="email" data-txt="<?php echo lang('wicket_page.login_email'); ?>" data-tips="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('wicket_page.login_email')); ?>" data-hoder="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('wicket_page.login_email')); ?>"><?php echo lang('wicket_page.txt_email'); ?></div>
				<?php endif; ?>
			</div>
		</div>
		<form class="layui-form" action="">
			<div class="layui-form-item">
				<h5 id="username_txt"></h5>
				<div class="float-left left-input-box hidebox">
					<select lay-filter="selectPrefix" lay-search="" lay-verType="tips" lay-reqText="<?php echo lang('wicket_page.register_prefix'); ?>">
					  <option value=""><?php echo lang('wicket_page.register_prefix'); ?></option>
					  <?php if(is_array($prefix_code) || $prefix_code instanceof \think\Collection || $prefix_code instanceof \think\Paginator): $i = 0; $__LIST__ = $prefix_code;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					  <option value="<?php echo htmlentities($vo['prefix']); ?>"><?php if(strstr($lang, 'cn')): ?><?php echo htmlentities($vo['cn']); else: ?><?php echo htmlentities($vo['en']); ?><?php endif; ?></option>
					  <?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</div>
				<div class="float-left right-input-box">
					<input type="text" id="username" name="username" lay-verify="required" lay-verType="tips" lay-reqText="" placeholder="" value="" class="layui-input" autocomplete="off"/>
				</div>
			</div>
			<input type="hidden" id="prefix" name="prefix" value="">
			<div class="layui-form-item position-re">
				<h5><?php echo lang('wicket_page.login_code'); ?></h5>
				<input type="text" name="code" lay-verify="required" lay-verType="tips" lay-reqText="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('wicket_page.login_code')); ?>" placeholder="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('wicket_page.login_code')); ?>" value="" class="layui-input"/>
				<button class="v-send btn-xxx" id="btnSendCode"><?php echo fox_all_replace(lang('wicket_page.please_get'),lang('wicket_page.login_code')); ?></button>
			</div>
			<div class="layui-form-item">
				<h5><?php echo lang('wicket_page.login_pass'); ?></h5>
				<input type="password" name="password" lay-verify="required|pwd" lay-verType="tips" lay-reqText="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('wicket_page.login_pass')); ?>" placeholder="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('wicket_page.login_pass')); ?>" value="" class="layui-input"/>
			</div>
			<div class="layui-form-item">
				<h5><?php echo lang('wicket_page.login_compass'); ?></h5>
				<input type="password" name="compassword" lay-verify="required|compassword" lay-verType="tips" lay-reqText="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('wicket_page.login_compass')); ?>" placeholder="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('wicket_page.login_compass')); ?>" value="" class="layui-input"/>
			</div>
			<div class="layui-form-item" style="display: block">
				<h5><?php echo lang('wicket_page.login_incode'); ?></h5>
			<input type="text" name="incode"  lay-verType="tips" lay-reqText="<?php echo fox_all_replace(lang('wicket_page.login_incode')); ?>" placeholder="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('wicket_page.login_incode')); ?>" value="<?php echo htmlentities($incode); ?>" class="layui-input"/>
			</div>
			<div class="layui-form-item agree">
				<input type="checkbox" name="agree" title="<?php echo lang('wicket_page.register_agree'); ?>" lay-skin="primary" checked><a class="link-b" href="<?php echo url('show/news',['id'=>14]); ?>"><?php echo lang('wicket_page.register_agree_look'); ?></a>
			</div>
			<div class="login-btn">
				<button class="layui-btn layui-btn-normal btn-xxx btn-xr-6 font-18" lay-submit lay-filter="checkRegister"><?php echo lang('wicket_page.register_btn'); ?></button>
				
			</div>
		</form>
		<div class="login-phone">
			<p><a href="<?php echo url('wicket/login'); ?>" class="link-b"><?php echo lang('wicket_page.login_yes'); ?></a></p>
			<?php if(sysconfig('base','member_register') !== 'phone'): ?>
			<p class="cont-email hidebox"><?php echo lang('wicket_page.notice_email'); ?></p>
			<?php endif; if(sysconfig('base','member_register') !== 'email'): ?>
			<p class="cont-phone hidebox"><?php echo lang('wicket_page.register_prefix_tip'); ?></p>
			<?php endif; ?>			
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

<script src="/static/index/js/index/wicket.js?v=<?php echo htmlentities($version); ?>"></script>
<script>
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
		pwd: [
            /^[\S]{6,12}$/
            , "<?php echo lang('wicket_page.register_password_req'); ?>"
        ],
		compassword: function (value) {
            if ($('input[name=password]').val() !== value)
                return "<?php echo lang('wicket_page.register_check_pass'); ?>";
        }
    })

	form.on('select(selectPrefix)', function(data){
		$("#prefix").val(data.value);
	}); 

	form.on('submit(checkRegister)', function(data){
        if(data.field.username && data.field.code && data.field.password && data.field.compassword){
			loading =layer.load(1, {shade: [0.1,'#fff']});
			$.post("", data.field, function (res) {
				layer.close(loading);
				if (res.code > 0) {
					layer.msg(res.msg, {time: 1800}, function () {
						location.href = res.url;
					});
				} else {
					layer.msg(res.msg, {time: 1800});
				}
			});
		}else{
			layer.msg("<?php echo lang('wicket_page.Validate_require_no'); ?>");
		}
		return false;
    });
    
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
		if(username.length > 3){
			$.ajax({
				url: "<?php echo url('wicket/getcode'); ?>",
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
						layer.msg(res.msg, {time: 1800});
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
function select_me(_this,type)
{
	$("#wicket-btn-box").find(".wicket-btn").removeClass("btn-this");
	$(_this).addClass("btn-this");
	var txt = $(_this).data("txt")
	var tips = $(_this).data("tips")
	var holder = $(_this).data("hoder")
	$("#username_txt").html(txt);
	$("#username").attr("lay-reqText",tips);
	$("#username").attr("placeholder",holder);
	if(type == "phone"){
		$(".left-input-box").addClass("float-left layui-input-40").show();
		$(".right-input-box").addClass("float-left layui-input-60").show();
		$(".cont-phone").show();
		$(".cont-email").hide();
	}else{
		$(".left-input-box").removeClass("float-left layui-input-40").hide();
		$(".right-input-box").removeClass("float-left layui-input-60").show();
		$(".cont-phone").hide();
		$(".cont-email").show();
	}
}
$(function(){
	var txt = $("#wicket-btn-box").find(".wicket-btn").eq(0).data("txt")
	var tips = $("#wicket-btn-box").find(".wicket-btn").eq(0).data("tips")
	var holder = $("#wicket-btn-box").find(".wicket-btn").eq(0).data("hoder")
	var type = $("#wicket-btn-box").find(".wicket-btn").eq(0).data("type")
	$("#wicket-btn-box").find(".wicket-btn").eq(0).addClass("btn-this");
	$("#username_txt").html(txt);
	$("#username").attr("lay-reqText",tips);
	$("#username").attr("placeholder",holder);
	if(type == "phone"){
		$(".left-input-box").addClass("layui-input-40").show();
		$(".right-input-box").addClass("layui-input-60").show();
		$(".cont-phone").show();
		$(".cont-email").hide();
	}
	if(type == "email"){
		$(".cont-phone").hide();
		$(".cont-email").show();
	}
})
</script>

</body>
</html>