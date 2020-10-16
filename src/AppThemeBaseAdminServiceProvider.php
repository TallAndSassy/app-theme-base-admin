<?php

namespace TallAndSassy\AppThemeBaseAdmin;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use TallAndSassy\AppThemeBaseAdmin\Commands\AppThemeBaseAdminCommand;
use TallAndSassy\AppThemeBaseAdmin\Http\Controllers\AppThemeBaseAdminController;

class AppThemeBaseAdminServiceProvider extends ServiceProvider
{
    public static string $blade_prefix = "tassy"; #tassy is a template term

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes(
                [
                    __DIR__ . '/../config/app-theme-base-admin.php' => config_path('app-theme-base-admin.php'),
                ],
                'config'
            );

            $this->publishes(
                [
                    __DIR__ . '/../resources/views' => base_path('resources/views/vendor/app-theme-base-admin'),
                ],
                'views'
            );

            $migrationFileName = 'create_app_theme_base_admin_table.php';
            if (! $this->migrationFileExists($migrationFileName)) {
                $this->publishes(
                    [
                        __DIR__ . "/../database/migrations/{$migrationFileName}.stub" => database_path(
                            'migrations/' . date('Y_m_d_His', time()) . '_' . $migrationFileName
                        ),
                    ],
                    'migrations'
                );
            }

             $this->publishes([
                 __DIR__.'/../resources/public' => public_path('tallandsassy/app-theme-base-admin'),
                ], ['public']);

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('tallandsassy/app-theme-base-admin'),
            ], 'grok.views');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/tallandsassy/app-theme-base-admin'),
            ], 'tallandsassy.app-theme-base-admin');*/



            // Registering package commands.
            $this->commands(
                [
                    AppThemeBaseAdminCommand::class,
                ]
            );
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'tassy');


        Route::macro(
            'tassy',
            function (string $prefix) {
                Route::prefix($prefix)->group(
                    function () {
                        // Prefix Route Samples -BEGIN-
                        // Sample routes that only show while developing...
                        if (App::environment(['local', 'testing'])) {
                            // prefixed url to string
                            Route::get(
                                '/TallAndSassy/AppThemeBaseAdmin/sample_string', // you will absolutely need a prefix in your url
                                function () {
                                    return "Hello AppThemeBaseAdmin string via blade prefix";
                                }
                            );

                            // prefixed url to blade view
                            Route::get(
                                '/TallAndSassy/AppThemeBaseAdmin/sample_blade',
                                function () {
                                    return view('tassy::sample_blade');
                                }
                            );

                            // prefixed url to controller
                            Route::get(
                                '/TallAndSassy/AppThemeBaseAdmin/controller',
                                [AppThemeBaseAdminController::class, 'sample']
                            );
                        }
                        // Prefix Route Samples -END-

                        // TODO: Add your own prefixed routes here...
                    }
                );
            }
        );
        Route::tassy('tassy'); // This works. http://test-jet.test/tassy/TallAndSassy/AppThemeBaseAdmin/string
        // They are addatiive, so in your own routes/web.php file, do Route::tassy('staff'); to
        // make http://test-jet.test/staff/TallAndSassy/AppThemeBaseAdmin/string work


        // global url samples -BEGIN-
        if (App::environment(['local', 'testing'])) {
            // global url to string
            Route::get(
                '/grok/TallAndSassy/AppThemeBaseAdmin/sample_string',
                function () {
                    return "Hello AppThemeBaseAdmin string via global url.";
                }
            );

            // global url to blade view
            Route::get(
                '/grok/TallAndSassy/AppThemeBaseAdmin/sample_blade',
                function () {
                    return view('tassy::sample_blade');
                }
            );

            // global url to controller
            Route::get('/grok/TallAndSassy/AppThemeBaseAdmin/controller', [AppThemeBaseAdminController::class, 'sample']);
        }
        // global url samples -END-

        // TODO: Add your own global routes here...

        // GROK
        if (App::environment(['local', 'testing'])) {
            \ElegantTechnologies\Grok\GrokWrangler::grokMe(static::class, 'TallAndSassy', 'app-theme-base-admin', 'resources/views/grok', 'tassy');//tassy gets macro'd out
            Route::get('/grok/TallAndSassy/AppThemeBaseAdmin', fn () => view('tassy::grok/index'));
        }

        // TODO: Register your livewire components that live in this package here:
        # \Livewire\Livewire::component('tassygroklivewirejet::a-a-nothing',  \TallAndSassy\GrokLivewireJet\Components\DemoUiChunks\AANothing::class);
        // TODO: Add your own other boot related stuff here...
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/app-theme-base-admin.php', 'app-theme-base-admin');
    }

    public static function migrationFileExists(string $migrationFileName): bool
    {
        $len = strlen($migrationFileName);
        foreach (glob(database_path("migrations/*.php")) as $filename) {
            if ((substr($filename, -$len) === $migrationFileName)) {
                return true;
            }
        }

        return false;
    }
}
