<?php

namespace TallAndSassy\AppThemeBaseAdmin\Http\Controllers\Admin;

class MediaController extends \TallAndSassy\PageGuide\Http\Controllers\Admin\AdminBaseController
{
    public const viewRef = "tassy::admin/media/index";
    public static string $title = 'Media';
    //    public function getBodyView(string $subLevels) : \Illuminate\View\View
    //    {
    //        return view(static::viewRef);
    //    }
}
