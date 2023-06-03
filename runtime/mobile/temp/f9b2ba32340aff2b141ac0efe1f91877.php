<?php /*a:3:{s:59:"/www/wwwroot/nsdkqdsdf.com/app/mobile/view/member/team.html";i:1648775646;s:62:"/www/wwwroot/nsdkqdsdf.com/app/mobile/view/layout/default.html";i:1630206160;s:67:"/www/wwwroot/nsdkqdsdf.com/app/mobile/view/./block/foot_script.html";i:1639227710;}*/ ?>
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
 * @Date: 2021-07-08 21:39:08
 * @LastEditTime: 2021-09-09 16:02:05
 * @Description: Forward, no stop
-->
<div class="a-header position-re">
	<a href="javascript:window.history.go(-1);"><i class="layui-icon layui-icon-left"></i></a>
	<div class="layui-inline h-span"><?php echo lang('public_memu.member_team'); ?></div>
</div>
<div class="new-bg">
	<!--主体-->
	<div class="main mt-30">
		<div class="layui-container">
			<div class="layui-row white-box">
				<div class="layui-col-xs12">
					<div class="account-main coinwin-bottom" style="padding: 0px;margin-top:0px;">
						<div class="layui-tab layui-tab-brief">
							<ul class="layui-tab-title">
							  <li class="layui-this"><?php echo lang('public_memu.team_user'); ?></li>
							  <li><?php echo lang('public_memu.team_ma'); ?></li>
							  <a href="<?php echo url('finance/cmfinance'); ?>" class="float-right font-14 mt-10"><?php echo lang('public_memu.team_log'); ?></a>
							</ul>
							<div class="layui-tab-content">
								
								<div class="layui-tab-item layui-show">
									<div class="layui-row text-left">
										<span class="layui-col-xs8"><?php echo lang('public_memu.team_users'); ?>:</span>
										<span class="layui-col-xs4"><?php echo htmlentities($myteam_num); ?></span>
									</div>
									<hr>
									<div class="layui-row mt-10">
										<?php if(is_array($level_member) || $level_member instanceof \think\Collection || $level_member instanceof \think\Paginator): $key = 0; $__LIST__ = $level_member;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
										<div class="layui-col-xs12">
											<div class="myteam-body-btn">
												<div class="panel layui-bg-number">
													<div class="panel-body">
														<div class="panel-title">
															<span class="pull-right layui-badge-dot layui-bg-orange"></span>
															<h5><i class="layui-icon layui-icon-diamond"></i> <?php echo fox_abcdefg($key); ?></h5>
														</div>
														<div class="panel-content">
															<h1 class="no-margins"><?php echo htmlentities($m_num[$key]['num']); ?></h1>
															<p class="small">
																<?php if(fox_team_on($key,1) > 0): ?><?php echo lang('public_memu.team_on_seconds'); ?>:<?php echo fox_team_on($key,1); ?>;<?php endif; if(fox_team_on($key,2) > 0): ?><?php echo lang('public_memu.team_on_coinwin'); ?>:<?php echo fox_team_on($key,2); ?>;<?php endif; if(fox_team_on($key,3) > 0): ?><?php echo lang('public_memu.team_on_recharge'); ?>:<?php echo fox_team_on($key,3); ?>;<?php endif; ?>
															</p>
														</div>
													</div>
												</div>
											</div>        
										</div>
										<?php endforeach; endif; else: echo "" ;endif; ?>
									</div>
								</div>
								<div class="layui-tab-item">
									<div class="layui-row">
										<div class="layui-col-xs12" style="text-align: center;margin-top: 20px;"><img src="<?php echo htmlentities($invite_code_img); ?>" width="120"></div>
										<div class="layui-col-xs12" style="margin-top: 20px;">
											<div class="layui-row text-center line-36">
												<span class="layui-col-xs6"><?php echo lang('member.member_invite_code'); ?></span>
												<span class="layui-col-xs6"><?php echo htmlentities($member['invite_code']); ?></span>
												<span class="layui-col-xs6"><i class="fa fa-qrcode" aria-hidden="true"></i> <a href="javascript:void(0);" onclick="copy();" class="color-blue"><?php echo lang('member.member_invite_copy'); ?></a></span>
<!--												<span class="layui-col-xs6"><i class="fa fa-file-image-o" aria-hidden="true"></i> <a href="javascript:void(0);" onclick="poster();" class="color-blue"><?php echo lang('member.member_poster'); ?></a></span>-->
											</div>
										</div>
									</div>
								</div>
							</div>
						  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="hidebox" id="poster">
	<img src="<?php echo htmlentities($poster); ?>">
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

<script src="/static/mobile/js/clipboard.min.js?v=<?php echo htmlentities($version); ?>"></script>
<script>
	var codeurl = "<?php echo htmlentities($invite_code_url); ?>";
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
	})
	$(function(){
		if(cando == 1){
			$(".layui-tab-title").find("li").removeClass("layui-this");
			$(".layui-tab-content").find('.layui-tab-item').removeClass("layui-show");
			$(".layui-tab-title").find("li").eq(1).addClass("layui-this");
			$(".layui-tab-content").find('.layui-tab-item').eq(1).addClass("layui-show");
		}
	})
	function poster(){
		layer.open({
			type: 1
			,title: false //不显示标题栏
			,closeBtn: false
			,area: ['100%','100%']
			,shade: 0.8
			,id: 'LAY_layuiposter' //设定一个id，防止重复弹出
			,resize: false
			,btn: ["<?php echo lang('member.member_poster_save'); ?>", "<?php echo lang('member.member_poster_no'); ?>"]
			,btnAlign: 'c'
			,moveType: 1 //拖拽模式，0或者1
			,content: $("#poster")
			,yes: function(layero){
				var picurl= $("#poster").find("img").attr("src");
				// alert(picurl);
				savePicture(picurl);
			}
		});
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
</script>
</body>
</html>