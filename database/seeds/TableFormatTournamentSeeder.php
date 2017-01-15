<?php

use Illuminate\Database\Seeder;

class TableFormatTournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\FormatTournament::class)->create([
            'name'=>'Apertura',
            'months'=>6,
            'active'=>1
        ]);

        factory(App\FormatTournament::class)->create([
            'name'=>'Clausura',
            'months'=>6,
            'active'=>1
        ]);
    }
}
