<?php /*a:7:{s:67:"/www/wwwroot/www.nsdkaqnn.com/app/index/view/finance/opfinance.html";i:1648864754;s:64:"/www/wwwroot/www.nsdkaqnn.com/app/index/view/layout/default.html";i:1627713636;s:68:"/www/wwwroot/www.nsdkaqnn.com/app/index/view/./block/block_head.html";i:1648774108;s:68:"/www/wwwroot/www.nsdkaqnn.com/app/index/view/./block/block_lang.html";i:1626105462;s:69:"/www/wwwroot/www.nsdkaqnn.com/app/index/view/./finance/left_menu.html";i:1638969322;s:70:"/www/wwwroot/www.nsdkaqnn.com/app/index/view/./block/block_bottom.html";i:1653412340;s:69:"/www/wwwroot/www.nsdkaqnn.com/app/index/view/./block/foot_script.html";i:1626363790;}*/ ?>
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
 * @LastEditTime: 2021-10-08 17:48:53
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
							<?php echo lang('finance.op_title'); ?>： <span>$ <?php echo htmlentities($sum_usd); ?></span>
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
								<td><?php echo htmlentities($vo['op_money']); ?></td>
								<td><?php echo htmlentities($vo['lock_op_money']); ?></td>
								<td><?php echo htmlentities($vo['op_usd']); ?></td>
								<td class="operation">
									<a href="javascript:void(0) ;" onclick='recharge_show("<?php echo htmlentities(strtolower($vo['title'])); ?>","log","<?php echo htmlentities($vo['id']); ?>");' class="color-blue"><?php echo lang('finance.right_log'); ?></a>
									<a href="<?php echo url('finance/transfer',['type'=>3]); ?>" class="color-blue"><?php echo lang('finance.right_transfer'); ?></a>
								</td>
								</tr>
								<tr class='<?php echo htmlentities(strtolower($vo['title'])); ?> hidebox'>
									<td colspan="5">
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

<script>
	layui.use(['layer', 'jquery', 'form', 'element', 'flow'], function(){
		var layer = layui.layer
		,$ = layui.jquery
		,form = layui.form;
		var element = layui.element;
		var flow = layui.flow;

		window.findlog = function(a,b,id){
			$('#'+a+'_'+b).empty();
			flow.load({
			elem: '#'+a+'_'+b //指定列表容器
			,colSpan:6 //列数
			,end:'<td colspan="6"><?php echo lang("finance.finance_nodata"); ?></td>'
			,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
			var lis = [];
			$.post("<?php echo url('finance/findlog'); ?>",{id:id,page:page,type:3,from:3,to:3}, function(res){
				layui.each(res.data, function(index, item){
				lis.push('<tr><td>'+ item.create_time +'</td><td>'+ item.title +'</td><td>'+ item.type +'</td><td>'+ item.all_account +'</td><td>'+ item.account_sxf +'</td><td>'+ item.status +'</td></tr>');
				}); 
				next(lis.join(''), page < res.pages);    
			});
			}
		});
		}
	})
	function recharge_show(a,b,c){
		$("."+a).fadeIn().siblings(".hidebox").hide();
		$("."+b).fadeIn().siblings(".hidebox").hide();
		if(b==='log'){
			findlog(a,b,c);
		}
	}
	$(".close-hide").click(function() {
		$(".hidebox").hide()
	});
</script>

</body>
</html>