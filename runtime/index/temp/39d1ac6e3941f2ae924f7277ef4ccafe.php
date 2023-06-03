<?php /*a:7:{s:64:"/www/wwwroot/www.nsdkaqnn.com/app/index/view/member/authset.html";i:1649538518;s:64:"/www/wwwroot/www.nsdkaqnn.com/app/index/view/layout/default.html";i:1627713636;s:68:"/www/wwwroot/www.nsdkaqnn.com/app/index/view/./block/block_head.html";i:1648774108;s:68:"/www/wwwroot/www.nsdkaqnn.com/app/index/view/./block/block_lang.html";i:1626105462;s:69:"/www/wwwroot/www.nsdkaqnn.com/app/index/view/./block/member_left.html";i:1633844294;s:70:"/www/wwwroot/www.nsdkaqnn.com/app/index/view/./block/block_bottom.html";i:1653412340;s:69:"/www/wwwroot/www.nsdkaqnn.com/app/index/view/./block/foot_script.html";i:1626363790;}*/ ?>
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
					<?php if($auth && $auth=='wno'): ?>
					<div class="layui-bg-orange text-center line-36"><?php echo lang('public_memu.member_authset_wno'); ?></div>
					<?php endif; ?>
					<div class="set-form">
						<div class="auth-box">
							<div class="auth-box-item">
								<div class="auth-box-line-a color-blue">
									<?php echo lang('authset.step_1'); ?>
								</div>
							</div>
							<div class="auth-box-item">
								<div class="auth-box-line"></div>
							</div>
							<div class="auth-box-item">
								<div class="auth-box-line-b">
									<i class="fa fa-circle" aria-hidden="true"></i>
								</div>
								<div class="auth-box-line-b color-blue">
									<?php echo lang('authset.step_2'); ?>
								</div>
							</div>
							<div class="auth-box-item">
								<div class="auth-box-line"></div>
							</div>
							<div class="auth-box-item">
								<div class="auth-box-line-b">
									<i class="fa fa-circle" aria-hidden="true"></i>
								</div>
								<div class="auth-box-line-b color-blue">
									<?php if($card['status'] !== 1): ?>
									<?php echo lang('authset.step_3'); else: ?>
									<?php echo lang('authset.step_4'); ?>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<?php if($card['status'] == 2): ?>
						<form class="layui-form" action="">
							<div class="layui-form-item text-center" style="margin-bottom: 40px;">
							<p class="color"><?php echo lang('authset.card_status_2'); ?></p>
							<?php if($card['remark']): ?>
							<p class="color-red"><?php echo html_entity_decode(htmlspecialchars_decode(nl2br($card['remark']))); ?></p>
							<?php endif; ?>
							</div>
							<div class="layui-form-item">
							  <label class="layui-form-label"><?php echo lang('authset.name'); ?>：</label>
							  <div class="layui-input-block">
							    <input type="text" name="name" lay-verify="required" lay-verType="tips" lay-reqText="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('authset.name')); ?>" placeholder="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('authset.name')); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities((isset($card['name']) && ($card['name'] !== '')?$card['name']:'')); ?>">
							  </div>
							</div>
							<div class="layui-form-item">
							  <label class="layui-form-label"><?php echo lang('authset.card'); ?>：</label>
							  <div class="layui-input-block">
							    <input type="text" name="card" lay-verify="required" lay-verType="tips" lay-reqText="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('authset.card')); ?>" placeholder="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('authset.card')); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities((isset($card['card']) && ($card['card'] !== '')?$card['card']:'')); ?>">
							  </div>
							</div>
							<div class="set-code">
								<p><?php echo lang('authset.content'); ?></p>
								<div class="layui-inline " id="card_a_btn">
									<img src="/static/index/img/sf_zm.png" >
									<input type="hidden" id="card_a" name="card_a" value="">
								</div>
								<div class="layui-inline" id="card_b_btn">
									<img src="/static/index/img/sf_fm.png" >
									<input type="hidden" id="card_b" name="card_b" value="">
								</div>
								<div class="layui-inline" id="card_c_btn">
									<img src="/static/index/img/sf_sc.png" >
									<input type="hidden" id="card_c" name="card_c" value="">
								</div>
							</div>
							<div class="layui-form-item set-btn">
								 <button class="layui-btn layui-btn-normal layui-btn-lg" lay-submit lay-filter="setCard"><?php echo lang('authset.form_btn_re'); ?></button>
							</div>
						</form>
						<?php elseif($card['status'] == 0): ?>
						<form class="layui-form" action="">
							<?php if($card['card_a'] && $card['card_b'] && $card['card_c']): ?>
							<div class="layui-form-item text-center">
								<p class="color"><?php echo lang('authset.card_status_0'); ?></p>
							</div>
							<?php else: ?>
							<div class="layui-form-item">
							  <label class="layui-form-label"><?php echo lang('authset.name'); ?>：</label>
							  <div class="layui-input-block">
							    <input type="text" name="name" lay-verify="required" lay-verType="tips" lay-reqText="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('authset.name')); ?>" placeholder="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('authset.name')); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities((isset($card['name']) && ($card['name'] !== '')?$card['name']:'')); ?>">
							  </div>
							</div>
							<div class="layui-form-item">
							  <label class="layui-form-label"><?php echo lang('authset.card'); ?>：</label>
							  <div class="layui-input-block">
							    <input type="text" name="card" lay-verify="required" lay-verType="tips" lay-reqText="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('authset.card')); ?>" placeholder="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('authset.card')); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities((isset($card['card']) && ($card['card'] !== '')?$card['card']:'')); ?>">
							  </div>
							</div>
							<div class="set-code">
								<p><?php echo lang('authset.content'); ?></p>
								<?php if($card['status'] == 2 && $card['remark']): ?>
								<p class="color-red"><?php echo html_entity_decode(htmlspecialchars_decode(nl2br($card['remark']))); ?></p>
								<?php endif; ?>
								<div class="layui-inline " id="card_a_btn">
									<?php if($card['card_a']): ?><img src="<?php echo htmlentities($card['card_a']); ?>" width="128" height="128"><?php else: ?><img src="/static/index/img/sf_zm.png" ><?php endif; ?>
									<input type="hidden" id="card_a" name="card_a" value="">
								</div>
								<div class="layui-inline" id="card_b_btn">
									<?php if($card['card_b']): ?><img src="<?php echo htmlentities($card['card_b']); ?>" width="128" height="128"><?php else: ?><img src="/static/index/img/sf_fm.png" ><?php endif; ?>
									<input type="hidden" id="card_b" name="card_b" value="">
								</div>
								<!--<div class="layui-inline" id="card_c_btn">-->
									<!--<?php if($card['card_c']): ?><img src="<?php echo htmlentities($card['card_c']); ?>" width="128" height="128"><?php else: ?><img src="/static/index/img/sf_sc.png" ><?php endif; ?>-->
									<!--<input type="hidden" id="card_c" name="card_c" value="">-->
								<!--</div>-->
							</div>
							<div class="layui-form-item set-btn">
								 <button class="layui-btn layui-btn-normal layui-btn-lg" lay-submit lay-filter="setCard"><?php echo lang('authset.form_btn'); ?></button>
							</div>
							<?php endif; ?>
						</form>
						<?php elseif($card['status'] == 1): ?>
						<div class="layui-form">
							<div class="layui-form-item text-center">
								<p class="color"><?php echo lang('authset.card_status_1'); ?></p>
							</div>
						</div>
						<?php endif; ?>
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


<script>
	layui.use(['layer', 'jquery', 'form', 'upload'], function(){
		var layer = layui.layer
		,$ = layui.jquery
		,form = layui.form;
		var upload = layui.upload;

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		upload.render({
			elem: '#card_a_btn'
			,url: "<?php echo url('member/upload_card'); ?>"
			,exts: 'jpg|png|jpeg',
			before: function(obj){
				obj.preview(function(index, file, result){
					$('#card_a_btn').find('img').attr('src',result);
					$('#card_a_btn').find('img').css({'width':'128px','height':'128px'});
				});
			},
			done: function(res){
				if(res.code !== 0){
                    return layer.msg(res.msg);
                }
                //上传成功
                if(res.data.url){
                    $('#card_a').val(res.data.src);
                    layer.msg(res.msg);
                }
			}
		});

		upload.render({
			elem: '#card_b_btn'
			,url: "<?php echo url('member/upload_card'); ?>"
			,exts: 'jpg|png|jpeg',
			before: function(obj){
				obj.preview(function(index, file, result){
					$('#card_b_btn').find('img').attr('src',result);
					$('#card_b_btn').find('img').css({'width':'128px','height':'128px'});
				});
			},
			done: function(res){
				if(res.code !== 0){
                    return layer.msg(res.msg);
                }
                //上传成功
                if(res.data.url){
                    $('#card_b').val(res.data.src);
                    layer.msg(res.msg);
                }
			}
		});

		upload.render({
			elem: '#card_c_btn'
			,url: "<?php echo url('member/upload_card'); ?>"
			,exts: 'jpg|png|jpeg',
			before: function(obj){
				obj.preview(function(index, file, result){
					$('#card_c_btn').find('img').attr('src',result);
					$('#card_c_btn').find('img').css({'width':'128px','height':'128px'});
				});
			},
			done: function(res){
				if(res.code !== 0){
                    return layer.msg(res.msg);
                }
                //上传成功
                if(res.data.url){
                    $('#card_c').val(res.data.src);
                    layer.msg(res.msg);
                }
			}
		});

		form.on('submit(setCard)', function(data){
			if(!data.field.card_a){
				$('#card_a_btn').find('img').css({'border':'1px solid #ff6600'});
				layer.msg("<?php echo lang('authset.please_upload'); ?>", {time: 1000});
				return false;
			}else{
				$('#card_a_btn').find('img').css({'border':'1px solid #e2e2e2'});
			}
			if(!data.field.card_b){
				$('#card_b_btn').find('img').css({'border':'1px solid #ff6600'});
				layer.msg("<?php echo lang('authset.please_upload'); ?>", {time: 1000});
				return false;
			}else{
				$('#card_a_btn').find('img').css({'border':'1px solid #e2e2e2'});
			}
			// if(!data.field.card_c){
			// 	$('#card_c_btn').find('img').css({'border':'1px solid #ff6600'});
			// 	layer.msg("<?php echo lang('authset.please_upload'); ?>", {time: 1000});
			// 	return false;
			// }else{
			// 	$('#card_a_btn').find('img').css({'border':'1px solid #e2e2e2'});
			// }
			if(data.field.name && data.field.card){
				loading =layer.load(1, {shade: [0.1,'#fff']});
				$.post("", data.field, function (res) {
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
		$(".showthis").click(function(){
			var img = $(this).find('img').attr('src');
			var div = '<div><img src="'+img+'" width="100%" height="100%"></div>';
			var index = layer.open({
				type: 1,
				title: false,
				area: ['90%', '90%'],
				skin: 'layui-layer-rim',
				content: div,
			});
			// layer.full(index);
		})
	})
</script>
</body>
</html>