<?php /*a:6:{s:64:"/www/wwwroot/nsdkqdsdf.com/app/index/view/dealings/recharge.html";i:1634189500;s:61:"/www/wwwroot/nsdkqdsdf.com/app/index/view/layout/default.html";i:1627713636;s:65:"/www/wwwroot/nsdkqdsdf.com/app/index/view/./block/block_head.html";i:1648774108;s:65:"/www/wwwroot/nsdkqdsdf.com/app/index/view/./block/block_lang.html";i:1626105462;s:66:"/www/wwwroot/nsdkqdsdf.com/app/index/view/./block/member_left.html";i:1633844294;s:66:"/www/wwwroot/nsdkqdsdf.com/app/index/view/./block/foot_script.html";i:1626363790;}*/ ?>
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
					<div class="dealings-top-left mt-30 dealings-bg" id="kline_lists_box">
						<div>
							<?php if(is_array($pro) || $pro instanceof \think\Collection || $pro instanceof \think\Paginator): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<a class="layui-btn layui-btn-sm <?php if($coin_id ==$vo['id']): ?>layui-btn-normal<?php else: ?>layui-btn-primary<?php endif; ?>" href="<?php echo url('dealings/recharge',['coin_id'=>$vo['id']]); ?>"><?php echo htmlentities($vo['title']); ?></a>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
					<?php if($found_keys == 0): ?>
					<div class="v-charge-head kline_coin_left">
						<div class="head-item bg-theme mt-30 color-red">
							<?php echo lang('dealings.no_recharge_title'); ?>
						</div>
					</div>
					<?php endif; ?>
					<div class="layui-row white-box">
						<div class="layui-col-xs12">
							<div class="a-form">
								<form class="layui-form" action="">
									<input type="hidden" name="wallet_id" value="<?php echo htmlentities($wlist['id']); ?>">
									<input type="hidden" name="product_id" value="<?php echo htmlentities($plist['id']); ?>">
									<div class="layui-tab usdt-tab layui-tab-brief" lay-filter="tabRecharge" id="tabRecharge">
										<ul class="layui-tab-title mobile-layui-tab-titles">
											<?php if(!empty($plist['erc_address'])): ?><li lay-id="3"><?php echo lang('dealings.erc_title'); ?></li><?php endif; if(!empty($plist['trc_address'])): ?><li lay-id="2"><?php echo lang('dealings.trc_title'); ?></li><?php endif; if(!empty($plist['omni_address'])): ?><li lay-id="1"><?php echo lang('dealings.omni_title'); ?></li><?php endif; if(!empty($plist['pay_address'])): ?><li lay-id="4"><?php echo lang('dealings.other_title'); ?></li><?php endif; ?>
										</ul>
										<div class="layui-tab-content layui-tab-contents">
											<?php if(!empty($plist['erc_address'])): ?>
											<div class="layui-tab-item">
												<div class="layui-form-item">
													<div class="text-center">
														<img src='<?php echo phpqrcode($plist['erc_address'],$plist['title']."_address"); ?>'>
													</div>
													<div class="text-center">
														<?php echo lang('dealings.recharge_ma_txt'); ?>
													</div>
													<div class="text-center">
														<a href="javascript:void(0)" class="color-green" onclick="savepic(this)"><?php echo lang('dealings.recharge_ma_save'); ?></a>
													</div>
												</div>
												<hr>
												<div class="layui-form-item" style="margin-bottom: 0;">
													<div class="layui-row" style="line-height:36px">
														<div class="layui-col-xs3">
															<?php echo lang('dealings.recharge_addr_title'); ?>
														</div>
														<div class="layui-col-xs7">
															<input type="text" name="erc_address" placeholder="<?php echo htmlentities($plist['title']); ?><?php echo lang('dealings.recharge_addr_title'); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($plist['erc_address']); ?>">
														</div>
														<div class="layui-col-xs2 text-right">
															<button type="button" onclick='copy("<?php echo htmlentities($plist['erc_address']); ?>");' class="layui-btn layui-btn-sm layui-btn-normal"><?php echo lang('public.copy'); ?></button>
														</div>
													</div>
												</div>
											</div>
											<?php endif; if(!empty($plist['trc_address'])): ?>
											<div class="layui-tab-item">
												<div class="layui-form-item">
													<div class="text-center">
														<img src='<?php echo phpqrcode($plist['trc_address'],$plist['title']."_address"); ?>'>
													</div>
													<div class="text-center">
														<?php echo lang('dealings.recharge_ma_txt'); ?>
													</div>
													<div class="text-center">
														<a href="javascript:void(0)" class="color-green" onclick="savepic(this)"><?php echo lang('dealings.recharge_ma_save'); ?></a>
													</div>
												</div>
												<hr>
												<div class="layui-form-item" style="margin-bottom: 0;">
													<div class="layui-row" style="line-height:36px">
														<div class="layui-col-xs3">
															<?php echo lang('dealings.recharge_addr_title'); ?>
														</div>
														<div class="layui-col-xs7">
															<input type="text" name="trc_address" placeholder="<?php echo htmlentities($plist['title']); ?><?php echo lang('dealings.recharge_addr_title'); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($plist['trc_address']); ?>">
														</div>
														<div class="layui-col-xs2 text-right">
															<button type="button" onclick='copy("<?php echo htmlentities($plist['trc_address']); ?>");' class="layui-btn layui-btn-sm layui-btn-normal"><?php echo lang('public.copy'); ?></button>
														</div>
													</div>
												</div>
											</div>
											<?php endif; if(!empty($plist['omni_address'])): ?>
											<div class="layui-tab-item">
												<div class="layui-form-item">
													<div class="text-center">
														<img src='<?php echo phpqrcode($plist['omni_address'],$plist['title']."_address"); ?>'>
													</div>
													<div class="text-center">
														<?php echo lang('dealings.recharge_ma_txt'); ?>
													</div>
													<div class="text-center">
														<a href="javascript:void(0)" class="color-green" onclick="savepic(this)"><?php echo lang('dealings.recharge_ma_save'); ?></a>
													</div>
												</div>
												<hr>
												<div class="layui-form-item" style="margin-bottom: 0;">
													<div class="layui-row" style="line-height:36px">
														<div class="layui-col-xs3">
															<?php echo lang('dealings.recharge_addr_title'); ?>
														</div>
														<div class="layui-col-xs7">
															<input type="text" name="omni_address" placeholder="<?php echo htmlentities($plist['title']); ?><?php echo lang('dealings.recharge_addr_title'); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($plist['omni_address']); ?>">
														</div>
														<div class="layui-col-xs2 text-right">
															<button type="button" onclick='copy("<?php echo htmlentities($plist['omni_address']); ?>");' class="layui-btn layui-btn-sm layui-btn-normal"><?php echo lang('public.copy'); ?></button>
														</div>
													</div>
												</div>
											</div>
											<?php endif; if(!empty($plist['pay_address'])): ?>
											<div class="layui-tab-item">
												<div class="layui-form-item">
													<div class="text-center">
														<img src='<?php echo phpqrcode($plist['pay_address'],$plist['title']."_address"); ?>'>
													</div>
													<div class="text-center">
														<?php echo lang('dealings.recharge_ma_txt'); ?>
													</div>
													<div class="text-center">
														<a href="javascript:void(0)" class="color-green" onclick="savepic(this)"><?php echo lang('dealings.recharge_ma_save'); ?></a>
													</div>
												</div>
												<hr>
												<div class="layui-form-item" style="margin-bottom: 0;">
													<div class="layui-row" style="line-height:36px">
														<div class="layui-col-xs3">
															<?php echo lang('dealings.recharge_addr_title'); ?>
														</div>
														<div class="layui-col-xs7">
															<input type="text" name="pay_address" placeholder="<?php echo htmlentities($plist['title']); ?><?php echo lang('dealings.recharge_addr_title'); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($plist['pay_address']); ?>">
														</div>
														<div class="layui-col-xs2 text-right">
															<button type="button" onclick='copy("<?php echo htmlentities($plist['pay_address']); ?>");' class="layui-btn layui-btn-sm layui-btn-normal"><?php echo lang('public.copy'); ?></button>
														</div>
													</div>
												</div>
											</div>
											<?php endif; ?>
										</div>
									</div>
									<input type="hidden" id="usdt_recharge_type" name="usdt_recharge_type" value="3">
									<div class="layui-form-item">
										<div class="layui-row" style="line-height:36px">
											<div class="layui-col-xs3"><?php echo htmlentities($plist['title']); ?><?php echo lang('finance.recharge_num'); ?></div>
											<div class="layui-col-xs7">
												<input type="text" name="recharge_account" lay-verify="required|recharge" lay-verType="tips" lay-reqText="<?php echo lang('finance.recharge_num_must'); ?>" placeholder="<?php echo htmlentities($plist['title']); ?><?php echo lang('finance.recharge_num'); ?>" autocomplete="off" class="layui-input">
											</div>
										</div>
									</div>
									<div class="layui-form-item">
										<div class="layui-row" style="line-height:34px">
											<div class="layui-col-xs3"><?php echo htmlentities($plist['title']); ?><?php echo lang('finance.recharge_pic'); ?></div>
											<div class="layui-col-xs7 up-pic-box">
											<input type="text" name="recharge_pic" readonly lay-verify="required" lay-verType="tips" lay-reqText="<?php echo lang('finance.recharge_pic_must'); ?>" placeholder="<?php echo htmlentities($plist['title']); ?><?php echo lang('finance.recharge_pic'); ?>" autocomplete="off" class="layui-input">
										</div>
										<div class="layui-col-xs2">
										<button type="button" class="layui-btn layui-btn-fluid layui-btn-warm up-pic" >
											<i class="layui-icon">&#xe67c;</i><?php echo lang('finance.recharge_uppic'); ?>
											</button>
										</div>
										</div>
									</div>
									<div class="layui-form-item">
										<button class="layui-btn layui-btn-normal layui-btn-fluid layui-btn-lg" lay-submit lay-filter="okRecharge"><?php echo lang('dealings.recharge_btn_title'); ?></button>
									</div>
								</form>
							</div>
							<div class="site-memo">
								<?php echo lang('dealings.recharge_memo_title'); ?>
								<?php echo lang('dealings.recharge_memo_content'); ?>
							</div>
						</div>
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
 * @LastEditTime: 2021-07-15 23:43:10
 * @Description: Forward, no stop
-->
<script src="/static/index/js/script.js?v=<?php echo htmlentities($version); ?>"></script>
<script src="/static/index/js/clipboard.min.js?v=<?php echo htmlentities($version); ?>"></script>

<script>
	layui.use(['layer', 'jquery', 'form', 'element', 'upload'], function(){
		var layer = layui.layer
		,$ = layui.jquery
		,form = layui.form;
		var element = layui.element;
		var upload = layui.upload;

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		upload.render({
			elem: '.up-pic'
			,url: "<?php echo url('finance/upload_pic'); ?>"
			,exts: 'jpg|png|jpeg',
			done: function(res){
				if(res.code !== 0){
                    return layer.msg(res.msg);
                }
                //上传成功
                if(res.data.url){
                    $('.up-pic-box').parent().find('input[name="recharge_pic"]').val(res.data.src);
                    layer.msg(res.msg);
                }
			}
		});

		form.verify({
			recharge: [
				/^(?!(0[0-9]{0,}$))[0-9]{1,}[.]{0,}[0-9]{0,}$/,
				"<?php echo lang('finance.recharge_num_check'); ?>"
			]
		})

		element.on('tab(tabRecharge)', function(data){
			var type = this.getAttribute('lay-id');
			$("#usdt_recharge_type").val(type);
		});

		form.on('submit(okRecharge)', function(data){
			loading =layer.load(1, {shade: [0.1,'#fff']});
			$.post("<?php echo url('finance/recharge'); ?>", data.field, function (res) {
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
			return false;
		})
	})
	$(function(){
		$("#tabRecharge .layui-tab-title").find("li").eq(0).addClass("layui-this");
		$("#tabRecharge .layui-tab-content").find(".layui-tab-item").eq(0).addClass("layui-show");
		var type = $("#tabRecharge .layui-tab-title").find("li").eq(0).attr("lay-id");
		$("#usdt_recharge_type").val(type);
	})
	function savepic(_this){
		var picurl= $(_this).parent().parent().find("img").attr("src");
		savePicture(picurl);
	}
	var triggerEvent = "touchstart";
	function savePicture(Url){
		var blob=new Blob([''], {type:'application/octet-stream'});
		var url = URL.createObjectURL(blob);
		var a = document.createElement('a');
		a.href = Url;
		a.download = Url.replace(/(.*\/)*([^.]+.*)/ig,"$2").split("?")[0];
		var e = document.createEvent('MouseEvents');
		e.initMouseEvent('click', true, false, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
		a.dispatchEvent(e);
		URL.revokeObjectURL(url);
	}
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
	function copy(t) {
		var codeurl = t;
		clipBoard(codeurl);
		layer.msg("<?php echo lang('public.copyok'); ?>");
	}
</script>
</body>
</html>