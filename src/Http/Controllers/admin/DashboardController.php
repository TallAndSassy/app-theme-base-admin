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

    private array $stack = [];
    private static array $mes;
    public static function singleton(string $handle) : DashboardController
    {
        if (! isset(static::$mes[$handle])) {
            static::$mes[$handle] = new DashboardController();
        }

        return static::$mes[$handle];
    }

    public function push($objCard) : self {
        $this->stack[] = $objCard;
        return $this;
    }

    public function getAll(): array {
        return $this->stack;
    }
}
