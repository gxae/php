<?php /*a:7:{s:61:"/www/wwwroot/nasdaqhome.com/app/index/view/finance/index.html";i:1648888348;s:62:"/www/wwwroot/nasdaqhome.com/app/index/view/layout/default.html";i:1627713636;s:66:"/www/wwwroot/nasdaqhome.com/app/index/view/./block/block_head.html";i:1648774108;s:66:"/www/wwwroot/nasdaqhome.com/app/index/view/./block/block_lang.html";i:1626105462;s:67:"/www/wwwroot/nasdaqhome.com/app/index/view/./finance/left_menu.html";i:1638969322;s:68:"/www/wwwroot/nasdaqhome.com/app/index/view/./block/block_bottom.html";i:1653412340;s:67:"/www/wwwroot/nasdaqhome.com/app/index/view/./block/foot_script.html";i:1626363790;}*/ ?>
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
 * @Date: 2021-07-22 14:17:12
 * @LastEditTime: 2021-10-08 17:52:12
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
					<div class="left-nav">
						<!--
 * @Author: Fox Blue
 * @Date: 2021-07-22 14:56:12
 * @LastEditTime: 2021-08-08 10:38:44
 * @Description: Forward, no stop
-->
<ul>
    <li <?php if($leftmenu=='ex'): ?> class="layui-this"<?php endif; ?>><a href="<?php echo url('finance/index'); ?>"><i class="fa fa-money" aria-hidden="true"></i><?php echo lang('finance.ex_title'); ?></a></li>
    <li <?php if($leftmenu=='le'): ?> class="layui-this"<?php endif; ?>><a href="<?php echo url('finance/lefinance'); ?>"><i class="fa fa-money" aria-hidden="true"></i><?php echo lang('finance.le_title'); ?></a></li>
    <li <?php if($leftmenu=='op'): ?> class="layui-this"<?php endif; ?>><a href="<?php echo url('finance/opfinance'); ?>"><i class="fa fa-money" aria-hidden="true"></i><?php echo lang('finance.op_title'); ?></a></li>
<!--    <li <?php if($leftmenu=='up'): ?> class="layui-this"<?php endif; ?>><a href="<?php echo url('finance/upfinance'); ?>"><i class="fa fa-money" aria-hidden="true"></i><?php echo lang('finance.up_title'); ?></a></li>-->
<!--    <li <?php if($leftmenu=='cm'): ?> class="layui-this"<?php endif; ?>><a href="<?php echo url('finance/cmfinance'); ?>"><i class="fa fa-money" aria-hidden="true"></i><?php echo lang('finance.cm_title'); ?></a></li>-->
    <li <?php if($leftmenu=='tf'): ?> class="layui-this"<?php endif; ?>><a href="<?php echo url('finance/transfer'); ?>"><i class="fa fa-exchange" aria-hidden="true"></i><?php echo lang('finance.tf_title'); ?></a></li>
    <li <?php if($leftmenu=='yka'): ?> class="layui-this"<?php endif; ?>><a href="<?php echo url('finance/yingkuitongji'); ?>"><i class="fa fa-area-chart" aria-hidden="true"></i><?php echo lang('finance.yinkui_tongji'); ?></a></li>
</ul>
					</div>
				</div>
				<div class="layui-col-xs9">
					<div class="mt-10">
						<div class="layui-col-xs6">
							<?php echo lang('finance.ex_title'); ?>： <span>$ <?php echo htmlentities($sum_usd); ?></span>
						</div>
						<div class="layui-col-xs6 text-right">
							<?php echo lang('finance.all_sum_usd'); ?>： <span>$ <?php echo htmlentities($all_sum_usd); ?></span>
						</div>
					</div>
					<div class="log-table">
						<table class="layui-table" lay-skin="nob">
						  <thead>
						    <tr>
						      <th><?php echo lang('finance.top_coin'); ?></th>
						      <th><?php echo lang('finance.top_can'); ?></th>
						      <th><?php echo lang('finance.top_lock'); ?></th>
						      <th><?php echo lang('finance.top_usd'); ?></th>
						      <th><?php echo lang('finance.top_do'); ?> <i class="fa fa-chevron-down close-hide" aria-hidden="true"></i></th>
						    </tr>
						  </thead>
						  <tbody>
							  	<?php if(is_array($walletlist) || $walletlist instanceof \think\Collection || $walletlist instanceof \think\Paginator): $i = 0; $__LIST__ = $walletlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
								<tr>
								<td><?php echo htmlentities($vo['title']); ?></td>
								<td><?php echo htmlentities($vo['ex_money']); ?></td>
								<td><?php echo htmlentities($vo['lock_ex_money']); ?></td>
								<td><?php echo htmlentities($vo['ex_usd']); ?></td>
								<td class="operation">
									<!-- <a href="javascript:void(0) ;" onclick='recharge_show("<?php echo htmlentities(strtolower($vo['title'])); ?>","rechage","<?php echo htmlentities($vo['id']); ?>");' class="color-blue"><?php echo lang('finance.right_recharge'); ?></a>
									<a href="javascript:void(0) ;" onclick='recharge_show("<?php echo htmlentities(strtolower($vo['title'])); ?>","withdraw","<?php echo htmlentities($vo['id']); ?>");' class="color-blue"><?php echo lang('finance.right_withdraw'); ?></a> -->
									<a href="<?php echo url('dealings/recharge',['coin_id'=>$vo['product_id']]); ?>" class="color-blue"><?php echo lang('finance.right_recharge'); ?></a>
									<a href="<?php echo url('dealings/withdraw',['coin_id'=>$vo['product_id']]); ?>" class="color-blue"><?php echo lang('finance.right_withdraw'); ?></a>
									<a href="javascript:void(0) ;" onclick='recharge_show("<?php echo htmlentities(strtolower($vo['title'])); ?>","log","<?php echo htmlentities($vo['id']); ?>");' class="color-blue"><?php echo lang('finance.right_log'); ?></a>
									<a href="<?php echo url('finance/transfer',['type'=>1]); ?>" class="color-blue"><?php echo lang('finance.right_transfer'); ?></a>
								</td>
								</tr>
								<tr class='<?php echo htmlentities(strtolower($vo['title'])); ?> hidebox'>
									<td colspan="5">
										<div class="rechage hidebox">
											<?php if($vo['base'] == 0): if(!empty($vo['pay_address'])): ?>
											<form class="layui-form" action="">
												<input type="hidden" name="wallet_id" value="<?php echo htmlentities($vo['id']); ?>">
												<input type="hidden" name="product_id" value="<?php echo htmlentities($vo['product_id']); ?>">
												<div class="layui-form-item">
													<label class="layui-form-label text-right" style="width: 150px;"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_address'); ?></label>
													<div class="layui-input-inline text-left" style="width: 300px;">
													  <input type="text" name="pay_address" placeholder="<?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_address'); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($vo['pay_address']); ?>">
													</div>
													<button type="button" onclick='copy("<?php echo htmlentities($vo['pay_address']); ?>");' class="layui-btn layui-btn-normal float-left"><?php echo lang('public.copy'); ?></button>
												</div>
												<div class="layui-form-item">
													<label class="layui-form-label text-right" style="width: 150px;"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_qrcode'); ?></label>
													<div class="layui-input-inline text-left">
													  <img src='<?php echo phpqrcode($vo['pay_address'],$vo['title']."_address"); ?>' width="150px">
													</div>
												</div>
												<div class="layui-form-item">
													<label class="layui-form-label text-right" style="width: 150px;"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_num'); ?></label>
													<div class="layui-input-inline">
														<input type="text" name="recharge_account" lay-verify="required|recharge" lay-verType="tips" lay-reqText="<?php echo lang('finance.recharge_num_must'); ?>" placeholder="<?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_num'); ?>" autocomplete="off" class="layui-input">
													</div>
												</div>
												<div class="layui-form-item">
													<label class="layui-form-label text-right" style="width: 150px;"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_pic'); ?></label>
													<div class="layui-input-inline">
														<input type="text" name="recharge_pic" readonly lay-verify="required" lay-verType="tips" lay-reqText="<?php echo lang('finance.recharge_pic_must'); ?>" placeholder="<?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_pic'); ?>" autocomplete="off" class="layui-input">
													</div>
													<button type="button" class="layui-btn float-left up-pic" >
														<i class="layui-icon">&#xe67c;</i><?php echo lang('finance.recharge_uppic'); ?>
													  </button>
												</div>
												<div class="layui-form-item">
													<div class="layui-input-block">
													  <button class="layui-btn layui-btn-fluid layui-btn-normal" lay-submit lay-filter="<?php echo htmlentities(strtolower($vo['title'])); ?>Form"><?php echo lang('finance.recharge_btn'); ?></button>
													</div>
												</div>
											</form>
											<?php else: ?>
											<a href="javascript:void(0) ;" onclick='recharge_show("usdt","rechage","<?php echo htmlentities($vo['id']); ?>");' class="color-blue"><?php echo lang('finance.to_usdt_address'); ?></a>
											<?php endif; else: ?>
											<form class="layui-form usdt-recharge" action="">
												<input type="hidden" name="wallet_id" value="<?php echo htmlentities($vo['id']); ?>">
												<input type="hidden" name="product_id" value="<?php echo htmlentities($vo['product_id']); ?>">
												<div class="layui-form-item">
													<div class="layui-tab layui-tab-brief" lay-filter="usdtTabBrief">
														<ul class="layui-tab-title">
														  <li lay-id="3" class="layui-this"><?php echo lang('finance.erc_address'); ?></li>
														  <li lay-id="2"><?php echo lang('finance.trc_address'); ?></li>
														  <li lay-id="1"><?php echo lang('finance.omni_address'); ?></li>
														</ul>
														<div class="layui-tab-content">
															<div class="layui-tab-item layui-show">
																<div class="layui-form-item">
																	<label class="layui-form-label text-right" style="width: 150px;"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_address'); ?></label>
																	<div class="layui-input-inline text-left" style="width: 300px;">
																	  <input type="text" name="erc_address" placeholder="<?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_address'); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($vo['erc_address']); ?>">
																	</div>
																	<button type="button" onclick='copy("<?php echo htmlentities($vo['erc_address']); ?>");' class="layui-btn layui-btn-normal float-left"><?php echo lang('public.copy'); ?></button>
																</div>
																<div class="layui-form-item">
																	<label class="layui-form-label text-right" style="width: 150px;"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_qrcode'); ?></label>
																	<div class="layui-input-inline">
																	  <img src='<?php echo phpqrcode($vo['erc_address'],$vo['title']."_address"); ?>' width="150px">
																	</div>
																</div>
															  </div>
															<div class="layui-tab-item">
																<div class="layui-form-item">
																	<label class="layui-form-label text-right" style="width: 150px;"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_address'); ?></label>
																	<div class="layui-input-inline text-left" style="width: 300px;">
																	  <input type="text" name="trc_address" placeholder="<?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_address'); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($vo['trc_address']); ?>">
																	</div>
																	<button type="button" onclick='copy("<?php echo htmlentities($vo['trc_address']); ?>");' class="layui-btn layui-btn-normal float-left"><?php echo lang('public.copy'); ?></button>
																</div>
																<div class="layui-form-item">
																	<label class="layui-form-label text-right" style="width: 150px;"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_qrcode'); ?></label>
																	<div class="layui-input-inline">
																	  <img src='<?php echo phpqrcode($vo['trc_address'],$vo['title']."_address"); ?>' width="150px">
																	</div>
																</div>
															</div>
														  <div class="layui-tab-item">
															<div class="layui-form-item">
																<label class="layui-form-label text-right" style="width: 150px;"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_address'); ?></label>
																<div class="layui-input-inline text-left" style="width: 300px;">
																  <input type="text" name="omni_address" placeholder="<?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_address'); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($vo['omni_address']); ?>">
																</div>
																<button type="button" onclick='copy("<?php echo htmlentities($vo['omni_address']); ?>");' class="layui-btn layui-btn-normal float-left"><?php echo lang('public.copy'); ?></button>
															</div>
															<div class="layui-form-item">
																<label class="layui-form-label text-right" style="width: 150px;"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_qrcode'); ?></label>
																<div class="layui-input-inline">
																  <img src='<?php echo phpqrcode($vo['omni_address'],$vo['title']."_address"); ?>' width="150px">
																</div>
															</div>
														  </div>
														</div>
													  </div>
												</div>
												<input type="hidden" id="usdt_recharge_type" name="usdt_recharge_type" value="3">
												<div class="layui-form-item">
													<label class="layui-form-label text-right" style="width: 150px;"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_num'); ?></label>
													<div class="layui-input-inline">
														<input type="text" name="recharge_account" lay-verify="required|recharge" lay-verType="tips" lay-reqText="<?php echo lang('finance.recharge_num_must'); ?>" placeholder="<?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_num'); ?>" autocomplete="off" class="layui-input">
													</div>
												</div>
												<div class="layui-form-item">
													<label class="layui-form-label text-right" style="width: 150px;"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_pic'); ?></label>
													<div class="layui-input-inline">
														<input type="text" name="recharge_pic" readonly lay-verify="required" lay-verType="tips" lay-reqText="<?php echo lang('finance.recharge_pic_must'); ?>" placeholder="<?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_pic'); ?>" autocomplete="off" class="layui-input">
													</div>
													<button type="button" class="layui-btn float-left up-pic" >
														<i class="layui-icon">&#xe67c;</i><?php echo lang('finance.recharge_uppic'); ?>
													  </button>
												</div>
												<div class="layui-form-item">
													<div class="layui-input-block">
													  <button class="layui-btn layui-btn-fluid layui-btn-normal" lay-submit lay-filter="<?php echo htmlentities(strtolower($vo['title'])); ?>Form"><?php echo lang('finance.recharge_btn'); ?></button>
													</div>
												</div>
											</form>
											<?php endif; ?>
										</div>
										<div class="withdraw layui-row layui-col-space20 hidebox">
											<?php if($vo['withdraw_member'] ==0): ?>
											<a href="javascript:void(0) ;" onclick='recharge_show("usdt","withdraw","<?php echo htmlentities($vo['id']); ?>");' class="color-blue"><?php echo lang('finance.to_usdt_address_w'); ?></a>
											<?php else: if(empty($vo['withdraw_erc_address']) && empty($vo['withdraw_trc_address']) && empty($vo['withdraw_omni_address'])): ?>
											<a href="<?php echo url('member/incomeset'); ?>" class="color-blue"><?php echo lang('finance.withdraw_address_nomsg'); ?></a>
											<?php else: ?>
											<div class="layui-col-xs8">
												<form class="layui-form" action="">
													<input type="hidden" name="wallet_id" value="<?php echo htmlentities($vo['id']); ?>">
													<input type="hidden" name="product_id" value="<?php echo htmlentities($vo['product_id']); ?>">
													<input type="hidden" name="type" value="">
													<input type="hidden" name="sxf" value="0">
													<a href="<?php echo url('show/news',['id'=>17]); ?>" class="layui-btn layui-btn-sm float-right"><?php echo lang('finance.withdraw_ads'); ?></a>
													<div class="layui-tab <?php echo htmlentities(strtolower($vo['title'])); ?>-tab layui-tab-brief" lay-filter="tabWithdraw">
														<ul class="layui-tab-title">
														<?php if($vo['withdraw_erc_address']): ?>
														<li>ERC</li>
														<?php endif; if($vo['withdraw_trc_address']): ?>
														<li>TRC</li>
														<?php endif; if($vo['withdraw_omni_address']): ?>
														<li>OMNI</li>
														<?php endif; ?>
														</ul>
														<div class="layui-tab-content">
															<?php if($vo['withdraw_erc_address']): ?>
															<div class="layui-tab-item">
																<div class="layui-form-item">
																	<label class="layui-form-label text-right" style="width: 150px;"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.withdraw_address'); ?></label>
																	<div class="layui-input-inline text-left <?php echo htmlentities(strtolower($vo['title'])); ?>-item" data-type="erc" data-sxf="<?php echo htmlentities($vo['withdraw_erc_sxf']); ?>" style="width: 300px;">
																	<input type="text" name="withdraw_address" readonly placeholder="<?php echo htmlentities($vo['title']); ?><?php echo lang('finance.withdraw_address'); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($vo['withdraw_erc_address']); ?>">
																	</div>
																</div>
															</div>
															<?php endif; if($vo['withdraw_trc_address']): ?>
															<div class="layui-tab-item">
																<div class="layui-form-item">
																	<label class="layui-form-label text-right" style="width: 150px;"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.withdraw_address'); ?></label>
																	<div class="layui-input-inline text-left <?php echo htmlentities(strtolower($vo['title'])); ?>-item" data-type="trc" data-sxf="<?php echo htmlentities($vo['withdraw_trc_sxf']); ?>" style="width: 300px;">
																	<input type="text" name="withdraw_address" readonly placeholder="<?php echo htmlentities($vo['title']); ?><?php echo lang('finance.withdraw_address'); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($vo['withdraw_trc_address']); ?>">
																	</div>
																</div>
															</div>
															<?php endif; if($vo['withdraw_omni_address']): ?>
															<div class="layui-tab-item">
																<div class="layui-form-item">
																	<label class="layui-form-label text-right" style="width: 150px;"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.withdraw_address'); ?></label>
																	<div class="layui-input-inline text-left <?php echo htmlentities(strtolower($vo['title'])); ?>-item" data-type="omni" data-sxf="<?php echo htmlentities($vo['withdraw_omni_sxf']); ?>" style="width: 300px;">
																	<input type="text" name="withdraw_address" readonly placeholder="<?php echo htmlentities($vo['title']); ?><?php echo lang('finance.withdraw_address'); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($vo['withdraw_omni_address']); ?>">
																	</div>
																</div>
															</div>
															<?php endif; ?>
														</div>
													</div>
													<div class="layui-form-item">
														<label class="layui-form-label text-right" style="width: 150px;"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.withdraw_num'); ?></label>
														<div class="layui-input-inline">
															<input type="text" name="withdraw_account" onblur='check_num(this);' lay-verify="required|withdraw" lay-verType="tips" lay-reqText="<?php echo lang('finance.withdraw_num_must'); ?>" placeholder="<?php echo htmlentities($vo['title']); ?><?php echo lang('finance.withdraw_num'); ?>" autocomplete="off" class="layui-input">
															<div class="layui-input-inline text-left show-sxf" style="line-height: 36px;"></div>
														</div>
													</div>
													<div class="layui-form-item">
														<label class="layui-form-label text-right" style="width: 150px;"><?php echo lang('finance.withdraw_paypwd'); ?></label>
														<div class="layui-input-inline text-left" style="width: 300px;">
														<input type="password" name="paypwd" lay-verify="required" lay-verType="tips" lay-reqText="<?php echo lang('finance.withdraw_paypwd_must'); ?>" placeholder="<?php echo lang('finance.withdraw_paypwd'); ?>" autocomplete="off" class="layui-input" value="">
														</div>
													</div>
													<div class="layui-form-item">
														<div class="layui-input-block">
														<button class="layui-btn layui-btn-fluid layui-btn-warm" lay-submit lay-filter="<?php echo htmlentities(strtolower($vo['title'])); ?>Withdraw"><?php echo lang('finance.withdraw_btn'); ?></button>
														</div>
													</div>
												</form>
											</div>
											<div class="layui-col-xs4 withdraw-rule">
												<h5><?php echo lang('withdrwa_rule.title'); ?></h5>
												<div class="content"><?php echo lang('withdrwa_rule.content'); ?></div>
											</div>
											<?php endif; ?>
											<?php endif; ?>
										</div>
										<div class="log hidebox">
											<table class="layui-table flow-table">
												<thead>
												  <tr>
													<th><?php echo lang('finance.flow_time'); ?></th>
													<th><?php echo lang('finance.flow_title'); ?></th>
													<th><?php echo lang('finance.flow_type'); ?></th>
													<th><?php echo lang('finance.flow_all'); ?></th>
													<th><?php echo lang('finance.flow_sxf'); ?></th>
													<th><?php echo lang('finance.flow_resault'); ?></th>
												  </tr>
												</thead>
												<tbody id="<?php echo htmlentities(strtolower($vo['title'])); ?>_log">
												</tbody>
											</table>
										</div>
									</td>
								</tr>
								<?php endforeach; endif; else: echo "" ;endif; ?>
						  </tbody>
						</table>
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
	layui.use(['layer', 'jquery', 'form', 'element', 'flow', 'upload'], function(){
		var layer = layui.layer
		,$ = layui.jquery
		,form = layui.form;
		var element = layui.element;
		var flow = layui.flow;
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
                    $('.up-pic').parent().find('input[name="recharge_pic"]').val(res.data.src);
                    layer.msg(res.msg);
                }
			}
		});

		form.verify({
			recharge: [
				/^(?!(0[0-9]{0,}$))[0-9]{1,}[.]{0,}[0-9]{0,}$/,
				"<?php echo lang('finance.recharge_num_check'); ?>"
			],
			withdraw: [
				/^(?!(0[0-9]{0,}$))[0-9]{1,}[.]{0,}[0-9]{0,}$/,
				"<?php echo lang('finance.withdraw_num_check'); ?>"
			]
		})

		<?php if(is_array($walletlist) || $walletlist instanceof \think\Collection || $walletlist instanceof \think\Paginator): $i = 0; $__LIST__ = $walletlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if((!empty($vo['pay_address']) || $vo['base'] ==1)): ?>
		form.on('submit(<?php echo htmlentities(strtolower($vo['title'])); ?>Form)', function(data){
			if(data.field.recharge_account){
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
			}
			return false;
		});
		<?php endif; if(($vo['withdraw_address'] && $vo['withdraw_member'] ==1)): ?>
		form.on('submit(<?php echo htmlentities(strtolower($vo['title'])); ?>Withdraw)', function(data){
			if(data.field.withdraw_account){
				loading =layer.load(1, {shade: [0.1,'#fff']});
				$.post("<?php echo url('finance/withdraw'); ?>", data.field, function (res) {
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
		<?php endif; ?>
		<?php endforeach; endif; else: echo "" ;endif; ?>

		element.on('tab(usdtTabBrief)', function(data){
			var type = this.getAttribute('lay-id');
			$("#usdt_recharge_type").val(type);
		});

		window.findlog = function(a,b,id){
			$('#'+a+'_'+b).empty();
			flow.load({
				elem: '#'+a+'_'+b //指定列表容器
				,colSpan:6 //列数
				,end:'<td colspan="6"><?php echo lang("finance.finance_nodata"); ?></td>'
				,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
				var lis = [];
				$.post("<?php echo url('finance/findlog'); ?>",{id:id,page:page,type:1}, function(res){
					layui.each(res.data, function(index, item){
					lis.push('<tr><td>'+ item.create_time +'</td><td>'+ item.title +'</td><td>'+ item.type +'</td><td>'+ item.all_account +'</td><td>'+ item.account_sxf +'</td><td>'+ item.status +'</td></tr>');
					});
					next(lis.join(''), page < res.pages);
				});
				}
			});
		}
		element.on('tab(tabWithdraw)', function(data){
			var type = $(data.elem).find(".layui-show .layui-input-inline").data("type");
			var sxf = $(data.elem).find(".layui-show .layui-input-inline").data("sxf");
			$('input[name="type"').val(type);
			$('input[name="sxf"').val(sxf);
			$('input[name="withdraw_account"]').val('');
		});
	})
	function recharge_show(a,b,c){
		$("."+a).fadeIn().siblings(".hidebox").hide();
		$("."+b).fadeIn().siblings(".hidebox").hide();
		if(b=='withdraw'){
			$("."+b).find("."+a+"-tab li").eq(0).addClass("layui-this");
			$("."+b).find("."+a+"-tab .layui-tab-item").eq(0).addClass("layui-show");
			var type = $("."+b).find("."+a+"-item").data("type");
			var sxf = $("."+b).find("."+a+"-item").data("sxf");
			$('input[name="type"').val(type);
			$('input[name="sxf"').val(sxf);
		}
		if(b==='log'){
			findlog(a,b,c);
		}
	}
	$(".close-hide").click(function() {
		$(".hidebox").hide()
	});
	function check_num(a){
		var n = a.value;
		var reg = /^(?!(0[0-9]{0,}$))[0-9]{1,}[.]{0,}[0-9]{0,}$/;
		if (!reg.test(n)) {
			$(a).parent().parent().find('.show-sxf').html("<?php echo lang('finance.withdraw_num_check'); ?>");
			return false;
		}
		b = $('input[name="sxf"]').val();
		if(n && b > 0){
			var sxf = floatMul(n,b);
			var end = floatSub(n,sxf);
			$(a).parent().parent().find('.show-sxf').html("<?php echo lang('finance.withdraw_num_sxf'); ?>"+sxf+",<?php echo lang('finance.withdraw_num_end'); ?>"+end);
		}
	}
</script>
</body>
</html>