<?php

namespace Modules\Theme\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Theme\Entities\Theme;

class ThemeDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
        Theme::newFactory()->create([
            'title' => 'test',
            'slug' => 'test',
        ]);
        
        // $this->call("OthersTableSeeder");
    }
}
