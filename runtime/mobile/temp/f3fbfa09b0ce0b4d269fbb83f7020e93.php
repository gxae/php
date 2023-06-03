<?php /*a:3:{s:65:"/www/wwwroot/61.4.114.53/app/mobile/view/dealings/setaddress.html";i:1663428188;s:60:"/www/wwwroot/61.4.114.53/app/mobile/view/layout/default.html";i:1630206160;s:65:"/www/wwwroot/61.4.114.53/app/mobile/view/./block/foot_script.html";i:1639227710;}*/ ?>
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
 * @Date: 2021-07-11 22:08:23
 * @LastEditTime: 2021-09-12 17:38:01
 * @Description: Forward, no stop
-->
<div class="a-header position-re finance-bg">
	<div class="layui-row">
		<div class="layui-col-xs3">
			<a href="javascript:window.history.go(-1);"><i class="layui-icon layui-icon-left"></i></a>
		</div>
		<div class="layui-col-xs6 text-center">
			<?php echo lang('public_memu.member_incomeset'); ?>
		</div>
		<div class="layui-col-xs3 text-right">
			<a href="<?php echo url('/mobile'); ?>"><i class="layui-icon layui-icon-home"></i></a>
		</div>
	</div>
</div>
<div class="new-bg">
	<!--主体-->
	<div class="dealings-top-left dealings-bg <?php if($coin_id > 0): ?>hidebox<?php endif; ?>" id="kline_lists_box">
		<table class="layui-table" lay-skin="nob" id="list_pro">
			<thead>
			  <tr>
				<th><i class="fa fa-search" aria-hidden="true"></i> <?php echo lang('dealings.select_title'); ?></th>
			  </tr> 
			</thead>
			<tbody id="symbol">
			  <?php if(is_array($pro) || $pro instanceof \think\Collection || $pro instanceof \think\Paginator): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			  <tr data-value="<?php echo htmlentities($vo['title']); ?>" id="left_list_<?php echo htmlentities($vo['id']); ?>" style="cursor:pointer;">
				<td data-value="<?php echo htmlentities($vo['id']); ?>"><a <?php if($coin_id ==$vo['id']): ?>class="active"<?php endif; ?> href="<?php echo url('dealings/setaddress',['coin_id'=>$vo['id']]); ?>"><?php echo htmlentities($vo['title']); ?></a></td>
			  </tr>
			  <?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		  </table>
	</div>
	<div class="main-no mt-10 <?php if($coin_id == 0): ?>hidebox<?php endif; ?>">
		<div class="v-charge-head kline_coin_left">
			<div class="head-item bg-theme">
				<?php echo lang('dealings.coin_title'); ?><span><?php echo htmlentities($plist['title']); ?></span>
				<span class="right"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
			</div>
		</div>
		<div class="layui-container">
			<div class="layui-row white-box">
				<div class="layui-col-xs12">
					<div class="a-form">
						<form class="layui-form" action="">
							<input type="hidden" name="product_id" value="<?php echo htmlentities($plist['id']); ?>">
							<div class="layui-tab usdt-tab layui-tab-brief" lay-filter="tabAddress" id="tabAddress">
								<ul class="layui-tab-title mobile-layui-tab-titles">
									<?php if($plist['withdraw_erc_sxf'] >0): ?><li lay-id="3"><?php echo lang('dealings.erc_title'); ?></li><?php endif; if($plist['withdraw_trc_sxf'] >0): ?><li lay-id="2"><?php echo lang('dealings.trc_title'); ?></li><?php endif; if($plist['withdraw_omni_sxf'] >0): ?><li lay-id="1"><?php echo lang('dealings.omni_title'); ?></li><?php endif; if($plist['withdraw_yhk_sxf'] >0): ?><li lay-id="4">银行卡</li><?php endif; ?>
								</ul>
								<div class="layui-tab-content layui-tab-contents">
									<?php if($plist['withdraw_erc_sxf'] >0): ?>
									<div class="layui-tab-item">
										<label class="a-label"><?php echo lang('dealings.address_title'); ?>：</label>
										<div class="">
										<input type="text" name="withdraw_erc_address" lay-verType="tips" lay-reqText="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('dealings.address_title')); ?>" placeholder="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('dealings.address_title')); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($wlist['withdraw_erc_address']); ?>">
										</div>
									</div>
									<?php endif; if($plist['withdraw_trc_sxf'] >0): ?>
									<div class="layui-tab-item">
										<label class="a-label"><?php echo lang('dealings.address_title'); ?>：</label>
										<div class="">
										<input type="text" name="withdraw_trc_address" lay-verType="tips" lay-reqText="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('dealings.address_title')); ?>" placeholder="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('dealings.address_title')); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($wlist['withdraw_trc_address']); ?>">
										</div>
									</div>
									<?php endif; if($plist['withdraw_omni_sxf'] >0): ?>
									<div class="layui-tab-item">
										<label class="a-label"><?php echo lang('dealings.address_title'); ?>：</label>
										<div class="">
										<input type="text" name="withdraw_omni_address" lay-verType="tips" lay-reqText="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('dealings.address_title')); ?>" placeholder="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('dealings.address_title')); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($wlist['withdraw_omni_address']); ?>">
										</div>
									</div>
									<?php endif; if($plist['withdraw_yhk_sxf'] >0): ?>
                                    <div class="layui-tab-item">
                                        <label class="layui-form-label">银行卡号：</label>
                                        <div class="layui-input-block">
                                            <input type="text" name="yhkdz" lay-verType="tips" lay-reqText="请输入你的银行卡号" placeholder="<?php echo htmlentities($wlist['yhkdz']); ?>" autocomplete="off" class="layui-input" value="">
                                        </div>
                                        <label class="layui-form-label">姓名：</label>
                                        <div class="layui-input-block">
                                            <input type="text" name="yhkxm" lay-verType="tips" lay-reqText="请输入你的银行卡姓名" placeholder="请输入你的银行卡姓名" autocomplete="off" class="layui-input" value="<?php echo htmlentities($wlist['yhkxm']); ?>">
                                        </div>

                                        <label class="layui-form-label">开户行：</label>
                                        <div class="layui-input-block">
                                            <input type="text" name="yhkkhh" lay-verType="tips" lay-reqText="请输入您的银行卡开户商" placeholder="请输入您的银行卡开户行" autocomplete="off" class="layui-input" value="<?php echo htmlentities($wlist['yhkkhh']); ?>">
                                        </div>
                                    </div>
                                    <?php endif; ?>
								</div>
							</div>
							<div class="layui-form-item">
								<label class="a-label"><?php echo lang('incomeset.paypwd'); ?>：</label>
								<div class="">
								<input type="password" name="paypwd" lay-verify="required" lay-verType="tips" lay-reqText="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('incomeset.paypwd')); ?>" placeholder="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('incomeset.paypwd')); ?>" autocomplete="off" class="layui-input">
								</div>
							</div>
							<div class="layui-form-item">
								 <button class="layui-btn layui-btn-normal layui-btn-fluid layui-btn-lg" lay-submit lay-filter="setWithdraw"><?php echo lang('incomeset.set_btn'); ?></button>
							</div>
						</form>
						
							<div class="layui-form-item">
								 <button class="layui-btn layui-btn-gray layui-btn-fluid layui-btn-lg" onclick="window.history.back(-1)"><?php echo lang('public.goback'); ?></button>
							</div>
						
					</div>
					<div class="site-memo">
						<?php echo lang('dealings.set_memo_title'); ?>
						<?php echo lang('dealings.set_memo_content'); ?>
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
	layui.use(['layer', 'jquery', 'form', 'element'], function(){
		var layer = layui.layer
		,$ = layui.jquery
		,form = layui.form;
		var element = layui.element;

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		form.on('submit(setWithdraw)', function(data){
			if(data.field.paypwd){
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
	})
	$(function(){
		$("#tabAddress .layui-tab-title").find("li").eq(0).addClass("layui-this");
		$("#tabAddress .layui-tab-content").find(".layui-tab-item").eq(0).addClass("layui-show");
	})
</script>
</body>
</html>