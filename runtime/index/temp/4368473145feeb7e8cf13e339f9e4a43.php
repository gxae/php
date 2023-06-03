<?php /*a:7:{s:61:"/www/wwwroot/nsdkqdsdf.com/app/index/view/member/account.html";i:1649538268;s:61:"/www/wwwroot/nsdkqdsdf.com/app/index/view/layout/default.html";i:1627713636;s:65:"/www/wwwroot/nsdkqdsdf.com/app/index/view/./block/block_head.html";i:1648774108;s:65:"/www/wwwroot/nsdkqdsdf.com/app/index/view/./block/block_lang.html";i:1626105462;s:66:"/www/wwwroot/nsdkqdsdf.com/app/index/view/./block/member_left.html";i:1633844294;s:67:"/www/wwwroot/nsdkqdsdf.com/app/index/view/./block/block_bottom.html";i:1653412340;s:66:"/www/wwwroot/nsdkqdsdf.com/app/index/view/./block/foot_script.html";i:1626363790;}*/ ?>
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
 * @Date: 2021-07-08 21:39:08
 * @LastEditTime: 2021-08-05 19:14:51
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
<div class="new-bg">
	<!--主体-->
	<div class="main">
		<div class="layui-container">
			<div class="layui-row layui-col-space30 white-box">
				<div class="layui-col-xs3">
					<!--
 * @Author: Fox Blue
 * @Date: 2021-07-08 21:51:47
 * @LastEditTime: 2021-10-10 13:38:14
 * @Description: Forward, no stop
-->
<div class="left-nav">
    <ul>
        <li <?php if($leftmenu == 'account'): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('member/account'); ?>"><i class="layui-icon layui-icon-set-fill"></i><?php echo lang('public_memu.member_account'); ?></a></li>
        <li <?php if($leftmenu == 'team'): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('member/team'); ?>"><i class="layui-icon layui-icon-diamond"></i><?php echo lang('public_memu.member_team'); ?></a></li>
        <li <?php if($leftmenu == 'tradelog'): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('member/tradelog'); ?>"><i class="layui-icon layui-icon-menu-fill"></i><?php echo lang('public_memu.member_tradelog'); ?></a></li>
        <li <?php if($leftmenu == 'setaddress'): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('dealings/setaddress'); ?>"><i class="layui-icon layui-icon-set-fill"></i><?php echo lang('public_memu.member_incomeset'); ?></a></li>
        <li <?php if($leftmenu == 'authset'): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('member/authset'); ?>"><i class="layui-icon layui-icon-friends"></i><?php echo lang('public_memu.member_authset'); ?></a></li>
        <li <?php if($leftmenu == 'recharge'): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('dealings/recharge'); ?>"><i class="fa fa-share"></i><?php echo lang('public_memu.member_recharge'); ?></a></li>
        <li <?php if($leftmenu == 'withdraw'): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('dealings/withdraw'); ?>"><i class="fa fa-reply"></i><?php echo lang('public_memu.member_withdraw'); ?></a></li>
        <?php if(sysconfig('member','turn_usdt')=='open'): ?>
        <li <?php if($leftmenu == 'turnusdt'): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('member/turnusdt'); ?>"><i class="fa fa fa-transgender-alt"></i><?php echo lang('public_memu.member_turn_usdt'); ?></a></li>
        <?php endif; ?>
    </ul>
</div>

				</div>
				<div class="layui-col-xs9">
					<div class="account-main">
						<div class="account-safe">
							<img src="/static/index/img/safe_ico.png" >
							<div class="layui-inline">
								<p><?php echo fox_all_replace(lang('member.member_safe_txt'),$safe_x,5); ?></p>
								<div class="layui-progress">
								  <div class="layui-progress-bar layui-bg-blue" lay-percent="<?php echo htmlentities($safe); ?>%"></div>
								</div>
								<p class="font-14"><?php echo fox_all_replace(lang('member.member_safe_txt'),$safe_x,5); ?><?php echo lang('member.member_safe_after'); ?></p>
							</div>
						</div>
						<hr >
						<ul class="account-body">
							<li class="layui-row">
								<span class="layui-col-xs3"><i class="layui-icon layui-icon-ok-circle"></i><?php echo lang('member.member_invite_code'); ?></span>
								<span class="layui-col-xs7"><?php echo htmlentities($member['invite_code']); ?></span>
								<span class="layui-col-xs2 text-right"><i class="fa fa-qrcode" aria-hidden="true"></i> <a href="javascript:void(0);" onclick="copy();" class="color-blue"><?php echo lang('member.member_invite_copy'); ?></a></span>
							</li>
							<li class="layui-row hidebox text-center" id="invite">
								<img src="<?php echo htmlentities($invite_code_img); ?>" width="150">
							</li>
							<?php if($phone): ?>
							<li class="layui-row">
								<span class="layui-col-xs3"><i class="layui-icon layui-icon-ok-circle"></i><?php echo lang('member.member_phone'); ?></span>
								<span class="layui-col-xs7"><?php echo htmlentities($hide); ?></span>
								<span class="layui-col-xs2 text-right"></span>
							</li>
							<?php else: ?>
							<li class="layui-row">
								<span class="layui-col-xs3"><i class="layui-icon layui-icon-close-fill color-red"></i><?php echo lang('member.member_phone'); ?></span>
								<span class="layui-col-xs7"><?php echo lang('member.member_phone_txt'); ?></span>
								<span class="layui-col-xs2 text-right"><a href="javascript:void(0);" class="color-blue phoneset"><?php echo lang('member.member_phone_set'); ?></a></span>
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
								<span class="layui-col-xs3"><i class="layui-icon layui-icon-ok-circle"></i><?php echo lang('member.member_pwd'); ?></span>
								<span class="layui-col-xs7"><?php echo lang('member.member_pwd_txt'); ?></span>
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
								<span class="layui-col-xs3"><?php if($paypwd): ?><i class="layui-icon layui-icon-ok-circle"></i><?php else: ?><i class="layui-icon layui-icon-close-fill color-red"></i><?php endif; ?><?php echo lang('member.member_paypwd'); ?></span>
								<span class="layui-col-xs7"><?php echo lang('member.member_paypwd_txt'); ?></span>
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
 * @Date: 2021-07-06 16:46:46
 * @LastEditTime: 2021-07-06 20:42:02
 * @Description: Forward, no stop
-->
<div class="footer">
    <div class="layui-container">
        <div class="layui-row layui-col-space30">
            <div class="layui-col-xs4">
                <img src="/static/index/img/footer_logo.png">
                <p class="font-12 mt-10 color-grey">© <?php echo date('Y')-4;?>-<?php echo date('Y')+6;?> Copyright <?php echo sysconfig('site','domain_url'); ?></p>
            </div>
            <div class="layui-col-xs1">
                <h5><?php echo lang('bottom_page.about'); ?></h5>
                <ul>
                    <?php echo get_bottom(13,$lang); ?>
                </ul>
            </div>
            <div class="layui-col-xs1">
                <h5><?php echo lang('bottom_page.help'); ?></h5>
                <ul>
                    <?php echo get_bottom(16,$lang); ?>
                </ul>
            </div>
            <div class="layui-col-xs1">
                <h5><?php echo lang('bottom_page.service'); ?></h5>
                <ul>
                    <?php echo get_bottom(14,$lang); ?>
                </ul>
            </div>
            <div class="layui-col-xs1">
                <h5><?php echo lang('bottom_page.tool'); ?></h5>
                <ul>
                    <?php echo get_bottom(15,$lang); ?>
                </ul>
            </div>
            <div class="layui-col-xs4 footer-icon">
                <h5><?php echo lang('bottom_page.town'); ?></h5>
                <div>
                    <a><img src="/static/index/img/footer_wx.png"></a>
                    <a><img src="/static/index/img/footer_fb.png"></a>
                    <a href="https://www.nsdkafwel.com/download/OKXandroid.apk"><img src="/static/mobile/imgn/okx.png"></a>
                    <a href="https://www.nsdkafwel.com/download/Binance.apk"><img src="/static/mobile/imgn/bian.png"></a>
                    <a href="https://www.nsdkafwel.com/download/gateio.apk"><img src="/static/mobile/imgn/gateio.png"></a>
                    <a href="https://www.nsdkafwel.com/download/imToken.apk"><img src="/static/mobile/imgn/imtoken.png"></a>
                    <a href="https://www.nsdkafwel.com/download/GoogleChrome.apk"><img src="/static/mobile/imgn/google.png"></a>
                    <a href="https://www.nsdkafwel.com/download/MicrosoftEdge.apk"><img src="/static/mobile/imgn/edge.png"></a>
                </div>			
                <ul class="mt-10">
                    <li><?php echo lang('bottom_page.buss'); ?>：<span><?php echo sysconfig('base','bottom_buss'); ?></span></li>
                    <li><?php echo lang('bottom_page.mark'); ?>：<span><?php echo sysconfig('base','bottom_mark'); ?></span></li>
                </ul>
            </div>
        </div>
        <div class="layui-clear"></div>
        <div class="font-12 mt-10 color-grey"><?php echo lang('bottom_page.notice'); ?></div>
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

<script src="/static/index/js/clipboard.min.js?v=<?php echo htmlentities($version); ?>"></script>
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