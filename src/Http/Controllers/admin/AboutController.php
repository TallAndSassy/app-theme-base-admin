<?php

namespace TallAndSassy\AppThemeBaseAdmin\Http\Controllers\Admin;

class AboutController extends \TallAndSassy\PageGuide\Http\Controllers\Admin\AdminBaseController
{
    public const viewRef = "tassy::admin/about/index";
    public static string $title = 'About';
//    public function getBodyView(string $subLevels) : \Illuminate\View\View
//    {
//        return view(static::viewRef);
//    }
}
