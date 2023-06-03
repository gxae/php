<?php /*a:3:{s:65:"/www/wwwroot/www.nsdkaqnn.com/app/mobile/view/member/authset.html";i:1649538836;s:65:"/www/wwwroot/www.nsdkaqnn.com/app/mobile/view/layout/default.html";i:1630206160;s:70:"/www/wwwroot/www.nsdkaqnn.com/app/mobile/view/./block/foot_script.html";i:1639227710;}*/ ?>
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
<div class="a-header position-re">
	<a href="javascript:window.history.go(-1);"><i class="layui-icon layui-icon-left"></i></a>
	<div class="layui-inline h-span"><?php echo lang('public_memu.member_authset'); ?></div>
</div>
<div class="new-bg">
	<!--主体-->
	<div class="main-no padding-l-r mt-10">
		<?php if($auth && $auth=='wno'): ?>
		<div class="layui-bg-orange text-center line-36"><?php echo lang('public_memu.member_authset_wno'); ?></div>
		<?php endif; ?>
		<div class="a-form">
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
			<?php if($card['status'] == 0): ?>
			<form class="layui-form" action="">
				<?php if($card['card_a'] && $card['card_b'] && $card['card_c']): ?>
				<div class="layui-form-item text-center">
					<p class="color-blue"><?php echo lang('authset.card_status_0'); ?></p>
				</div>
				<div class="layui-form-item full-btn" style="padding-top: 30px;">
					<a href="javascript:window.history.go(-1);" class="layui-btn layui-btn-normal layui-btn-fluid layui-btn-lg"><?php echo lang('public.goback'); ?></a>
				</div>
				<?php else: ?>
				<div class="layui-form-item">
					<label class="a-label"><?php echo lang('authset.name'); ?>：</label>
					<div class="">
					<input type="text" name="name" lay-verify="required" lay-verType="tips" lay-reqText="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('authset.name')); ?>" placeholder="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('authset.name')); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities((isset($card['name']) && ($card['name'] !== '')?$card['name']:'')); ?>">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="a-label"><?php echo lang('authset.card'); ?>：</label>
					<div class="">
					<input type="text" name="card" lay-verify="required" lay-verType="tips" lay-reqText="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('authset.card')); ?>" placeholder="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('authset.card')); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities((isset($card['card']) && ($card['card'] !== '')?$card['card']:'')); ?>">
					</div>
				</div>
				<div class="layui-form-item">
					<p><?php echo lang('authset.content'); ?></p>
				</div>
				<div class="layui-form-item">
					<div class="a-flex text-center sfz-box">
						<div class="a-flex-item" id="card_a_btn">
							<?php if($card['card_a']): ?><img src="<?php echo htmlentities($card['card_a']); ?>" width="100%" height="100%"><?php else: ?><img src="/static/index/img/sf_zm.png" ><?php endif; ?>
							<input type="hidden" id="card_a" name="card_a" value="">
						</div>
						<div class="a-flex-item" id="card_b_btn">
							<?php if($card['card_b']): ?><img src="<?php echo htmlentities($card['card_b']); ?>" width="100%" height="100%"><?php else: ?><img src="/static/index/img/sf_fm.png" ><?php endif; ?>
							<input type="hidden" id="card_b" name="card_b" value="">
						</div>
						<!--<div class="a-flex-item" id="card_c_btn">-->
							<!--<?php if($card['card_c']): ?><img src="<?php echo htmlentities($card['card_c']); ?>" width="100%" height="100%"><?php else: ?><img src="/static/index/img/sf_sc.png" ><?php endif; ?>-->
							<!--<input type="hidden" id="card_c" name="card_c" value="">-->
						<!--</div>-->
					</div>
				</div>
				<div class="layui-form-item full-btn" style="padding-top: 30px;">
					<button class="layui-btn layui-btn-normal layui-btn-fluid layui-btn-lg" lay-submit lay-filter="setCard"><?php echo lang('authset.form_btn'); ?></button>
				</div>
				<?php endif; ?>
			</form>
			<?php elseif($card['status'] == 2): ?>
			<form class="layui-form" action="">
				<div class="layui-form-item text-center">
					<?php if($card['card_a'] && $card['card_b'] && $card['card_c']): ?>
					<p class="color-blue"><?php echo lang('authset.card_status_2'); ?></p>
					<?php endif; if($card['status'] == 2 && $card['remark']): ?>
					<p class="color-red"><?php echo html_entity_decode(htmlspecialchars_decode(nl2br($card['remark']))); ?></p>
					<?php endif; ?>
				</div>
				<div class="layui-form-item">
					<label class="a-label"><?php echo lang('authset.name'); ?>：</label>
					<div class="">
					<input type="text" name="name" lay-verify="required" lay-verType="tips" lay-reqText="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('authset.name')); ?>" placeholder="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('authset.name')); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities((isset($card['name']) && ($card['name'] !== '')?$card['name']:'')); ?>">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="a-label"><?php echo lang('authset.card'); ?>：</label>
					<div class="">
					<input type="text" name="card" lay-verify="required" lay-verType="tips" lay-reqText="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('authset.card')); ?>" placeholder="<?php echo fox_all_replace(lang('wicket_page.please_input'),lang('authset.card')); ?>" autocomplete="off" class="layui-input" value="<?php echo htmlentities((isset($card['card']) && ($card['card'] !== '')?$card['card']:'')); ?>">
					</div>
				</div>
				<div class="layui-form-item">
					<p><?php echo lang('authset.content'); ?></p>
				</div>
				<div class="layui-form-item">
					<div class="a-flex text-center sfz-box">
						<div class="a-flex-item" id="card_a_btn">
							<?php if($card['card_a']): ?><img src="<?php echo htmlentities($card['card_a']); ?>" width="100%" height="100%"><?php else: ?><img src="/static/index/img/sf_zm.png" ><?php endif; ?>
							<input type="hidden" id="card_a" name="card_a" value="">
						</div>
						<div class="a-flex-item" id="card_b_btn">
							<?php if($card['card_b']): ?><img src="<?php echo htmlentities($card['card_b']); ?>" width="100%" height="100%"><?php else: ?><img src="/static/index/img/sf_fm.png" ><?php endif; ?>
							<input type="hidden" id="card_b" name="card_b" value="">
						</div>
						<div class="a-flex-item" id="card_c_btn">
							<?php if($card['card_c']): ?><img src="<?php echo htmlentities($card['card_c']); ?>" width="100%" height="100%"><?php else: ?><img src="/static/index/img/sf_sc.png" ><?php endif; ?>
							<input type="hidden" id="card_c" name="card_c" value="">
						</div>
					</div>
				</div>
				<div class="layui-form-item full-btn" style="padding-top: 30px;">
						<button class="layui-btn layui-btn-normal layui-btn-fluid layui-btn-lg" lay-submit lay-filter="setCard"><?php echo lang('authset.form_btn_re'); ?></button>
				</div>
			</form>
			<?php elseif($card['status'] == 1): ?>
			<div class="layui-form">
				<div class="layui-form-item text-center">
					<p class="color"><?php echo lang('authset.card_status_1'); ?></p>
				</div>
			</div>
			<div class="layui-form-item full-btn" style="padding-top: 30px;">
				<a href="javascript:window.history.go(-1);" class="layui-btn layui-btn-normal layui-btn-fluid layui-btn-lg"><?php echo lang('public.goback'); ?></a>
			</div>
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
					$('#card_a_btn').find('img').css({'width':'100%','height':'100%'});
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
					$('#card_b_btn').find('img').css({'width':'100%','height':'100%'});
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
					$('#card_c_btn').find('img').css({'width':'100%','height':'100%'});
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