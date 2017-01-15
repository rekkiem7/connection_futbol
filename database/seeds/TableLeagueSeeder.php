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
            'name'=>'Liga San José',
            'address'=>'Cerro Lipangue, camino a Lampa.',
            'format_id'=>1,
            'escude'=>'archives/leagues/ligaSanJose.png',
            'active'=>1
        ]);

        factory(App\League::class)->create([
            'name'=>'Liga San Pedro',
            'address'=>'Avenida Padre Hurtado 2650 , Las Condes Santiago',
            'format_id'=>1,
            'escude'=>'archives/leagues/ligaSanPedro.png',
            'active'=>1
        ]);
    }
}
