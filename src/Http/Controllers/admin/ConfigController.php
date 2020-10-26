<?php

namespace TallAndSassy\AppThemeBaseAdmin\Http\Controllers\Admin;

class ConfigController extends \TallAndSassy\PageGuide\Http\Controllers\Admin\AdminBaseController
{
    public const viewRef = "tassy::admin/config/index";
    public static string $title = 'Config';
    //    public function getBodyView(string $subLevels) : \Illuminate\View\View
    //    {
    //        return view(static::viewRef);
    //    }
}
