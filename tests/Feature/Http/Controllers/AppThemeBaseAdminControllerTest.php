<?php


namespace TallAndSassy\AppThemeBaseAdmin\Tests\Feature\Http\Controllers;

class AppThemeBaseAdminControllerTest extends \TallAndSassy\AppThemeBaseAdmin\Tests\TestCase
{
    /** @test */
    public function global_urls_returns_ok()
    {
        // Test hard-coded routes...
        $this
            ->get('/grok/TallAndSassy/AppThemeBaseAdmin/sample_string')
            ->assertOk()
            ->assertSee('Hello AppThemeBaseAdmin string via global url.');
        $this
            ->get('/grok/TallAndSassy/AppThemeBaseAdmin/sample_blade')
            ->assertOk()
            ->assertSee('Hello AppThemeBaseAdmin from blade in TallAndSassy/AppThemeBaseAdmin/groks/sample_blade');
        $this
            ->get('/grok/TallAndSassy/AppThemeBaseAdmin/controller')
            ->assertOk()
            ->assertSee('Hello AppThemeBaseAdmin from: TallAndSassy\AppThemeBaseAdmin\Http\Controllers\AppThemeBaseAdminController::sample');
    }


    /** @test */
    public function prefixed_urls_returns_ok()
    {
        // Test user-defined routes...
        // Reproduce in routes/web.php like so
        //  Route::tassy('staff');
        //  http://test-tallandsassy.test/staff/TallAndSassy/AppThemeBaseAdmin/string
        //  http://test-tallandsassy.test/staff/TallAndSassy/AppThemeBaseAdmin/blade
        //  http://test-tallandsassy.test/staff/TallAndSassy/AppThemeBaseAdmin/controller
        $userDefinedBladePrefix = $this->userDefinedBladePrefix; // user will do this in routes/web.php Route::tassy('url');

        // string
        $this
            ->get("/$userDefinedBladePrefix/TallAndSassy/AppThemeBaseAdmin/sample_string")
            ->assertOk()
            #->assertSee('hw(TallAndSassy\AppThemeBaseAdmin\Http\Controllers\AppThemeBaseAdminController)');
        ->assertSee('Hello AppThemeBaseAdmin string via blade prefix');

        // blade
        $this
            ->get("/$userDefinedBladePrefix/TallAndSassy/AppThemeBaseAdmin/sample_blade")
            ->assertOk()
            ->assertSee('Hello AppThemeBaseAdmin from blade in TallAndSassy/AppThemeBaseAdmin/groks/sample_blade');

        // controller
        $this
            ->get("/$userDefinedBladePrefix/TallAndSassy/AppThemeBaseAdmin/controller")
            ->assertOk()
            ->assertSee('Hello AppThemeBaseAdmin from: TallAndSassy\AppThemeBaseAdmin\Http\Controllers\AppThemeBaseAdminController::sample');
    }
}
