<?php /*a:3:{s:62:"/www/wwwroot/nasdaqhome.com/app/mobile/view/coinwin/index.html";i:1630512314;s:63:"/www/wwwroot/nasdaqhome.com/app/mobile/view/layout/default.html";i:1630206160;s:68:"/www/wwwroot/nasdaqhome.com/app/mobile/view/./block/foot_script.html";i:1639227710;}*/ ?>
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
 * @Date: 2021-08-17 15:53:49
 * @LastEditTime: 2021-09-02 00:04:51
 * @Description: Forward, no stop
-->
<div class="a-header position-re layui-rows">
    <div class="layui-col-xs4">
        <a href="javascript:window.history.go(-1);"><i class="layui-icon layui-icon-left"></i></a>
    </div>
	<div class="layui-col-xs4 text-center">
		<?php echo lang('coinwin.title'); ?>
	</div>
	<div class="layui-col-xs4 text-right">
        <a href="<?php echo url('/mobile'); ?>"><i class="layui-icon layui-icon-home"></i></a>
    </div>
</div>
<div class="new-bg">
	<!--主体-->
	<div class="up-top">
		<span class="ex-span"><?php echo lang('coinwin.ad_a'); ?></span>
		<h2><?php echo lang('coinwin.ad_b'); ?></h2>
		<a href="<?php echo url('show/news',['id'=>15]); ?>" class="layui-btn layui-btn-warm layui-btn-lg"><?php echo lang('coinwin.ad_c'); ?></a>
	</div>
	<div class="main-no">
		<div class="layui-container">
			
			<div class="layui-row coinwin-list">
				<?php if(is_array($products) || $products instanceof \think\Collection || $products instanceof \think\Paginator): $i = 0; $__LIST__ = $products;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<div class="layui-col-xs12">
				  <div class="layui-panel">
				  <div class="flag"><?php if($vo['counts']): ?><?php echo lang('coinwin.is_go'); else: ?><?php echo lang('coinwin.is_ready'); ?><?php endif; ?></div>
				   <h3 class="text-center"><?php echo htmlentities($vo['title']); ?></h3>
				   <hr >
				   <div class="layui-row layui-col-space30">
					  <div class="layui-col-xs6">
						  <p class="font-18 text-center"><?php echo lang('coinwin.count_goods',['num'=>$vo['counts']]); ?></p>
					  </div>
					  <div class="layui-col-xs6">
						  <p class="font-25 text-right"><a href="<?php echo url('coinwin/lists',['id'=>$vo['id']]); ?>" class="layui-btn layui-btn-normal btn-sm"><?php echo lang('coinwin.go_buy'); ?></a></p>
					  </div>
				   </div>
				  </div> 
				</div>
			 <?php endforeach; endif; else: echo "" ;endif; ?>
			</div> 
			<div class="layui-clear"></div>
			
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


</body>
</html>