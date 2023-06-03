<?php /*a:2:{s:62:"/www/wwwroot/nsdkqdsdf.com/app/admin/view/news/lists/edit.html";i:1624711364;s:61:"/www/wwwroot/nsdkqdsdf.com/app/admin/view/layout/default.html";i:1649939362;}*/ ?>
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
 * @Date: 2021-06-19 22:59:23
 * @LastEditTime: 2021-06-26 20:42:45
 * @Description: Forward, no stop
-->
<div class="layuimini-container">
    <form id="app-form" class="layui-form layuimini-form">
        
        <div class="layui-form-item">
            <label class="layui-form-label">分类ID</label>
            <div class="layui-input-block">
                <select name="cate_id" >
                    <option value=''></option>
                    <?php foreach($getNewsCateList as $k=>$v): ?>
                    <option value='<?php echo htmlentities($k); ?>' <?php if(in_array(($k), is_array($row['cate_id'])?$row['cate_id']:explode(',',$row['cate_id']))): ?>selected=""<?php endif; ?>><?php echo htmlentities($v); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">标识</label>
            <div class="layui-input-block">
                <input type="text" name="name" class="layui-input"  placeholder="请输入标识" value="<?php echo htmlentities((isset($row['name']) && ($row['name'] !== '')?$row['name']:'')); ?>">
                <tip class="color-gray">特殊情况下精准调取区分使用</tip>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">语言内容</label>
            <div class="layui-input-block">
                <div class="layui-tab layui-tab-card">
                    <ul class="layui-tab-title">
                        <?php foreach($lang_list as $key=>$val): ?>
                        <li <?php if($val==sysconfig('base','base_lang')): ?>class="layui-this"<?php endif; ?>><?php echo htmlentities($val); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="layui-tab-content">
                        <?php foreach($lang_list as $key=>$val): ?>
                        <div class="layui-tab-item <?php if($val==sysconfig('base','base_lang')): ?>layui-show<?php endif; ?>">
                            <div class="layui-form-item">
                                <label class="layui-form-label required">新闻标题</label>
                                <div class="layui-input-block">
                                    <input type="text" name="title[<?php echo htmlentities($val); ?>]" class="layui-input"  placeholder="请输入标题" value="<?php echo htmlentities((isset($langcon[$val]['title']) && ($langcon[$val]['title'] !== '')?$langcon[$val]['title']:'')); ?>">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">新闻图片</label>
                                <div class="layui-input-block layuimini-upload">
                                    <input name="logo[<?php echo htmlentities($val); ?>]" class="layui-input layui-col-xs6"   placeholder="请上传图片" value="<?php echo htmlentities((isset($langcon[$val]['logo']) && ($langcon[$val]['logo'] !== '')?$langcon[$val]['logo']:'')); ?>">
                                    <div class="layuimini-upload-btn">
                                        <span><a class="layui-btn" data-upload="logo[<?php echo htmlentities($val); ?>]" data-uploads="logo_<?php echo htmlentities($key); ?>" data-upload-number="one" data-upload-exts="png|jpg|ico|jpeg" data-upload-icon="image"><i class="fa fa-upload"></i> 上传</a></span>
                                        <span><a class="layui-btn layui-btn-normal" id="select_logo_<?php echo htmlentities($key); ?>" data-upload-select="logo[<?php echo htmlentities($val); ?>]" data-upload-number="one" data-upload-mimetype="image/*"><i class="fa fa-list"></i> 选择</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">内容描述</label>
                                <div class="layui-input-block">
                                    <textarea name="content[<?php echo htmlentities($val); ?>]" rows="20" class="layui-textarea editor" 内容描述 placeholder="请输入内容描述"><?php echo (isset($langcon[$val]['content']) && ($langcon[$val]['content'] !== '')?$langcon[$val]['content']:''); ?></textarea>
                                </div>
                            </div>
                            <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">备注说明</label>
                                <div class="layui-input-block">
                                    <textarea name="remark[<?php echo htmlentities($val); ?>]" class="layui-textarea"  placeholder="请输入备注说明"><?php echo (isset($langcon[$val]['remark']) && ($langcon[$val]['remark'] !== '')?$langcon[$val]['remark']:''); ?></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <?php endforeach; ?>
                    </div>
                  </div>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">排序</label>
            <div class="layui-input-block">
                <input type="text" name="sort" class="layui-input"  placeholder="请输入排序" value="<?php echo htmlentities((isset($row['sort']) && ($row['sort'] !== '')?$row['sort']:'')); ?>">
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