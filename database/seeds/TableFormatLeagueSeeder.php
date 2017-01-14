<?php

use Illuminate\Database\Seeder;

class TableFormatLeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\FormatLeague::class)->create([
            'name'=>'Futbol',
            'numberPlayers'=>11,
            'places'=>25,
            'active'=>1
        ]);

        factory(App\FormatLeague::class)->create([
            'name'=>'Futbolito',
            'numberPlayers'=>7,
            'places'=>15,
            'active'=>1
        ]);
    }
}
