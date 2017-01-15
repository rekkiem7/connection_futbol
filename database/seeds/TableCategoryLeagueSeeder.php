<?php

use Illuminate\Database\Seeder;

class TableCategoryLeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CategoryLeague::class)->create([
            'name'=>'Junior A',
            'league_id'=>1,
            'order'=>1,
            'active'=>1
        ]);

        factory(App\CategoryLeague::class)->create([
            'name'=>'Junior B',
            'league_id'=>1,
            'order'=>2,
            'active'=>1
        ]);

        factory(App\CategoryLeague::class)->create([
            'name'=>'Senior',
            'league_id'=>1,
            'order'=>3,
            'active'=>1
        ]);

        factory(App\CategoryLeague::class)->create([
            'name'=>'Junior',
            'league_id'=>2,
            'order'=>1,
            'active'=>1
        ]);

        factory(App\CategoryLeague::class)->create([
            'name'=>'Senior',
            'league_id'=>2,
            'order'=>2,
            'active'=>1
        ]);


    }
}
