<?php /*a:5:{s:67:"/www/wwwroot/61.4.114.53/app/mobile/view/finance/yingkuitongji.html";i:1639119248;s:60:"/www/wwwroot/61.4.114.53/app/mobile/view/layout/default.html";i:1630206160;s:67:"/www/wwwroot/61.4.114.53/app/mobile/view/./finance/mobile_menu.html";i:1638969414;s:69:"/www/wwwroot/61.4.114.53/app/mobile/view/./block/mobile_footmenu.html";i:1637392268;s:65:"/www/wwwroot/61.4.114.53/app/mobile/view/./block/foot_script.html";i:1639227710;}*/ ?>
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
 * @LastEditTime: 2021-10-08 17:53:56
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
<div class="new-bg">
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
            <form class="layui-form mt-10" action="" method="get">
<!--                <input class="layui-input" id="test1" type="text" name="date" placeholder="click.." style="margin-bottom: 20px">-->
<!--                <div class="layui-col-xs12 text-center">-->
<!--                    <button class="layui-btn layui-btn-normal layui-btn-lg" lay-submit lay-filter="yktjForm"><?php echo lang('authset.form_btn'); ?></button>-->
<!--                </div>-->
            </form>
            <div class="new-bg">
                <div class="main padding-l-r">
                    <div class="white-box">
                        <div class="transfer-box">
                            <div class="assets-bottom">
                                <table class="layui-table" lay-skin="nob">
                                    <thead>
                                    <tr>
                                        <th><span class="table-span-list"><?php echo lang('public.date'); ?></span></th>
                                        <th><span class="table-span-list"><?php echo lang('public.shouru'); ?></span></th>
                                    </tr>
                                    </thead>
                                    <tbody id="loglist">
                                        <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <tr>
                                                <td><?php echo htmlentities($vo['date']); ?></td>
                                                <td><?php echo htmlentities($vo['val']); ?></td>
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
	layui.use(['layer', 'jquery', 'form', 'element', 'flow','laydate'], function(){
		var layer = layui.layer
		,$ = layui.jquery
		,form = layui.form
		,laydate = layui.laydate;
		var element = layui.element;
		var flow = layui.flow;

        laydate.render({
            elem: '#test1'
        });
		window.findlog = function(a,b,id){
			$('#'+a+'_'+b).empty();
			flow.load({
			elem: '#'+a+'_'+b //指定列表容器
			,colSpan:3 //列数
			,end:'<td colspan="3" class="text-center"><?php echo lang("finance.finance_nodata"); ?></td>'
			,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
				var lis = [];
				$.post("<?php echo url('finance/findlog'); ?>",{id:id,page:page,type:3,from:4,to:4}, function(res){
					layui.each(res.data, function(index, item){
					lis.push('<tr><td>'+ item.create_time +'<br>'+ item.title +'</td><td>'+ item.all_account +'<br>'+ item.account_sxf +'</td><td>'+ item.type +'<br>'+ item.status +'</td></tr>');
					}); 
					next(lis.join(''), page < res.pages);    
				});
			}
		});
		}
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