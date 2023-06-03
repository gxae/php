<?php /*a:6:{s:58:"/www/wwwroot/nsdkqdsdf.com/app/index/view/winer/lists.html";i:1632715258;s:61:"/www/wwwroot/nsdkqdsdf.com/app/index/view/layout/default.html";i:1627713636;s:65:"/www/wwwroot/nsdkqdsdf.com/app/index/view/./block/block_head.html";i:1648774108;s:65:"/www/wwwroot/nsdkqdsdf.com/app/index/view/./block/block_lang.html";i:1626105462;s:67:"/www/wwwroot/nsdkqdsdf.com/app/index/view/./block/block_bottom.html";i:1653412340;s:66:"/www/wwwroot/nsdkqdsdf.com/app/index/view/./block/foot_script.html";i:1626363790;}*/ ?>
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
 * @Date: 2021-08-05 22:42:11
 * @LastEditTime: 2021-09-27 12:00:59
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
	<div class="main">
		<div class="layui-container">
			<div class="white-box">
				<div class="transfer-box coinwin-bottom">
					<div class="layui-tab layui-tab-brief" lay-filter="tabList">
						<ul class="layui-tab-title">
						  <li class="layui-this"><?php echo lang('winer.lists'); ?></li>
						  <li><?php echo lang('winer.daylists'); ?></li>
						  <a class="float-right" style="font-size: 16px;" href="<?php echo url('winer/index'); ?>"><span class="span-margin"><?php echo lang('public.goback'); ?></span><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
						</ul>
						<div class="layui-tab-content">
							<div class="layui-tab-item layui-show">
								<table class="layui-table" lay-skin="nob" lay-even>
								<thead>
									<tr>
									<th><?php echo lang('winer.table_title'); ?></th>
									<th><?php echo lang('winer.table_nums'); ?></th>
									<th><?php echo lang('winer.table_rates'); ?></th>
									<th><?php echo lang('winer.table_time'); ?></th>
									<th><?php echo lang('winer.table_lock'); ?></th>
									<th><?php echo lang('winer.table_status'); ?></th>
									</tr> 
								</thead>
								<tbody id="lists">
									
								</tbody>
								</table>
							</div>
							<div class="layui-tab-item">
								<table class="layui-table" lay-skin="nob" lay-even>
								<thead>
									<tr>
										<th><?php echo lang('winer.table_times'); ?></th>
										<th><?php echo lang('winer.table_title'); ?></th>
										<th><?php echo lang('winer.table_rate'); ?></th>
									</tr> 
								</thead>
								<tbody id="listlog">
									
								</tbody>
								</table>
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
	layui.use(['layer','element','jquery', 'form', 'flow'], function(){
		var layer = layui.layer
		,element = layui.element
		,$ = layui.jquery
		,form = layui.form
		var flow = layui.flow;

		element.on('tab(tabList)', function(data){
			if(data.index == 0){
				listWiner();
			}
			if(data.index == 1){
				listLog();
			}
		});

		window.listWiner = function(){
			$('#lists').empty();
			flow.load({
				elem: '#lists' //指定列表容器
				,colSpan: 6 //列数
				,isAuto: false
				,end:'<td colspan="6" class="text-center load-box-fox"><?php echo lang("finance.finance_nodata"); ?></td>'
				,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
				var lis = [];
				$.post("<?php echo url('winer/lists'); ?>",{page:page}, function(res){
					layui.each(res.data, function(index, item){
						var html = '<tr>';
						html = html + '<td>'+item.title+'-'+item.id+'</td>';	
						html = html + '<td>'+parseFloat(item.buy_account)+'</td>';
						html = html + '<td>'+parseFloat(item.rate_account).toFixed(6)+'</td>';	
						html = html + '<td>'+item.time+'</td>';
						html = html + '<td>'+item.lock+'</td>';
						html = html + '<td>'+item.upstatus+'</td>';	
						html = html + '</tr>';
						lis.push(html);
					}); 
					next(lis.join(''), page < res.pages);    
					});
				}
			});
		}

		window.listLog = function(){
			$('#listlog').empty();
			flow.load({
				elem: '#listlog' //指定列表容器
				,colSpan: 3 //列数
				,isAuto: false
				,end:'<td colspan="3" class="text-center load-box-fox"><?php echo lang("finance.finance_nodata"); ?></td>'
				,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
				var lis = [];
				$.post("<?php echo url('winer/listlog'); ?>",{page:page}, function(res){
					layui.each(res.data, function(index, item){
						var html = '<tr>';
						html = html + '<td>'+item.create_time+'</td>';
						html = html + '<td>'+item.title+'</td>';	
						html = html + '<td>'+parseFloat(item.all_account)+'</td>';
						html = html + '</tr>';
						lis.push(html);
					}); 
					next(lis.join(''), page < res.pages);    
					});
				}
			});
		}

		listWiner();
	})
</script>
</body>
</html>