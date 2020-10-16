<?php

namespace TallAndSassy\AppThemeBaseAdmin;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TallAndSassy\AppThemeBaseAdmin\AppThemeBaseAdmin
 */
class AppThemeBaseAdminFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'app-theme-base-admin';
    }
}
