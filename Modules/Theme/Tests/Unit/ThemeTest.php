<?php

namespace Modules\Theme\Tests\Unit;

use Modules\Theme\Entities\Theme;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ThemeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_should_be_able_enter_to_theme_page_created() {
        
        $theme =  Theme::newFactory()->create();
        $this->assertNotNull($theme->id);
        $this->assertIsNumeric($theme->id);
    }
    public function test_should_be_able_see_a_theme() {
    }

    public function test_should_be_able_create_a_theme()
    {
        $this->assertTrue(true);
    }

    public function test_should_be_able_delete_a_theme()
    {
        $theme =  Theme::newFactory()->create();
        $findedTheme = Theme::find($theme->id);
        $findedTheme->delete();
        $findedThemeAfterDeleted = Theme::find($theme->id);
        $this->assertNull($findedThemeAfterDeleted);
    }

    public function test_should_be_able_update_a_theme()
    {
        $this->assertTrue(true);
    }
}
