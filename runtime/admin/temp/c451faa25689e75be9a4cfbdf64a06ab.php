<?php /*a:2:{s:69:"/www/wwwroot/nsdkqdsdf.com/app/admin/view/member/wallet/dowallet.html";i:1631492486;s:61:"/www/wwwroot/nsdkqdsdf.com/app/admin/view/layout/default.html";i:1649939362;}*/ ?>
<!--
 * @Author: Fox Blue
 * @Date: 2021-05-31 13:44:29
 * @LastEditTime: 2021-09-17 12:17:49
 * @Description: Forward, no stop
-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo sysconfig('site','site_name'); ?></title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/static/admin/css/public.css?v=<?php echo htmlentities($version); ?>" media="all">
    <script>
        window.CONFIG = {
            ADMIN: "<?php echo htmlentities((isset($adminModuleName) && ($adminModuleName !== '')?$adminModuleName:'admin')); ?>",
            CONTROLLER_JS_PATH: "<?php echo htmlentities((isset($thisControllerJsPath) && ($thisControllerJsPath !== '')?$thisControllerJsPath:'')); ?>",
            ACTION: "<?php echo htmlentities((isset($thisAction) && ($thisAction !== '')?$thisAction:'')); ?>",
            AUTOLOAD_JS: "<?php echo htmlentities((isset($autoloadJs) && ($autoloadJs !== '')?$autoloadJs:'false')); ?>",
            IS_SUPER_ADMIN: "<?php echo htmlentities((isset($isSuperAdmin) && ($isSuperAdmin !== '')?$isSuperAdmin:'false')); ?>",
            // VERSION: "<?php echo htmlentities((isset($version) && ($version !== '')?$version:'1.0.0')); ?>",
            VERSION: Date.parse(new Date())/1000,
        };
    </script>
    <script src="/static/lang/zh-cn.js?v=<?php echo htmlentities($version); ?>" charset="utf-8"></script>
    <script src="/static/plugs/layui-v2.5.6/layui.all.js?v=<?php echo htmlentities($version); ?>" charset="utf-8"></script>
    <script src="/static/plugs/require-2.3.6/require.js?v=<?php echo htmlentities($version); ?>" charset="utf-8"></script>
    <script src="/static/config-admin.js?v=<?php echo htmlentities($version); ?>" charset="utf-8"></script>
</head>
<body>
<!--
 * @Author: Fox Blue
 * @Date: 2021-09-12 17:43:06
 * @LastEditTime: 2021-09-13 08:20:30
 * @Description: Forward, no stop
-->
<div class="layuimini-container">
    <form id="app-form" class="layui-form layuimini-form">
        
        <div class="layui-form-item">
            <label class="layui-form-label">用户帐号</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" disabled value="<?php echo htmlentities((isset($row['member']) && ($row['member'] !== '')?$row['member']:'')); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">钱包币种</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" disabled value="<?php echo htmlentities((isset($row['coin']) && ($row['coin'] !== '')?$row['coin']:'')); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">调节帐户</label>
            <div class="layui-input-block">
                <select name="data_type">
                    <option value="">请选择</option>
                    <optgroup label="币币帐户">
                        <option value="ex_money" <?php if(!in_array('1',$row['types'])): ?>disabled<?php endif; ?>>余额</option>
                        <option value="lock_ex_money" <?php if(!in_array('1',$row['types'])): ?>disabled<?php endif; ?>>锁定余额</option>
                    </optgroup>
                    <optgroup label="合约帐户">
                        <option value="le_money" <?php if(!in_array('2',$row['types'])): ?>disabled<?php endif; ?>>余额</option>
                        <option value="lock_le_money" <?php if(!in_array('2',$row['types'])): ?>disabled<?php endif; ?>>锁定余额</option>
                    </optgroup>
                    <optgroup label="期权帐户">
                        <option value="op_money" <?php if(!in_array('3',$row['types'])): ?>disabled<?php endif; ?>>余额</option>
                        <option value="lock_op_money" <?php if(!in_array('3',$row['types'])): ?>disabled<?php endif; ?>>锁定余额</option>
                    </optgroup>
                    <optgroup label="理财帐户">
                        <option value="up_money" <?php if(!in_array('4',$row['types'])): ?>disabled<?php endif; ?>>余额</option>
                        <option value="lock_up_money" <?php if(!in_array('4',$row['types'])): ?>disabled<?php endif; ?>>锁定余额</option>
                    </optgroup>
                  </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">调节方式</label>
            <div class="layui-input-block">
                <input type="radio" name="type" value="1" title="增加" checked>
                <input type="radio" name="type" value="2" title="减少">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">调节值</label>
            <div class="layui-input-block">
                <input type="number" name="num" class="layui-input"  placeholder="请输入调节值" value="">
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">调节备注</label>
            <div class="layui-input-block">
                <textarea name="remark" class="layui-textarea"  placeholder="请输入调节备注"></textarea>
            </div>
        </div>
        <div class="hr-line"></div>
        <div class="layui-form-item text-center">
            <button type="submit" class="layui-btn layui-btn-normal layui-btn-sm" lay-submit>确认</button>
            <button type="reset" class="layui-btn layui-btn-primary layui-btn-sm">重置</button>
        </div>

    </form>
</div>
</body>
</html>