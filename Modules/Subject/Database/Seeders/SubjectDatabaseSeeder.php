<?php

namespace Modules\Subject\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Subject\Entities\Subject;
use Modules\Theme\Entities\Theme;

class SubjectDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
        $theme = Theme::newFactory()->create([
            'title' => 'test',
            'slug' => 'test',
        ]);

        Subject::newFactory()->create([
            'title' => 'test',
            'slug' => 'test',
            'theme_id' => $theme->id,
        ]);
        // $this->call("OthersTableSeeder");
    }
}
