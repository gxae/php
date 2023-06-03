<?php /*a:1:{s:65:"/www/wwwroot/www.nsdkaqnn.com/app/mobile/view/layout/success.html";i:1630727804;}*/ ?>
<!--
 * @Author: Fox Blue
 * @Date: 2021-01-23 20:51:59
 * @LastEditTime: 2021-09-04 11:56:44
 * @Description: Forward, no stop
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo lang('public.jump_title'); ?></title>
    <?php
    $wait = 0;
    if(isMobile()==true){?>
    <style type="text/css">
    body, h1, h2, p,dl,dd,dt{margin: 0;padding: 0;font: 15px/1.5 微软雅黑,tahoma,arial;}
    body{
        background:#1a1a1a;
        color: #cdcdcd;
    }
    h1, h2, h3, h4, h5, h6 {font-size: 100%;cursor:default;}
    ul, ol {list-style: none outside none;}
    a {text-decoration: none;color:#447BC4}
    a:hover {text-decoration: underline;}
    .ip-attack{width:100%; margin:200px auto 0;}
    .ip-attack dl{ background:#485669; padding:30px; border-bottom: 1px solid #181818;}
        .ip-attack dt{text-align:center;}
        .ip-attack dd{font-size:16px; color:#d1cfcf; text-align:center;}
        .tips{text-align:center; font-size:14px; line-height:50px; color:rgb(32, 32, 32);}
    </style>
    <?php }else{ ?>
    <style type="text/css">
        body, h1, h2, p,dl,dd,dt{margin: 0;padding: 0;font: 15px/1.5 微软雅黑,tahoma,arial;}
        body{background:#131212;}
        h1, h2, h3, h4, h5, h6 {font-size: 100%;cursor:default;}
        ul, ol {list-style: none outside none;}
        a {text-decoration: none;color:#447BC4}
        a:hover {text-decoration: underline;}
        .ip-attack{width:600px; margin:200px auto 0;}
        .ip-attack dl{ background:#485669; padding:30px; border-radius:8px;border: 0px solid #161616;-webkit-box-shadow: 0 0 8px #CDCDCD;-moz-box-shadow: 0 0 8px #cdcdcd;box-shadow: 0 0 8px #CDCDCD;}
        .ip-attack dt{text-align:center;}
        .ip-attack dd{font-size:16px; color:rgb(201, 199, 199); text-align:center;}
        .tips{text-align:center; font-size:14px; line-height:50px; color:#999;}
    </style>
    <?php }?>

</head>
<body>
<div class="ip-attack" style="display:none"><dl>
        <?php switch ($code) {case 1:?>
        <dt style="color: green"><?php echo(strip_tags($msg));?></dt>
        <?php break;case 0:?>
        <dt style="color: red"><?php echo(strip_tags($msg));?></dt>
        <?php break;} ?>
        <br>
        <dt>
            <?php echo lang('public.Page_Auto'); ?> <a id="href" href="<?php echo($url);?>"><?php echo lang('public.Jump_to'); ?></a> <?php echo lang('public.Jump_wait'); ?>： <b id="wait"><?php echo($wait);?></b>
        </dt></dl>
</div>
<script type="text/javascript">
    (function(){
        var wait = document.getElementById('wait'),
            href = document.getElementById('href').href;
        // var interval = setInterval(function(){
        //     var time = --wait.innerHTML;
        //     if(time <= 0) {
                window.location.href = href;
        //         clearInterval(interval);
        //     };
        // }, 1000);
    })();
</script>
</body>
</html>
