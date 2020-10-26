<?php

namespace TallAndSassy\AppThemeBaseAdmin\Http\Controllers\Admin;

class HelpController extends \TallAndSassy\PageGuide\Http\Controllers\Admin\AdminBaseController
{
    public const viewRef = "tassy::admin/help/index";
    public static string $title = 'Help';
    public function getBodyView(string $subLevels) : \Illuminate\View\View
    {
        return view(static::viewRef);
    }
}
