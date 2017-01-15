<?php

use Illuminate\Database\Seeder;

class TableTournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Tournament::class)->create([
            'league_id'=>1,
            'category_id'=>1,
            'formatTournament_id'=>1,
            'year'=>2017,
            'active'=>1
        ]);

        factory(App\Tournament::class)->create([
            'league_id'=>1,
            'category_id'=>2,
            'formatTournament_id'=>1,
            'year'=>2017,
            'active'=>1
        ]);

        factory(App\Tournament::class)->create([
            'league_id'=>1,
            'category_id'=>3,
            'formatTournament_id'=>1,
            'year'=>2017,
            'active'=>1
        ]);
    }
}
