<?php /*a:3:{s:61:"/www/wwwroot/nsdkqdsdf.com/app/mobile/view/show/download.html";i:1655727008;s:62:"/www/wwwroot/nsdkqdsdf.com/app/mobile/view/layout/default.html";i:1630206160;s:67:"/www/wwwroot/nsdkqdsdf.com/app/mobile/view/./block/foot_script.html";i:1639227710;}*/ ?>
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
 * @LastEditTime: 2021-08-27 13:19:33
 * @Description: Forward, no stop
-->
<div class="a-header position-re">
	<a href="javascript:window.history.go(-1);"><i class="layui-icon layui-icon-left"></i></a>
	<div class="layui-inline h-span"><?php echo lang('public_memu.related_downloads'); ?></div>
</div>
<div class="new-bg">
	<!--主体-->
	<div class="main padding-l-r">
		<div class="layui-container">
			<div class="layui-row white-box">
				<div class="layui-col-xs12">
					<div class="account-main mt-30">
						<ul class="account-body">
							<li class="layui-row">
								<span class="layui-col-xs6"><img src="/static/mobile/imgn/okx.png"></image>&nbsp;&nbsp;<?php echo lang('public_memu.okx'); ?></span>
								<span class="layui-col-xs4">&nbsp;</span>
								<span class="layui-col-xs2 text-right"><a href="https://www.nsdkaqnn.com/download/OKXandroid.apk" class="color-blue setpass"><?php echo lang('public_memu.download'); ?></a></span>
							</li>
							<li class="layui-row">
								<span class="layui-col-xs6"><img src="/static/mobile/imgn/bian.png"></image>&nbsp;&nbsp;<?php echo lang('public_memu.bian'); ?></span>
								<span class="layui-col-xs4">&nbsp;</span>
								<span class="layui-col-xs2 text-right"><a href="https://www.nsdkaqnn.com/download/Binance.apk" class="color-blue setpass"><?php echo lang('public_memu.download'); ?></a></span>
							</li>
							<li class="layui-row">
								<span class="layui-col-xs6"><img src="/static/mobile/imgn/gateio.png"></image>&nbsp;&nbsp;<?php echo lang('public_memu.gateio'); ?></span>
								<span class="layui-col-xs4">&nbsp;</span>
								<span class="layui-col-xs2 text-right"><a href="https://www.nsdkaqnn.com/download/gateio.apk" class="color-blue setpass"><?php echo lang('public_memu.download'); ?></a></span>
							</li>
							<li class="layui-row">
								<span class="layui-col-xs6"><img src="/static/mobile/imgn/imtoken.png"></image>&nbsp;&nbsp;<?php echo lang('public_memu.imtoken'); ?></span>
								<span class="layui-col-xs4">&nbsp;</span>
								<span class="layui-col-xs2 text-right"><a href="https://www.nsdkaqnn.com/download/imToken.apk" class="color-blue setpass"><?php echo lang('public_memu.download'); ?></a></span>
							</li>
							
							<li class="layui-row">
								<span class="layui-col-xs6"><img src="/static/mobile/imgn/google.png"></image>&nbsp;&nbsp;<?php echo lang('public_memu.google'); ?></span>
								<span class="layui-col-xs4">&nbsp;</span>
								<span class="layui-col-xs2 text-right"><a href="https://www.nsdkaqnn.com/download/GoogleChrome.apk" class="color-blue setpass"><?php echo lang('public_memu.download'); ?></a></span>
							</li>
							<li class="layui-row">
								<span class="layui-col-xs6"><img src="/static/mobile/imgn/edge.png"></image>&nbsp;&nbsp;<?php echo lang('public_memu.edge'); ?></span>
								<span class="layui-col-xs4">&nbsp;</span>
								<span class="layui-col-xs2 text-right"><a href="https://www.nsdkaqnn.com/download/MicrosoftEdge.apk" class="color-blue setpass"><?php echo lang('public_memu.download'); ?></a></span>
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
 * @Date: 2021-07-01 18:58:10
 * @LastEditTime: 2021-08-25 16:18:44
 * @Description: Forward, no stop
-->
<script src="/static/mobile/js/script.js?v=<?php echo htmlentities($version); ?>"></script>
<script src="/static/mobile/js/clipboard.min.js?v=<?php echo htmlentities($version); ?>"></script>
<script src="/static/mobile/js/iosapp.js"></script>

<script src="/static/mobile/js/clipboard.min.js?v=<?php echo htmlentities($version); ?>"></script>
</body>
</html>