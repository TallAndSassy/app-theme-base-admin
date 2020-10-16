<?php

namespace TallAndSassy\AppThemeBaseAdmin\Tests\Feature\Models;

use TallAndSassy\AppThemeBaseAdmin\Models\AppThemeBaseAdminModel;
use TallAndSassy\AppThemeBaseAdmin\Tests\TestCase;

class AppThemeBaseAdminModelTest extends TestCase
{
    /** @test */
    public function it_can_create_a_model()
    {
        $model = AppThemeBaseAdminModel::create(['name' => 'John']);
        $this->assertDatabaseCount('app-theme-base-admin', 1);
        $this->assertEquals('JOHN', $model->getUpperCasedName());
    }
}
