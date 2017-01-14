<?php

use Illuminate\Database\Seeder;

class TableLeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\League::class)->create([
            'name'=>'Premier League',
            'address'=>'Inglaterra',
            'format_id'=>1,
            'escude'=>'archives/leagues/premierLegue.jpg',
            'active'=>1
        ]);

        factory(App\League::class)->create([
            'name'=>'Liga BBVA',
            'address'=>'España',
            'format_id'=>1,
            'escude'=>'archives/leagues/ligabbva.jpg',
            'active'=>1
        ]);

        factory(App\League::class)->create([
            'name'=>'Bundesliga',
            'address'=>'Alemania',
            'format_id'=>1,
            'escude'=>'archives/leagues/bundesliga.jpg',
            'active'=>1
        ]);
    }
}
