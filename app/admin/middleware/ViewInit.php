<?php
/*
 * @Author: Fox Blue
 * @Date: 2021-05-31 13:44:29
 * @LastEditTime: 2021-05-31 15:45:39
 * @Description: Forward, no stop
 */

namespace app\admin\middleware;


use app\admin\service\ConfigService;
use app\common\constants\AdminConstant;
use think\App;
use think\facade\Request;
use think\facade\View;

class ViewInit
{

    public function handle($request, \Closure $next)
    {
        list($thisModule, $thisController, $thisAction) = [app('http')->getName(), Request::controller(), $request->action()];
        list($thisControllerArr, $jsPath) = [explode('.', $thisController), null];
        foreach ($thisControllerArr as $vo) {
            empty($jsPath) ? $jsPath = parse_name($vo) : $jsPath .= '/' . parse_name($vo);
        }
        $autoloadJs = file_exists(root_path('public')."static/{$thisModule}/js/{$jsPath}.js") ? true : false;
        $thisControllerJsPath = "{$thisModule}/js/{$jsPath}.js";
        $adminModuleName = config('app.admin_alias_name');
        $isSuperAdmin = session('admin.id') == AdminConstant::SUPER_ADMIN_ID ? true : false;
        $data = [
            'adminModuleName'      => $adminModuleName,
            'thisController'       => parse_name($thisController),
            'thisAction'           => $thisAction,
            'thisRequest'          => parse_name("{$thisModule}/{$thisController}/{$thisAction}"),
            'thisControllerJsPath' => "{$thisControllerJsPath}",
            'autoloadJs'           => $autoloadJs,
            'isSuperAdmin'         => $isSuperAdmin,
            'version'              => env('app_debug') ? time() : ConfigService::getVersion(),
        ];

        View::assign($data);
        $request->adminModuleName = $adminModuleName;
        return $next($request);
    }


}