<?php

namespace TallAndSassy\AppThemeBaseAdmin\Http\Controllers\Admin;

class DashboardController extends \TallAndSassy\PageGuide\Http\Controllers\Admin\AdminBaseController
{
    public const viewRef = "tassy::admin/dashboard/index";
    public static string $title = 'Dashboard';
    public function getBodyView(string $subLevels) : \Illuminate\View\View
    {
        return view(static::viewRef, ['LastName' => "Deis"]);
    }
}
