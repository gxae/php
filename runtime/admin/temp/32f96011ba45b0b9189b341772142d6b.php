<?php /*a:2:{s:70:"/www/wwwroot/www.nsdkaqnn.com/app/admin/view/product/lists/setpro.html";i:1648778346;s:64:"/www/wwwroot/www.nsdkaqnn.com/app/admin/view/layout/default.html";i:1649939362;}*/ ?>
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
 * @Date: 2021-06-18 18:10:50
 * @LastEditTime: 2021-10-08 10:47:53
 * @Description: Forward, no stop
-->
<style>
    .layui-form-label {
        width: 140px;
    }
    .layui-input-block {
        margin-left: 180px;
    }
    .color-gray{color: #999;}
    </style>
<div class="layuimini-container">
    <form id="app-form" class="layui-form layuimini-form">
        <div class="layui-tab">
            <ul class="layui-tab-title">
                <li class="layui-this"><?php echo htmlentities($row['title']); ?>基础参数</li>
                <?php if((in_array('1',$row['types']))): ?>
                <li>币币交易参数</li>
                <?php endif; if((in_array('2',$row['types']))): ?>
                <li>合约交易参数</li>
                <?php endif; if((in_array('3',$row['types']))): ?>
                <li>期权交易参数</li>
                <?php endif; ?>
            </ul>
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">
                    <div class="layui-form-item">
                        <label class="layui-form-label required">当前价格</label>
                        <div class="layui-input-block" style="line-height: 36px;">
                            <?php echo htmlentities((isset($row['last_price']) && ($row['last_price'] !== '')?$row['last_price']:'')); ?>
                            <tip class="color-gray">如果充币地址皆为空则不允许直充，走USDT通道</tip>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">TRC20充币地址</label>
                        <div class="layui-input-block">
                            <input type="text" name="trc_address" class="layui-input"  placeholder="请输入充币地址" value="<?php echo htmlentities((isset($row['trc_address']) && ($row['trc_address'] !== '')?$row['trc_address']:'')); ?>">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">ERC20充币地址</label>
                        <div class="layui-input-block">
                            <input type="text" name="erc_address" class="layui-input"  placeholder="请输入充币地址" value="<?php echo htmlentities((isset($row['erc_address']) && ($row['erc_address'] !== '')?$row['erc_address']:'')); ?>">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">Omni充币地址</label>
                        <div class="layui-input-block">
                            <input type="text" name="omni_address" class="layui-input"  placeholder="请输入充币地址" value="<?php echo htmlentities((isset($row['omni_address']) && ($row['omni_address'] !== '')?$row['omni_address']:'')); ?>">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">OTHER充币地址</label>
                        <div class="layui-input-block">
                            <input type="text" name="pay_address" class="layui-input"  placeholder="请输入充币地址" value="<?php echo htmlentities((isset($row['pay_address']) && ($row['pay_address'] !== '')?$row['pay_address']:'')); ?>">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">银行卡号</label>
                        <div class="layui-input-block">
                            <input type="text" name="yhkdz" class="layui-input"  placeholder="请输入银行卡" value="<?php echo htmlentities((isset($row['yhkdz']) && ($row['yhkdz'] !== '')?$row['yhkdz']:'')); ?>">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">银行卡开户行</label>
                        <div class="layui-input-block">
                            <input type="text" name="yhkkhh" class="layui-input"  placeholder="请输入银行卡开户行" value="<?php echo htmlentities((isset($row['yhkkhh']) && ($row['yhkkhh'] !== '')?$row['yhkkhh']:'')); ?>">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">银行卡姓名</label>
                        <div class="layui-input-block">
                            <input type="text" name="yhkxm" class="layui-input"  placeholder="请输入银行卡姓名" value="<?php echo htmlentities((isset($row['yhkxm']) && ($row['yhkxm'] !== '')?$row['yhkxm']:'')); ?>">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">基于</label>
                        <div class="layui-input-block">
                            <input type="text" name="name" class="layui-input"  placeholder="请输入" value="<?php echo htmlentities((isset($row['pay_name']) && ($row['pay_name'] !== '')?$row['pay_name']:'')); ?>">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">提币范围</label>
                        <div class="layui-inline">
                            <div class="layui-input-inline" style="width: 180px;margin-left: 10px;">
                                <input type="text" name="withdraw_min_num" autocomplete="off" placeholder="请输入最小值" class="layui-input" value="<?php echo htmlentities((isset($row['withdraw_min_num']) && ($row['withdraw_min_num'] !== '')?$row['withdraw_min_num']:'0.00000000')); ?>">
                            </div>
                            <div class="layui-form-mid">-</div>
                            <div class="layui-input-inline" style="width: 180px;">
                                <input type="text" name="withdraw_max_num" placeholder="输入最大值" autocomplete="off" class="layui-input" value="<?php echo htmlentities((isset($row['withdraw_max_num']) && ($row['withdraw_max_num'] !== '')?$row['withdraw_max_num']:'0.00000000')); ?>">
                            </div>
                        </div>
                        <i class="layui-icon layui-icon-tips" lay-tips="提币范围，最小值及最大值，为0则不限制" ></i>
                   </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">TRC提币手续费</label>
                        <div class="layui-input-block">
                            <input type="text" name="withdraw_trc_sxf" class="layui-input"  placeholder="请输入TRC提币手续费" value="<?php echo htmlentities((isset($row['withdraw_trc_sxf']) && ($row['withdraw_trc_sxf'] !== '')?$row['withdraw_trc_sxf']:'1.0000')); ?>">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">ERC提币手续费</label>
                        <div class="layui-input-block">
                            <input type="text" name="withdraw_erc_sxf" class="layui-input"  placeholder="请输入ERC提币手续费" value="<?php echo htmlentities((isset($row['withdraw_erc_sxf']) && ($row['withdraw_erc_sxf'] !== '')?$row['withdraw_erc_sxf']:'1.0000')); ?>">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">OMNI提币手续费</label>
                        <div class="layui-input-block">
                            <input type="text" name="withdraw_omni_sxf" class="layui-input"  placeholder="请输入OMNI提币手续费" value="<?php echo htmlentities((isset($row['withdraw_omni_sxf']) && ($row['withdraw_omni_sxf'] !== '')?$row['withdraw_omni_sxf']:'1.0000')); ?>">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">银行卡提币手续费</label>
                        <div class="layui-input-block">
                            <input type="text" name="withdraw_yhk_sxf" class="layui-input"  placeholder="请输入银行卡提币手续费" value="<?php echo htmlentities((isset($row['withdraw_yhk_sxf']) && ($row['withdraw_yhk_sxf'] !== '')?$row['withdraw_yhk_sxf']:'1.0000')); ?>">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">每天提币次数</label>
                        <div class="layui-inline">
                            <div class="layui-input-inline" style="width: 180px;margin-left: 10px;">
                                <input type="text" name="withdraw_day_num" class="layui-input"  placeholder="请输入" value="<?php echo htmlentities((isset($row['withdraw_day_num']) && ($row['withdraw_day_num'] !== '')?$row['withdraw_day_num']:'0')); ?>">
                            </div>
                        </div>
                        <i class="layui-icon layui-icon-tips" lay-tips="每天提币次数限制，为0则不限制" ></i>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">提币加收手续值</label>
                        <div class="layui-inline">
                            <div class="layui-input-inline" style="width: 180px;margin-left: 10px;">
                                <input type="text" name="withdraw_num_max" class="layui-input"  placeholder="请输入" value="<?php echo htmlentities((isset($row['withdraw_num_max']) && ($row['withdraw_num_max'] !== '')?$row['withdraw_num_max']:'0')); ?>">
                            </div>
                        </div>
                        <i class="layui-icon layui-icon-tips" lay-tips="提币加收手续费值，超过此值时加收手续费，0则无加收" ></i>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">提币加收手续费</label>
                        <div class="layui-inline">
                            <div class="layui-input-inline" style="width: 180px;margin-left: 10px;">
                                <input type="text" name="withdraw_num_sxf" class="layui-input"  placeholder="请输入" value="<?php echo htmlentities((isset($row['withdraw_num_sxf']) && ($row['withdraw_num_sxf'] !== '')?$row['withdraw_num_sxf']:'0')); ?>">
                            </div>
                        </div>
                        <i class="layui-icon layui-icon-tips" lay-tips="提币加收手续费，百分比无%，0则无加收" ></i>
                    </div>
                </div>
                <?php if((in_array('1',$row['types']))): ?>
                <div class="layui-tab-item">
                    <div class="layui-form-item">
                        <label class="layui-form-label required">币币交易手续费</label>
                        <div class="layui-input-block">
                            <input type="text" name="ex_sx_fee" class="layui-input"  placeholder="请输入币币交易手续费" value="<?php echo htmlentities((isset($row['ex_sx_fee']) && ($row['ex_sx_fee'] !== '')?$row['ex_sx_fee']:'0')); ?>">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">BUY最低数量</label>
                        <div class="layui-input-block">
                            <input type="text" name="ex_buy_min" class="layui-input"  placeholder="请输入BUY最低数量" value="<?php echo htmlentities((isset($row['ex_buy_min']) && ($row['ex_buy_min'] !== '')?$row['ex_buy_min']:'0')); ?>">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">SELL最低数量</label>
                        <div class="layui-input-block">
                            <input type="text" name="ex_sell_min" class="layui-input"  placeholder="请输入SELL最低数量" value="<?php echo htmlentities((isset($row['ex_sell_min']) && ($row['ex_sell_min'] !== '')?$row['ex_sell_min']:'0')); ?>">
                        </div>
                    </div>
                </div>
                <?php endif; if((in_array('2',$row['types']))): ?>
                <div class="layui-tab-item">
                    <div class="layui-form-item">
                        <label class="layui-form-label required">合约交易手续费</label>
                        <div class="layui-input-block">
                            <input type="text" name="le_sx_fee" class="layui-input"  placeholder="请输入合约交易手续费" value="<?php echo htmlentities((isset($row['le_sx_fee']) && ($row['le_sx_fee'] !== '')?$row['le_sx_fee']:'0')); ?>">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">合约隔夜手续费</label>
                        <div class="layui-input-block">
                            <input type="text" name="le_day_sx_fee" class="layui-input"  placeholder="请输入合约隔夜手续费" value="<?php echo htmlentities((isset($row['le_day_sx_fee']) && ($row['le_day_sx_fee'] !== '')?$row['le_day_sx_fee']:'0')); ?>">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">合约违约手续费</label>
                        <div class="layui-input-block">
                            <input type="text" name="le_no_sx_fee" class="layui-input"  placeholder="请输入合约违约手续费" value="<?php echo htmlentities((isset($row['le_no_sx_fee']) && ($row['le_no_sx_fee'] !== '')?$row['le_no_sx_fee']:'0')); ?>">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">合约交易杠杆</label>
                        <div class="layui-input-block">
                            <input type="text" name="le_play_time" class="layui-input"  placeholder="请输入合约交易杠杆" value="<?php echo htmlentities((isset($row['le_play_time']) && ($row['le_play_time'] !== '')?$row['le_play_time']:'50')); ?>">
                            <tip class="color-gray">至少一个，多个用符号,分开</tip>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">止盈止损功能</label>
                        <div class="layui-input-block">
                            <input type="radio" name="le_play_type" value="0" title="关闭" <?php if(0==$row['le_play_type']): ?>checked<?php endif; ?>>
                            <input type="radio" name="le_play_type" value="1" title="打开" <?php if(1==$row['le_play_type']): ?>checked<?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">合约爆仓风险率</label>
                        <div class="layui-input-block">
                            <input type="text" name="le_order_rate" class="layui-input"  placeholder="请输入合约爆仓风险率" value="<?php echo htmlentities((isset($row['le_order_rate']) && ($row['le_order_rate'] !== '')?$row['le_order_rate']:'0')); ?>">
                            <tip class="color-gray">百分比，达到此值自动暴仓</tip>
                        </div>
                    </div>
                </div>
                <?php endif; if((in_array('3',$row['types']))): ?>
                <div class="layui-tab-item">
                    <div class="layui-form-item">
                        <label class="layui-form-label required">期权交易手续费</label>
                        <div class="layui-input-block">
                            <input type="text" name="op_sx_fee" class="layui-input"  placeholder="请输入期权交易手续费" value="<?php echo htmlentities((isset($row['op_sx_fee']) && ($row['op_sx_fee'] !== '')?$row['op_sx_fee']:'0')); ?>">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">期权交易预设价格</label>
                        <div class="layui-input-block">
                            <input type="text" name="op_play_price" class="layui-input"  placeholder="请输入期权预设价格" value="<?php echo htmlentities((isset($row['op_play_price']) && ($row['op_play_price'] !== '')?$row['op_play_price']:'50')); ?>">
                            <tip class="color-gray">至少一个，以符号,分开</tip>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">期权交易时间玩法</label>
                        <div class="layui-input-block">
                            <input type="text" name="op_play_time" class="layui-input"  placeholder="请输入期权时间玩法" value="<?php echo htmlentities((isset($row['op_play_time']) && ($row['op_play_time'] !== '')?$row['op_play_time']:'30')); ?>">
                            <tip class="color-gray">秒单位，以符号,分开</tip>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">期权交易玩法盈利率</label>
                        <div class="layui-input-block">
                            <input type="text" name="op_play_prop" class="layui-input"  placeholder="请输入期权玩法盈利率" value="<?php echo htmlentities((isset($row['op_play_prop']) && ($row['op_play_prop'] !== '')?$row['op_play_prop']:'0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0')); ?>">
                            <tip class="color-gray">对应时间玩法，以符号,分开</tip>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">期权交易玩法最低值</label>
                        <div class="layui-input-block">
                            <input type="text" name="op_play_down" class="layui-input"  placeholder="请输入期权玩法最低值" value="<?php echo htmlentities((isset($row['op_play_down']) && ($row['op_play_down'] !== '')?$row['op_play_down']:'0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0')); ?>">
                            <tip class="color-gray">对应时间玩法，以符号,分开</tip>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">期权交易最大持仓数</label>
                        <div class="layui-input-block">
                            <input type="text" name="op_play_max" class="layui-input"  placeholder="请输入期权最大持仓数" value="<?php echo htmlentities((isset($row['op_play_max']) && ($row['op_play_max'] !== '')?$row['op_play_max']:'0')); ?>">
                            <tip class="color-gray">最大持仓笔数，0不限制</tip>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">期权交易单笔范围</label>
                        <div class="layui-inline">
                            <div class="layui-input-inline" style="width: 180px;margin-left: 10px;">
                                <input type="text" name="op_order_min" autocomplete="off" placeholder="请输入最小值" class="layui-input" value="<?php echo htmlentities((isset($row['op_order_min']) && ($row['op_order_min'] !== '')?$row['op_order_min']:'0')); ?>">
                            </div>
                            <div class="layui-form-mid">-</div>
                            <div class="layui-input-inline" style="width: 180px;">
                                <input type="text" name="op_order_max" placeholder="输入最大值" autocomplete="off" class="layui-input" value="<?php echo htmlentities((isset($row['op_order_max']) && ($row['op_order_max'] !== '')?$row['op_order_max']:'0')); ?>">
                            </div>
                        </div>
                        <i class="layui-icon layui-icon-tips" lay-tips="单笔范围，最小值及最大值，为0则不限制" ></i>
                   </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label required">期权交易风控范围</label>
                        <div class="layui-inline">
                            <div class="layui-input-inline" style="width: 180px;margin-left: 10px;">
                                <input type="text" name="op_kong_min" autocomplete="off" placeholder="请输入最小值" class="layui-input" value="<?php echo htmlentities((isset($row['op_kong_min']) && ($row['op_kong_min'] !== '')?$row['op_kong_min']:'0')); ?>">
                            </div>
                            <div class="layui-form-mid">-</div>
                            <div class="layui-input-inline" style="width: 180px;">
                                <input type="text" name="op_kong_max" placeholder="输入最大值" autocomplete="off" class="layui-input" value="<?php echo htmlentities((isset($row['op_kong_max']) && ($row['op_kong_max'] !== '')?$row['op_kong_max']:'0')); ?>">
                            </div>
                        </div>
                        <i class="layui-icon layui-icon-tips" lay-tips="风控范围，百分比，不含%，必须设置" ></i>
                   </div>
                   <div class="layui-form-item">
                    <label class="layui-form-label required">期权交易控盈率</label>
                    <div class="layui-input-block">
                        <input type="text" name="op_order_kong" class="layui-input"  placeholder="请输入期权交易产品控" value="<?php echo htmlentities((isset($row['op_order_kong']) && ($row['op_order_kong'] !== '')?$row['op_order_kong']:'50')); ?>">
                        <tip class="color-gray">产品控盈百分比</tip>
                    </div>
                </div>
                </div>
                <?php endif; ?>
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