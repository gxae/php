<?php /*a:5:{s:61:"/www/wwwroot/nsdkqdsdf.com/app/mobile/view/finance/index.html";i:1637421124;s:62:"/www/wwwroot/nsdkqdsdf.com/app/mobile/view/layout/default.html";i:1630206160;s:69:"/www/wwwroot/nsdkqdsdf.com/app/mobile/view/./finance/mobile_menu.html";i:1638969414;s:71:"/www/wwwroot/nsdkqdsdf.com/app/mobile/view/./block/mobile_footmenu.html";i:1637392268;s:67:"/www/wwwroot/nsdkqdsdf.com/app/mobile/view/./block/foot_script.html";i:1639227710;}*/ ?>
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
 * @Date: 2021-07-22 14:17:12
 * @LastEditTime: 2021-10-08 17:52:40
 * @Description: Forward, no stop
-->
<div class="a-header position-re finance-bg">
	<div class="layui-row">
		<div class="layui-col-xs3">
			<!--<a href="javascript:window.history.go(-1);"><i class="layui-icon layui-icon-left"></i></a>-->
		</div>
		<div class="layui-col-xs6 text-center all_finance_header">
			<?php echo lang('public_memu.finance'); ?>
		</div>
	</div>
</div>
	<!--主体-->
	<div class="main">
		<div class="finance-box finance-bg padding-l-r">
			<div class="finance-nav">
				<!--
 * @Author: Fox Blue
 * @Date: 2021-07-22 14:56:12
 * @LastEditTime: 2021-08-19 12:40:28
 * @Description: Forward, no stop
-->
<ul>
    <li <?php if($leftmenu=='ex'): ?> class="layui-this"<?php endif; ?>><a href="<?php echo url('finance/index'); ?>"><?php echo lang('mobile_finance.ex_title'); ?></a></li>
    <li <?php if($leftmenu=='le'): ?> class="layui-this"<?php endif; ?>><a href="<?php echo url('finance/lefinance'); ?>"><?php echo lang('mobile_finance.le_title'); ?></a></li>
    <li <?php if($leftmenu=='op'): ?> class="layui-this"<?php endif; ?>><a href="<?php echo url('finance/opfinance'); ?>"><?php echo lang('mobile_finance.op_title'); ?></a></li>
<!--    <li <?php if($leftmenu=='up'): ?> class="layui-this"<?php endif; ?>><a href="<?php echo url('finance/upfinance'); ?>"><?php echo lang('mobile_finance.up_title'); ?></a></li>-->
<!--    <li <?php if($leftmenu=='cm'): ?> class="layui-this"<?php endif; ?>><a href="<?php echo url('finance/cmfinance'); ?>"><?php echo lang('mobile_finance.cm_title'); ?></a></li>-->
    <!--<li <?php if($leftmenu=='tf'): ?> class="layui-this"<?php endif; ?>><a href="<?php echo url('finance/transfer'); ?>"><?php echo lang('mobile_finance.tf_title'); ?></a></li>-->
    <li <?php if($leftmenu=='yka'): ?> class="layui-this"<?php endif; ?>><a href="<?php echo url('finance/yingkuitongji'); ?>"><?php echo lang('finance.yinkui_tongji'); ?></a></li>
</ul>
			</div>
			<div class="mt-10 mt-10-all">
				<?php echo lang('finance.all_sum_usd'); ?>：<span>$ <?php echo htmlentities($all_sum_usd); ?></span>
			</div>
			<div class="mt-10">
				<!--<?php echo lang('tradelog.tab_list_a'); ?>--><?php echo lang('finance.ex_title'); ?>：<span>$ <?php echo htmlentities($sum_usd); ?></span>
			</div>
			<div class="mt-10">
			<span style="font-size:17px;">	UID：</span> <span class="mt-10-uid"  style="font-size:17px;"><?php echo htmlentities($UID); ?></span>
			</div>
		</div>
		<div class="layui-row mt-10 user-box-imgn">
    <div class="layui-col-xs4 text-center">
      <a class="link-b" href="<?php echo url('dealings/recharge'); ?>">
        <img src="/static/mobile/imgn/user_recharge.png" >
        <p><?php echo lang('mobile_home.user_recharge'); ?></p>
      </a>
    </div>
    <div class="layui-col-xs4 text-center">
      <a class="link-b" href="<?php echo url('dealings/withdraw'); ?>">
        <img src="/static/mobile/imgn/user_withdraw.png" >
        <p><?php echo lang('mobile_home.user_withdraw'); ?></p>
      </a>
    </div>
    <div class="layui-col-xs4 text-center">
      <a class="link-b" href="<?php echo url('finance/transfer'); ?>">
        <img src="/static/mobile/imgn/transfer_icon.png" >
        <p><?php echo lang('mobile_finance.tf_title'); ?></p>    
      </a>
    </div>
  </div>
		<div class="assets-bottom padding-l-r">
			<table class="layui-table" lay-skin="nob">
				<tbody>
					<?php if(is_array($walletlist) || $walletlist instanceof \think\Collection || $walletlist instanceof \think\Paginator): $i = 0; $__LIST__ = $walletlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<tr id="list_<?php echo htmlentities(strtolower($vo['title'])); ?>">
					<td><span class="color-blue font-18"><?php echo htmlentities($vo['title']); ?></span>
						<p class="color-l-blue mt-10"><?php echo lang('finance.top_can'); ?></p>
						<p class="mt-10"><?php echo htmlentities($vo['ex_money']); ?></p>
					</td>
					<td><span>&nbsp;</span>
						<p class="color-l-blue mt-10"><?php echo lang('finance.top_lock'); ?></p>
						<p class="mt-10"><?php echo htmlentities($vo['lock_ex_money']); ?></p>
					</td>
					<td class="text-right">
						<a href="javascript:void(0);" onclick='show_memu(this,"<?php echo htmlentities(strtolower($vo['title'])); ?>");' class="color-l-blue"><i class="layui-box layui-icon layui-icon-right"></i></a>
						<p class="color-l-blue mt-10"><?php echo lang('finance.top_usd'); ?></p>
						<p class="mt-10"><?php echo htmlentities($vo['ex_usd']); ?></p>
					</td>
					</tr>
					<tr class='memu_<?php echo htmlentities(strtolower($vo['title'])); ?> hidebox memu_box' style="border-top:0;">
						<td colspan="3" class="text-center">
							<!-- <a href="javascript:void(0) ;" onclick='recharge_show("<?php echo htmlentities(strtolower($vo['title'])); ?>","rechage","<?php echo htmlentities($vo['id']); ?>");' class="layui-btn layui-btn-normal"><?php echo lang('finance.right_recharge'); ?></a>
							<a href="javascript:void(0) ;" onclick='recharge_show("<?php echo htmlentities(strtolower($vo['title'])); ?>","withdraw","<?php echo htmlentities($vo['id']); ?>");' class="layui-btn layui-btn-normal"><?php echo lang('finance.right_withdraw'); ?></a> -->
							<a href="javascript:void(0) ;" onclick='recharge_show("<?php echo htmlentities(strtolower($vo['title'])); ?>","log","<?php echo htmlentities($vo['id']); ?>");' class="layui-btn layui-btn-normal"><?php echo lang('finance.right_log'); ?></a>
							<a href="<?php echo url('finance/transfer',['type'=>1]); ?>" class="layui-btn layui-btn-normal"><?php echo lang('finance.right_transfer'); ?></a>
						</td>
					</tr>
					<tr class='<?php echo htmlentities(strtolower($vo['title'])); ?> hidebox'>
						<td colspan="3">
							<div class="rechage hidebox">
								<?php if($vo['base'] == 0): if(!empty($vo['pay_address'])): ?>
								<form class="layui-form a-form" action="">
									<input type="hidden" name="wallet_id" value="<?php echo htmlentities($vo['id']); ?>">
									<input type="hidden" name="product_id" value="<?php echo htmlentities($vo['product_id']); ?>">
									<div class="layui-form-item">
										<button type="button" onclick='copy("<?php echo htmlentities($vo['pay_address']); ?>");' class="layui-btn layui-btn-xs layui-btn-normal float-right"><?php echo lang('public.copy'); ?></button>
										<label class="a-label"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_address'); ?></label>
										<div class="">
											<input type="text" name="pay_address" placeholder="<?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_address'); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($vo['pay_address']); ?>">
										</div>
									</div>
									<!-- <div class="layui-form-item">
										<label class="a-label"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_qrcode'); ?></label>
										<div class="">
											<img src='<?php echo phpqrcode($vo['pay_address'],$vo['title']."_address"); ?>' width="150px">
										</div>
									</div> -->
									<div class="layui-form-item">
										<label class="a-label"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_num'); ?></label>
										<div class="">
											<input type="text" name="recharge_account" lay-verify="required|recharge" lay-verType="tips" lay-reqText="<?php echo lang('finance.recharge_num_must'); ?>" placeholder="<?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_num'); ?>" autocomplete="off" class="layui-input">
										</div>
									</div>
									<div class="layui-form-item">
										<label class="a-label"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_pic'); ?></label>
										<div class="">
											<input type="text" name="recharge_pic" readonly lay-verify="required" lay-verType="tips" lay-reqText="<?php echo lang('finance.recharge_pic_must'); ?>" placeholder="<?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_pic'); ?>" autocomplete="off" class="layui-input">
										</div>
										<button type="button" class="layui-btn layui-btn-fluid up-pic" >
											<i class="layui-icon">&#xe67c;</i><?php echo lang('finance.recharge_uppic'); ?>
											</button>
									</div>
									<div class="layui-form-item">
										<div class="">
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
											<ul class="layui-tab-title mobile-layui-tab-titles">
												<li lay-id="3" class="layui-this"><?php echo lang('finance.erc_address'); ?></li>
												<li lay-id="2"><?php echo lang('finance.trc_address'); ?></li>
												<li lay-id="1"><?php echo lang('finance.omni_address'); ?></li>
											</ul>
											<div class="layui-tab-content a-form" style="padding:0;">
												<div class="layui-tab-item layui-show" style="margin-bottom: 0;">
													<div class="layui-form-item" style="margin-bottom: 0;">
														<button type="button" onclick='copy("<?php echo htmlentities($vo['erc_address']); ?>");' class="layui-btn layui-btn-xs layui-btn-normal float-right"><?php echo lang('public.copy'); ?></button>
														<label class="a-label"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_address'); ?></label>
														<div class="">
															<input type="text" name="erc_address" placeholder="<?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_address'); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($vo['erc_address']); ?>">
														</div>
													</div>
													<!-- <div class="layui-form-item">
														<label class="a-label"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_qrcode'); ?></label>
														<div class="">
															<img src='<?php echo phpqrcode($vo['erc_address'],$vo['title']."_address"); ?>'>
														</div>
													</div> -->
													</div>
												<div class="layui-tab-item" style="margin-bottom: 0;">
													<div class="layui-form-item" style="margin-bottom: 0;">
														<button type="button" onclick='copy("<?php echo htmlentities($vo['trc_address']); ?>");' class="layui-btn layui-btn-xs layui-btn-normal float-right"><?php echo lang('public.copy'); ?></button>
														<label class="a-label"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_address'); ?></label>
														<div class="">
															<input type="text" name="trc_address" placeholder="<?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_address'); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($vo['trc_address']); ?>">
														</div>
													</div>
													<!-- <div class="layui-form-item">
														<label class="a-label"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_qrcode'); ?></label>
														<div class="">
															<img src='<?php echo phpqrcode($vo['trc_address'],$vo['title']."_address"); ?>'>
														</div>
													</div> -->
												</div>
												<div class="layui-tab-item" style="margin-bottom: 0;">
												<div class="layui-form-item" style="margin-bottom: 0;">
													<button type="button" onclick='copy("<?php echo htmlentities($vo['omni_address']); ?>");' class="layui-btn layui-btn-xs layui-btn-normal float-right"><?php echo lang('public.copy'); ?></button>
													<label class="a-label"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_address'); ?></label>
													<div class="">
														<input type="text" name="omni_address" placeholder="<?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_address'); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($vo['omni_address']); ?>">
													</div>
												</div>
												<!-- <div class="layui-form-item">
													<label class="a-label"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_qrcode'); ?></label>
													<div class="">
														<img src='<?php echo phpqrcode($vo['omni_address'],$vo['title']."_address"); ?>'>
													</div>
												</div> -->
												</div>
											</div>
											</div>
									</div>
									<input type="hidden" id="usdt_recharge_type" name="usdt_recharge_type" value="3">
									<div class="layui-form-item">
										<label class="a-label"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_num'); ?></label>
										<div class="">
											<input type="text" name="recharge_account" lay-verify="required|recharge" lay-verType="tips" lay-reqText="<?php echo lang('finance.recharge_num_must'); ?>" placeholder="<?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_num'); ?>" autocomplete="off" class="layui-input">
										</div>
									</div>
									<div class="layui-form-item">
										<label class="a-label"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_pic'); ?></label>
										<div class="">
											<input type="text" name="recharge_pic" readonly lay-verify="required" lay-verType="tips" lay-reqText="<?php echo lang('finance.recharge_pic_must'); ?>" placeholder="<?php echo htmlentities($vo['title']); ?><?php echo lang('finance.recharge_pic'); ?>" autocomplete="off" class="layui-input">
										</div>
										<button type="button" class="layui-btn layui-btn-fluid up-pic" >
											<i class="layui-icon">&#xe67c;</i><?php echo lang('finance.recharge_uppic'); ?>
											</button>
									</div>
									<div class="layui-form-item">
										<div class="">
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
								<div class="layui-col-sm8">
									<form class="layui-form a-form" action="">
										<input type="hidden" name="wallet_id" value="<?php echo htmlentities($vo['id']); ?>">
										<input type="hidden" name="product_id" value="<?php echo htmlentities($vo['product_id']); ?>">
										<input type="hidden" name="type" value="">
										<input type="hidden" name="sxf" value="0">
										<!-- <a href="<?php echo url('show/news',['id'=>17]); ?>" class="layui-btn layui-btn-sm float-right"><?php echo lang('finance.withdraw_ads'); ?></a> -->
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
														<label class="alabel text-right" style="width: 150px;"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.withdraw_address'); ?></label>
														<div class="layui-input-inlines text-left <?php echo htmlentities(strtolower($vo['title'])); ?>-item" data-type="erc" data-sxf="<?php echo htmlentities($vo['withdraw_erc_sxf']); ?>" style="width: 300px;">
														<input type="text" name="withdraw_address" readonly placeholder="<?php echo htmlentities($vo['title']); ?><?php echo lang('finance.withdraw_address'); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($vo['withdraw_erc_address']); ?>">
														</div>
													</div>
												</div>
												<?php endif; if($vo['withdraw_trc_address']): ?>
												<div class="layui-tab-item">
													<div class="layui-form-item">
														<label class="a-label text-right" style="width: 150px;"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.withdraw_address'); ?></label>
														<div class="layui-input-inlines text-left <?php echo htmlentities(strtolower($vo['title'])); ?>-item" data-type="trc" data-sxf="<?php echo htmlentities($vo['withdraw_trc_sxf']); ?>" style="width: 300px;">
														<input type="text" name="withdraw_address" readonly placeholder="<?php echo htmlentities($vo['title']); ?><?php echo lang('finance.withdraw_address'); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($vo['withdraw_trc_address']); ?>">
														</div>
													</div>
												</div>
												<?php endif; if($vo['withdraw_omni_address']): ?>
												<div class="layui-tab-item">
													<div class="layui-form-item">
														<label class="a-label text-right" style="width: 150px;"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.withdraw_address'); ?></label>
														<div class="layui-input-inlines text-left <?php echo htmlentities(strtolower($vo['title'])); ?>-item" data-type="omni" data-sxf="<?php echo htmlentities($vo['withdraw_omni_sxf']); ?>" style="width: 300px;">
														<input type="text" name="withdraw_address" readonly placeholder="<?php echo htmlentities($vo['title']); ?><?php echo lang('finance.withdraw_address'); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($vo['withdraw_omni_address']); ?>">
														</div>
													</div>
												</div>
												<?php endif; ?>
											</div>
										</div> 
										<div class="layui-form-item">
											<label class="a-label text-right" style="width: 150px;"><?php echo htmlentities($vo['title']); ?><?php echo lang('finance.withdraw_num'); ?></label>
											<div class="layui-input-inlines">
												<input type="text" name="withdraw_account" onblur='check_num(this);' lay-verify="required|withdraw" lay-verType="tips" lay-reqText="<?php echo lang('finance.withdraw_num_must'); ?>" placeholder="<?php echo htmlentities($vo['title']); ?><?php echo lang('finance.withdraw_num'); ?>" autocomplete="off" class="layui-input">
												<div class="layui-input-inline text-left show-sxf" style="line-height: 36px;"></div>
											</div>
										</div>
										<div class="layui-form-item">
											<label class="a-label text-right" style="width: 150px;"><?php echo lang('finance.withdraw_paypwd'); ?></label>
											<div class="layui-input-inlines text-left" style="width: 300px;">
											<input type="password" name="paypwd" lay-verify="required" lay-verType="tips" lay-reqText="<?php echo lang('finance.withdraw_paypwd_must'); ?>" placeholder="<?php echo lang('finance.withdraw_paypwd'); ?>" autocomplete="off" class="layui-input" value="">
											</div>
										</div>
										<div class="layui-form-item">
											<button class="layui-btn layui-btn-fluid layui-btn-warm" lay-submit lay-filter="<?php echo htmlentities(strtolower($vo['title'])); ?>Withdraw"><?php echo lang('finance.withdraw_btn'); ?></button>
										</div>
									</form>
								</div>
								<div class="layui-col-sm4 withdraw-rule">
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
										<th><?php echo lang('finance.flow_time'); ?><br><?php echo lang('finance.flow_title'); ?></th>
										<th><?php echo lang('finance.flow_all'); ?><br><?php echo lang('finance.flow_sxf'); ?></th>
										<th><?php echo lang('finance.flow_type'); ?><br><?php echo lang('finance.flow_resault'); ?></th>
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
	var cando = "<?php echo htmlentities($cando); ?>";
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
				,colSpan:3 //列数
				,end:'<td colspan="3" class="text-center"><?php echo lang("finance.finance_nodata"); ?></td>'
				,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
				var lis = [];
				$.post("<?php echo url('finance/findlog'); ?>",{id:id,page:page,type:1}, function(res){
					layui.each(res.data, function(index, item){
					lis.push('<tr><td>'+ item.create_time +'<br>'+ item.title +'</td><td>'+ item.all_account +'</br>'+ item.account_sxf +'</td><td>'+ item.type +'<br>'+ item.status +'</td></tr>');
					}); 
					next(lis.join(''), page < res.pages);    
				});
				}
			});
		}
		$(document).ready(function(){ 
			if(cando ==1){
				$("body").find(".memu_usdt").fadeIn();
				$("body").find(".usdt").fadeIn();
				$("body").find(".usdt .rechage").fadeIn();
			}
			if(cando ==2){
				$("body").find(".memu_usdt").fadeIn();
				$("body").find(".usdt").fadeIn();
				$("body").find(".usdt .withdraw").fadeIn();
			}
		})
		element.on('tab(tabWithdraw)', function(data){
			var type = $(data.elem).find(".layui-show .layui-input-inlines").data("type");
			var sxf = $(data.elem).find(".layui-show .layui-input-inlines").data("sxf");
			$('input[name="type"').val(type);
			$('input[name="sxf"').val(sxf);
			$('input[name="withdraw_account"]').val('');
		});
	})
	function show_memu(_this,a){
		$("body").find(".hidebox").hide();
		$(".memu_"+a).fadeIn();
		$("body").find(".layui-box").removeClass("layui-icon-down").addClass("layui-icon-right");
		$(_this).find("i").removeClass("layui-icon-right").addClass("layui-icon-down");
	}
	function recharge_show(a,b,c){
		$("."+a).fadeIn().siblings(".hidebox").hide();
		$("."+b).fadeIn().siblings(".hidebox").hide();
		$(".memu_"+a).fadeIn();
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