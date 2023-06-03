<?php /*a:3:{s:65:"/www/wwwroot/nsdkqdsdf.com/app/mobile/view/dealings/recharge.html";i:1634751534;s:62:"/www/wwwroot/nsdkqdsdf.com/app/mobile/view/layout/default.html";i:1630206160;s:67:"/www/wwwroot/nsdkqdsdf.com/app/mobile/view/./block/foot_script.html";i:1639227710;}*/ ?>
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
 * @LastEditTime: 2021-09-11 17:24:13
 * @Description: Forward, no stop
-->
<div class="a-header position-re finance-bg">
	<div class="layui-row">
		<div class="layui-col-xs3">
			<a href="javascript:window.history.go(-1);"><i class="layui-icon layui-icon-left"></i></a>
		</div>
		<div class="layui-col-xs6 text-center">
			<?php echo lang('dealings.recharge_top_title'); ?>
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
				<td data-value="<?php echo htmlentities($vo['id']); ?>"><a <?php if($coin_id ==$vo['id']): ?>class="active"<?php endif; ?> href="<?php echo url('dealings/recharge',['coin_id'=>$vo['id']]); ?>"><?php echo htmlentities($vo['title']); ?></a></td>
			  </tr>
			  <?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		  </table>
	</div>
	<div class="main-no mt-10 <?php if($coin_id == 0): ?>hidebox<?php endif; ?>">
		<div class="v-charge-head kline_coin_left">
			<div class="head-item bg-theme">
				<?php echo lang('dealings.recharge_title'); ?><span><?php echo htmlentities($plist['title']); ?></span>
				<span class="right"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
			</div>
		</div>
		<div class="layui-container">
			<div class="layui-row white-box">
				<div class="layui-col-xs12">
					<div class="a-form">
						<form class="layui-form" action="">
							<input type="hidden" name="wallet_id" value="<?php echo htmlentities($wlist['id']); ?>">
							<input type="hidden" name="product_id" value="<?php echo htmlentities($plist['id']); ?>">
							<div class="layui-tab usdt-tab layui-tab-brief" lay-filter="tabRecharge" id="tabRecharge">
								<ul class="layui-tab-title mobile-layui-tab-titles">
							<?php if(!empty($plist['trc_address'])): ?><li lay-id="2"><?php echo lang('dealings.trc_title'); ?></li><?php endif; if(!empty($plist['erc_address'])): ?><li lay-id="3"><?php echo lang('dealings.erc_title'); ?></li><?php endif; if(!empty($plist['omni_address'])): ?><li lay-id="1"><?php echo lang('dealings.omni_title'); ?></li><?php endif; if(!empty($plist['pay_address'])): ?><li lay-id="4"><?php echo lang('dealings.other_title'); ?></li><?php endif; ?>
								</ul>
								<div class="layui-tab-content layui-tab-contents">
								    	<?php if(!empty($plist['trc_address'])): ?>
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
												</div> <br>
												<div class="layui-col-xs7" style="width: 86.33333333%;">
													<input type="text" name="trc_address" placeholder="<?php echo htmlentities($plist['title']); ?><?php echo lang('dealings.recharge_addr_title'); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($plist['trc_address']); ?>" style="display:none"><?php echo htmlentities($plist['trc_address']); ?>
												</div>
												<div style="text-align: center;">
													<button type="button" onclick='copy("<?php echo htmlentities($plist['trc_address']); ?>");' class="layui-btn layui-btn-sm layui-btn-normal" style="width:160px;"><?php echo lang('public.copy'); ?></button>
												</div>
											</div>
										</div>
									</div>
									<?php endif; if(!empty($plist['erc_address'])): ?>
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
												</div> <br>
												<div class="layui-col-xs7" style="width: 86.33333333%;">
													<input type="text" name="erc_address" placeholder="<?php echo htmlentities($plist['title']); ?><?php echo lang('dealings.recharge_addr_title'); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($plist['erc_address']); ?>" style="display:none"><?php echo htmlentities($plist['erc_address']); ?>
												</div>
												<div style="text-align: center;">
													<button type="button" onclick='copy("<?php echo htmlentities($plist['erc_address']); ?>");' class="layui-btn layui-btn-sm layui-btn-normal" style="width:160px;"><?php echo lang('public.copy'); ?></button>
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
												</div> <br>
												<div class="layui-col-xs7" style="width: 86.33333333%;">
													<input type="text" name="omni_address" placeholder="<?php echo htmlentities($plist['title']); ?><?php echo lang('dealings.recharge_addr_title'); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($plist['omni_address']); ?>" style="display:none"> <?php echo htmlentities($plist['omni_address']); ?>
												</div>
												<div style="text-align: center;">
													<button type="button" onclick='copy("<?php echo htmlentities($plist['omni_address']); ?>");' class="layui-btn layui-btn-sm layui-btn-normal" style="width:160px;"><?php echo lang('public.copy'); ?></button>
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
												</div> <br>
												<div class="layui-col-xs7" style="width: 86.33333333%;">
													<input type="text" name="pay_address" placeholder="<?php echo htmlentities($plist['title']); ?><?php echo lang('dealings.recharge_addr_title'); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities($plist['pay_address']); ?>" style="display:none"> <?php echo htmlentities($plist['pay_address']); ?>
												</div>
												<div style="text-align: center;">
													<button type="button" onclick='copy("<?php echo htmlentities($plist['pay_address']); ?>");' class="layui-btn layui-btn-sm layui-btn-normal" style="width:160px;"><?php echo lang('public.copy'); ?></button>
												</div>
											</div>
										</div>
									</div>
									<?php endif; ?>
								</div>
							</div>
							<input type="hidden" id="usdt_recharge_type" name="usdt_recharge_type" value="3">
							<div class="layui-form-item">
								<label class="a-label"><?php echo htmlentities($plist['title']); ?><?php echo lang('finance.recharge_num'); ?></label>
								<div class="">
									<input type="text" name="recharge_account" lay-verify="required|recharge" lay-verType="tips" lay-reqText="<?php echo lang('finance.recharge_num_must'); ?>" placeholder="<?php echo htmlentities($plist['title']); ?><?php echo lang('finance.recharge_num'); ?>" autocomplete="off" class="layui-input">
								</div>
							</div>
							<div class="layui-form-item">
								<label class="a-label"><?php echo htmlentities($plist['title']); ?><?php echo lang('finance.recharge_pic'); ?></label>
								<div class="">
									<input type="text" name="recharge_pic" readonly lay-verify="required" lay-verType="tips" lay-reqText="<?php echo lang('finance.recharge_pic_must'); ?>" placeholder="<?php echo htmlentities($plist['title']); ?><?php echo lang('finance.recharge_pic'); ?>" autocomplete="off" class="layui-input">
								</div>
								<button type="button" class="layui-btn layui-btn-fluid layui-btn-warm up-pic" >
									<i class="layui-icon">&#xe67c;</i><?php echo lang('finance.recharge_uppic'); ?>
									</button>
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
                    $('.up-pic').parent().find('input[name="recharge_pic"]').val(res.data.src);
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