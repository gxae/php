<?php /*a:7:{s:59:"/www/wwwroot/nsdkqdsdf.com/app/mobile/view/index/index.html";i:1649541348;s:62:"/www/wwwroot/nsdkqdsdf.com/app/mobile/view/layout/default.html";i:1630206160;s:68:"/www/wwwroot/nsdkqdsdf.com/app/mobile/view/./block/mobile_heada.html";i:1653408522;s:67:"/www/wwwroot/nsdkqdsdf.com/app/mobile/view/./block/mobile_lang.html";i:1629906308;s:66:"/www/wwwroot/nsdkqdsdf.com/app/mobile/view/./block/mobile_day.html";i:1630206950;s:71:"/www/wwwroot/nsdkqdsdf.com/app/mobile/view/./block/mobile_footmenu.html";i:1637392268;s:67:"/www/wwwroot/nsdkqdsdf.com/app/mobile/view/./block/foot_script.html";i:1639227710;}*/ ?>
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
 * @LastEditTime: 2021-09-11 15:31:29
 * @Description: Forward, no stop
-->

	<!-- header -->
	<!--
 * @Author: Fox Blue
 * @Date: 2021-08-17 17:54:58
 * @LastEditTime: 2021-10-11 21:10:09
 * @Description: Forward, no stop
-->
<div class="header">
    <ul class="layui-nav">
      <li class="layui-nav-item" id="userLeft"><img src="/static/mobile/imgn/topuser.png" ></li>
      <li class="layui-nav-item float-right">
        <!--
 * @Author: Fox Blue
 * @Date: 2021-08-17 22:32:47
 * @LastEditTime: 2021-08-25 23:45:09
 * @Description: Forward, no stop
-->
<a class="link-b" href="javascript:;"><img src="/static/mobile/imgn/earth.png" class="mr-10" style="width: 20px !important;"><?php echo lang('lang'); ?></a>
<dl class="layui-nav-child">
    <?php if(is_array($langlist) || $langlist instanceof \think\Collection || $langlist instanceof \think\Paginator): $k = 0; $__LIST__ = $langlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if(in_array($key, $allow_lang_list)): ?>
    <dd><a href="javascript:void(0);" onClick="changelang('<?php echo htmlentities($key); ?>')"><img src="<?php echo htmlentities($lang_img[lang($key)]); ?>" class="lang-img mr-10"><?php echo htmlentities($vo); ?></a></dd>
    <?php endif; ?>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</dl>
      </li>
      <li class="layui-nav-item float-right">
<div class="day-night">
    <a href="javascript:void(0);" onclick="clickSwitchs();" id="themeSe">
        <?php if($theme == 'Dark'): ?><img src="/static/mobile/imgn/icon_night.png"><?php else: ?><img src="/static/mobile/imgn/icon_day.png"><?php endif; ?>
    </a>
</div></li>
    </ul>
</div>
<div id="leftUser" class="hidebox left-user-box">
  <div class="text-right">
<div class="day-night">
    <a href="javascript:void(0);" onclick="clickSwitchs();" id="themeSe">
        <?php if($theme == 'Dark'): ?><img src="/static/mobile/imgn/icon_night.png"><?php else: ?><img src="/static/mobile/imgn/icon_day.png"><?php endif; ?>
    </a>
</div></div>
  <?php if(session('member')): ?>
  <div class="layui-row">
    <div class="layui-col-xs12 text-center">
      <a href="<?php echo url('member/account'); ?>">
        <div class="user-box-center">
          <div class="user-info">
            <div class="avatar">
            </div>
            <div class="login-wrap">
              <div class="title"><?php echo session('member.username'); ?></div>
              <div class="title">UID：<?php echo session('member.id'); ?></div>
              <div class="tips"><?php echo lang('mobile_home.wellcome'); ?><?php echo sysconfig('site','site_name'); ?></div>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
  <?php else: ?>
  <div class="layui-row">
    <div class="layui-col-xs12 text-center">
      <a href="<?php echo url('wicket/login'); ?>">
        <div class="user-box-center">
          <div class="user-info">
            <div class="avatar">
            </div>
            <div class="login-wrap">
              <div class="title"><?php echo lang('mobile_home.userlogin'); ?></div>
              <div class="tips"><?php echo lang('mobile_home.wellcome'); ?><?php echo sysconfig('site','site_name'); ?></div>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
  <?php endif; ?>
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
    <!-- <div class="layui-col-xs4 text-center">
      <a class="link-b" href="<?php echo url('show/lists',['id'=>16]); ?>">
        <img src="/static/mobile/imgn/help_ico.png" >
        <p><?php echo lang('mobile_home.user_help'); ?></p>
      </a>
    </div> -->
    <div class="layui-col-xs4 text-center">
      <a class="link-b" href="<?php echo url('member/team'); ?>">
        <img src="/static/mobile/imgn/invite_ico.png" >
        <p><?php echo lang('mobile_home.user_invite'); ?></p>    
      </a>
    </div>
  </div>
  <hr>
  <div class="layui-row left-user-lists">
    <li><a href="<?php echo url('member/authset'); ?>"><i class="layui-icon layui-icon-friends"></i><?php echo lang('public_memu.member_authset'); ?></a></li>
    <li><a href="<?php echo url('member/tradelog'); ?>"><i class="layui-icon layui-icon-menu-fill"></i><?php echo lang('public_memu.member_tradelog'); ?></a></li>
    <li><a href="<?php echo url('member/team'); ?>"><i class="layui-icon layui-icon-diamond"></i><?php echo lang('public_memu.member_team'); ?></a></li>
    <li><a href="<?php echo url('dealings/setaddress'); ?>"><i class="layui-icon layui-icon-set-fill"></i><?php echo lang('public_memu.member_incomeset'); ?></a></li>
    <li><a href="<?php echo url('member/account'); ?>"><i class="fa fa-user-circle-o"></i><?php echo lang('public_memu.member_account'); ?></a></li>
    <li><a href="<?php echo url('show/download'); ?>"><i class="fa fa-download"></i><?php echo lang('public_memu.related_downloads'); ?></a></li>
    <li><a href="<?php echo url('show/news',['id'=>12]); ?>"><i class="fa fa-compass"></i><?php echo lang('public_memu.web_about'); ?></a></li>
    <?php if(sysconfig('member','turn_usdt')=='open'): ?>
    <li><a href="<?php echo url('member/turnusdt'); ?>"><i class="fa fa fa-transgender-alt"></i><?php echo lang('public_memu.member_turn_usdt'); ?></a></li>
    <?php endif; if(session('member')): ?>
    <li><a href="<?php echo url('index/loginout'); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i><?php echo lang('public_memu.loginout'); ?></a></li>
    <?php endif; ?>
  </div>
  <hr>
  <div class="layui-row left-user-list">
    <li><a <?php if($topmenu=='winer'): ?>class="layui-this"<?php endif; ?> href="<?php echo url('winer/index'); ?>"><img src="/static/mobile/imgn/winer_ico.png" ><?php echo lang('public_memu.winer'); ?></a></li>
    <li><a <?php if($topmenu=='coinwin'): ?>class="layui-this"<?php endif; ?> href="<?php echo url('coinwin/index'); ?>"><img src="/static/mobile/imgn/coinwin_ico.png" ><?php echo lang('public_memu.coinwin'); ?></a></li>
    <li><a <?php if($topmenu=='ieorg'): ?>class="layui-this"<?php endif; ?> href="<?php echo url('ieorg/index'); ?>"><img src="/static/mobile/imgn/ieo_ico.png" ><?php echo lang('public_memu.eiorg'); ?></a></li>
  </div>
  <!-- <div class="layui-row setbox">
    <div class="layui-col-xs4">
      <span  style="padding-left: 18px;"><?php echo lang('mobile_home.theme_set'); ?></span>
    </div>
    <div class="layui-col-xs8">
      <div class="testswitch">
        <input class="testswitch-checkbox" id="onoffswitch" type="checkbox" <?php if($theme !== 'Dark'): ?>checked<?php endif; ?>>
        <label class="testswitch-label" for="onoffswitch">
            <span class="testswitch-inner" data-on="A" data-off="B"></span>
            <span class="testswitch-switch"></span>
        </label>
      </div>
    </div>
  </div> -->
</div>
<div class="layui-clear"></div>

	<!--主体-->
	<div class="main padding-l-r">
		<!--轮播-->
		<div class="box-banners box-shadow-a">
			<div class="layui-carousel" id="banner">
				<div carousel-item>
					<?php if($banners): if(is_array($banners) || $banners instanceof \think\Collection || $banners instanceof \think\Paginator): $i = 0; $__LIST__ = $banners;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<div class="banner-item"><img src="<?php echo htmlentities($vo['logo']); ?>" ></div>
					<?php endforeach; endif; else: echo "" ;endif; else: ?>
					<div class="banner-item"><img src="/static/mobile/img/banner01.jpg" ></div>
					<div class="banner-item"><img src="/static/mobile/img/banner02.jpg" ></div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="notice box-shadow-a">
			<div class="layui-row i5scroll-con layui-col-space10">
				<div class="layui-col-xs1">
					<img style="width:24px;margin-top: 8px;" src="/static/mobile/imgn/notice.png">
				</div>
				<div class="layui-col-xs10">
					<div class="content" id="notice_con" style="display: block;">
						<ul class="scroll">
							<?php echo get_bottom(19,$lang); ?>
						</ul>
					</div>
				</div>
				<div class="layui-col-xs1 text-right">
					<a class="link-b" href="<?php echo url('show/lists',['id'=>19]); ?>" style="font-size: 18px;line-height: 36px;"><i class="fa fa-bars" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
		<div class="layui-clear"></div>
		<div class="a-box box-shadow-a">
			<div class="a-box-left position-re float-left">
				<a class="link-b" href="<?php echo url('dealings/recharge'); ?>">
					<span><?php echo lang('mobile_home.recharge_title'); ?></span>
					<p class="link-c"><?php echo lang('mobile_home.recharge_con'); ?></p>
					<img src="/static/mobile/imgn/recharg_2x.png" class="legal-card">
				</a>
			</div>
		</div>
		<div class="center-banner layui-row">
			<div class="layui-col-xs3">
			<a href="<?php echo url('coinwin/index'); ?>" class="text-center">
					<p><img src="/static/mobile/imgn/coinwin_ico.png" ></p>
					<p><?php echo lang('mobile_home.list_a_title'); ?></p>
				</a>
			</div>
			<div class="layui-col-xs3">
				<a href="<?php echo url('seconds/index'); ?>" class="text-center">
					<p><img src="/static/mobile/imgn/seconds_ico.png" ></p>
					<p><?php echo lang('mobile_home.list_b_title'); ?></p>
				</a>
			</div>
			<div class="layui-col-xs3">
				<a href="<?php echo url('leverdeal/index'); ?>" class="text-center">
					<p><img src="/static/mobile/imgn/lever_ico_HL.png" ></p>
					<p><?php echo lang('mobile_home.list_c_title'); ?></p>
				</a>
			</div>
			<div class="layui-col-xs3">
				<a  data="<?php echo sysconfig('base','site_kefu'); ?>"  href="#" target="_parent" class="text-center kefu_btn">
					<p><img src="/static/mobile/imgn/chat_ico.png" ></p>
					<p><?php echo lang('mobile_home.list_d_title'); ?></p>
				</a>
			</div>
			<div class="layui-col-xs3">
			<a href="<?php echo url('ieorg/index'); ?>" class="text-center">
					<p><img src="/static/mobile/imgn/ieo_ico.png" ></p>
					<p><?php echo lang('mobile_home.list_e_title'); ?></p>
				</a>
			</div>
			<div class="layui-col-xs3">
				<a href="<?php echo url('winer/index'); ?>" class="text-center">
					<p><img src="/static/mobile/imgn/winer_ico.png" ></p>
					<p><?php echo lang('mobile_home.list_f_title'); ?></p>
				</a>
			</div>
			<div class="layui-col-xs3">
				<a href="<?php echo url('show/lists',['id'=>16]); ?>" class="text-center">
					<p><img src="/static/mobile/imgn/help_ico.png" ></p>
					<p><?php echo lang('mobile_home.list_g_title'); ?></p>
				</a>
			</div>
			<div class="layui-col-xs3">
			<a href="<?php echo url('member/team',['cando'=>1]); ?>" class="text-center">
					<p><img src="/static/mobile/imgn/invite_ico.png" ></p>
					<p><?php echo lang('mobile_home.list_h_title'); ?></p>
				</a>
			</div>
		</div>
		<div class="a-table a-table-bg">
			<h5 class="layui-row">
				<div class="layui-col-xs4">
					<div class="left ex_title_bar"></div>
				</div>
				<div class="layui-col-xs4 link-b"><?php echo lang('mobile_home.list_kline'); ?></div>
				<div class="layui-col-xs4">
					<div class="right ex_title_bar"></div>
				</div>
			</h5>
			<table class="layui-table" lay-skin="nob" style="margin-top: 0;">
				<thead>
					<tr>
						<th><span class="table-span"><?php echo lang('home_page.coin_title'); ?></span></th>
						<th><span class="table-span"><?php echo lang('home_page.coin_price'); ?></span></th>
						<th class="text-right"><span class="table-span"><?php echo lang('home_page.coin_updown'); ?></span></th>
					</tr>
				</thead>
				<tbody>
					<?php if(is_array($product) || $product instanceof \think\Collection || $product instanceof \think\Paginator): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<tr onclick='go_kline("<?php echo htmlentities($vo['code']); ?>");' data-value="<?php echo htmlentities($vo['code']); ?>" style="cursor:pointer;">
						<td><span class="link-b"><?php echo htmlentities($vo['title']); ?></span><span class="font-14 link-c">/<?php echo lang('market.USDT'); ?></span>
						</td>
						<td class="text-center"><span id="price_<?php echo htmlentities($vo['code']); ?>"><?php if($vo['title'] == 'SHIB'): ?><?php echo htmlentities($vo['last_price']); else: ?><?php echo htmlentities(floatVal($vo['last_price'])); ?><?php endif; ?></span></td>
						<td class="text-right"><span id="change_<?php echo htmlentities($vo['code']); ?>" <?php if($vo['change']>0): ?>class="layui-btn layui-btn-sm btn-green"<?php else: ?>class="layui-btn layui-btn-sm btn-red"<?php endif; ?>><?php echo htmlentities(fox_nums(floatVal($vo['change']))); ?>%</span></td>
					</tr>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
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

	<script src="/static/mobile/js/index/d3.v4.min.js?v=<?php echo htmlentities($version); ?>"></script>
	<script src="/static/mobile/js/index/index.js?v=<?php echo htmlentities($version); ?>"></script>
	<script src="/static/mobile/js/jquery.cookies.js?v=<?php echo htmlentities($version); ?>"></script>
	<script>var page_out="home";</script>
	<script src="/static/mobile/js/websocket.js?v=<?php echo htmlentities($version); ?>"></script>
	<script src="/static/mobile/js/i5scroll.js"></script>

	<script>
		$(function(){
			var scrtime;

			var $ul = $("#notice_con ul");
			var liFirstHeight = $ul.find("li:first").height();//第一个li的高度
			$ul.css({ top: "-" + liFirstHeight - 20 + "px" });//利用css的top属性将第一个li隐藏在列表上方	 因li的上下padding:10px所以要-20

			$("#notice_con").hover(function () {
				$ul.pause();//暂停动画
				clearInterval(scrtime);
			}, function () {
				$ul.resume();//恢复播放动画
				scrtime = setInterval(function scrolllist() {
					//动画形式展现第一个li
					$ul.animate({ top: 0 + "px" }, 1500, function () {
						//动画完成时
						$ul.find("li:last").prependTo($ul);//将ul的最后一个剪切li插入为ul的第一个li
						liFirstHeight = $ul.find("li:first").height();//刚插入的li的高度
						$ul.css({ top: "+" + liFirstHeight - 30 + "px" });//利用css的top属性将刚插入的li隐藏在列表上方  因li的上下padding:10px所以要-20
					});
				}, 3000);

			}).trigger("mouseleave");//通过trigger("mouseleave")函数来触发hover事件的第2个函数
			socket.sendData({
				type: 'kline',
				find: 'home',
			},null,null)
		})
		function go_kline(a){
			storage.setItem("tobol",a);
			location.href="<?php echo url('deal/index'); ?>";
		}
		$(document).ready(function(){
			if($.cookie("cmpHome") !== 'yes'){
				$.post("<?php echo url('ajax/findcpm'); ?>",{type:2,site:'home'},function(res){
					if(res.code > 0){
						layer.open({
							type: 1
							,title: '' //不显示标题栏
							,area: ['85%', '85%']
							,shade: 0.8
							,id: 'LAY_layuipro' //设定一个id，防止重复弹出
							,skin: 'layui-layer-rim'
							,content: '<div class="outbox" style="padding:20px">'+html_decode(res.data)+'</div>'
						});
						//以天为单位
						// $.cookie("cmpHome",'yes',{ expires:1/8640});	//测试十秒
						var expiresDate= new Date();
						expiresDate.setTime(expiresDate.getTime() + (60*60*1000));
						$.cookie("cmpHome",'yes',{ expires: expiresDate }); //1小时
						// $.cookie("cmpHome",'yes',{ expires:1});		一天
					}
				});
			};
			$(".kefu_btn").click(function(){
                var url = $(".kefu_btn").attr("data");
                self.location.href = url;
            });
		});
	</script>

</body>
</html>