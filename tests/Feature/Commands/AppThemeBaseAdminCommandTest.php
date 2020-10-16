<?php


namespace TallAndSassy\AppThemeBaseAdmin\Tests\Feature\Commands;

class AppThemeBaseAdminCommandTest extends \TallAndSassy\AppThemeBaseAdmin\Tests\TestCase
{
    /** @test */
    public function test_command_works()
    {
        $this->artisan('tassy:somecommand')->assertExitCode(0);
        $this->artisan('tassy:somecommand')->expectsOutput('TallAndSassy/AppThemeBaseAdmin/hw/tbd');
    }
}
