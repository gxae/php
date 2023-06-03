<?php /*a:5:{s:60:"/www/wwwroot/61.4.114.53/app/index/view/wicket/register.html";i:1655143754;s:59:"/www/wwwroot/61.4.114.53/app/index/view/layout/default.html";i:1627713636;s:63:"/www/wwwroot/61.4.114.53/app/index/view/./block/block_head.html";i:1648774108;s:63:"/www/wwwroot/61.4.114.53/app/index/view/./block/block_lang.html";i:1626105462;s:64:"/www/wwwroot/61.4.114.53/app/index/view/./block/foot_script.html";i:1626363790;}*/ ?>
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
<!--
 * @Author: Fox Blue
 * @Date: 2021-07-06 23:24:23
 * @LastEditTime: 2021-08-26 17:55:33
 * @Description: Forward, no stop
-->
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
<div class="login-bg">
	<div class="login-box">
		<form class="layui-form" action="">
			<div class="layui-form-item">
				<div class="wicket-btn-box" id="wicket-btn-box">
					<div class="layui-row wicket-list">
						<?php if(sysconfig('base','member_register') == 'phone' ||  sysconfig('base','member_register') == 'all'): ?>
						<div class="layui-col-xs6 wicket-btn" onclick="select_me(this,'phone');" data-type="phone" data-txt="<?php echo lang('wicket_page.login_phone'); ?>" data-tips="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('wicket_page.login_phone')); ?>" data-hoder="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('wicket_page.login_phone')); ?>"><?php echo lang('wicket_page.txt_phone'); ?></div>
						<?php endif; if(sysconfig('base','member_register') == 'email' ||  sysconfig('base','member_register') == 'all'): ?>
						<div class="layui-col-xs6 wicket-btn" onclick="select_me(this,'email');" data-type="email" data-txt="<?php echo lang('wicket_page.login_email'); ?>" data-tips="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('wicket_page.login_email')); ?>" data-hoder="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('wicket_page.login_email')); ?>"><?php echo lang('wicket_page.txt_email'); ?></div>
						<?php endif; ?>
					</div>
				</div>
			</div>
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
				<button class="v-send color-blue" id="btnSendCode"><?php echo fox_all_replace(lang('wicket_page.please_get'),lang('wicket_page.login_code')); ?></button>
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
				<input type="text" name="incode" lay-verType="tips" lay-reqText="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('wicket_page.login_incode')); ?>" placeholder="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('wicket_page.login_incode')); ?>" value="<?php echo htmlentities($incode); ?>" class="layui-input"/>
			</div>
			<div class="layui-form-item agree">
				<input type="checkbox" name="agree" title="<?php echo lang('wicket_page.register_agree'); ?>" lay-skin="primary" checked><a target="_blank" href="<?php echo url('show/news',['id'=>14]); ?>"><?php echo lang('wicket_page.register_agree_look'); ?></a>
			</div>
			<div class="login-btn">
				<button class="layui-btn layui-btn-normal" lay-submit lay-filter="checkRegister"><?php echo lang('wicket_page.register_btn'); ?></button>
				<a href="<?php echo url('wicket/login'); ?>" class="color-blue"><?php echo lang('wicket_page.login_yes'); ?></a>
			</div>
		</form>
		<div class="login-ex">
			<?php if(sysconfig('base','member_register') !== 'phone'): ?>
			<p class="cont-email hidebox"><?php echo lang('wicket_page.notice_email'); ?></p>
			<?php endif; ?>			
		</div>
		<div class="login-phone">
			<?php if(sysconfig('base','member_register') !== 'email'): ?>
			<p class="cont-phone hidebox"><?php echo lang('wicket_page.register_prefix_tip'); ?></p>
			<?php endif; ?>			
		</div>
	</div>
</div>
<!--footer-->
<!--
 * @Author: Fox Blue
 * @Date: 2021-07-01 18:58:10
 * @LastEditTime: 2021-07-15 23:43:10
 * @Description: Forward, no stop
-->
<script src="/static/index/js/script.js?v=<?php echo htmlentities($version); ?>"></script>
<script src="/static/index/js/clipboard.min.js?v=<?php echo htmlentities($version); ?>"></script>

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