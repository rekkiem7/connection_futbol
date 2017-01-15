<?php

use Illuminate\Database\Seeder;

class TableTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Team::class)->create([
            'name'=>'Fuerte Apache',
            'escude'=>'archives/teams/1/escude/1.png',
            'description'=>null,
            'active'=>1
        ]);

        factory(App\Team::class)->create([
            'name'=>'Superior',
            'escude'=>'archives/teams/2/escude/1.png',
            'description'=>null,
            'active'=>1
        ]);

        factory(App\Team::class)->create([
            'name'=>'Padrinos',
            'escude'=>'archives/teams/3/escude/1.png',
            'description'=>null,
            'active'=>1
        ]);

        factory(App\Team::class)->create([
            'name'=>'Vikingos',
            'escude'=>'archives/teams/4/escude/1.png',
            'description'=>null,
            'active'=>1
        ]);

        factory(App\Team::class)->create([
            'name'=>'88 Flash',
            'escude'=>'archives/teams/5/escude/1.png',
            'description'=>null,
            'active'=>1
        ]);

        factory(App\Team::class)->create([
            'name'=>'Liniers',
            'escude'=>'archives/teams/6/escude/1.png',
            'description'=>null,
            'active'=>1
        ]);

        factory(App\Team::class)->create([
            'name'=>'Dinamiteros',
            'escude'=>'archives/teams/7/escude/1.png',
            'description'=>null,
            'active'=>1
        ]);

        factory(App\Team::class)->create([
            'name'=>'Dep.Colaless',
            'escude'=>'archives/teams/8/escude/1.png',
            'description'=>null,
            'active'=>1
        ]);

        factory(App\Team::class)->create([
            'name'=>'Kiltros FC',
            'escude'=>'archives/teams/9/escude/1.png',
            'description'=>null,
            'active'=>1
        ]);

        factory(App\Team::class)->create([
            'name'=>'Lircay',
            'escude'=>'archives/teams/10/escude/1.png',
            'description'=>null,
            'active'=>1
        ]);

        factory(App\Team::class)->create([
            'name'=>'Boedo',
            'escude'=>'archives/teams/11/escude/1.png',
            'description'=>null,
            'active'=>1
        ]);

        factory(App\Team::class)->create([
            'name'=>'Colon Vespucio',
            'escude'=>'archives/teams/12/escude/1.png',
            'description'=>null,
            'active'=>1
        ]);

        factory(App\Team::class)->create([
            'name'=>'Charrua',
            'escude'=>'archives/teams/13/escude/1.png',
            'description'=>null,
            'active'=>1
        ]);

        factory(App\Team::class)->create([
            'name'=>'Cocodrilo',
            'escude'=>'archives/teams/14/escude/1.png',
            'description'=>null,
            'active'=>1
        ]);

        factory(App\Team::class)->create([
            'name'=>'Ttk/Le Pons',
            'escude'=>'archives/teams/15/escude/1.png',
            'description'=>null,
            'active'=>1
        ]);

        factory(App\Team::class)->create([
            'name'=>'Canillas',
            'escude'=>'archives/teams/16/escude/1.png',
            'description'=>null,
            'active'=>1
        ]);

        factory(App\Team::class)->create([
            'name'=>'La Caldera',
            'escude'=>'archives/teams/17/escude/1.png',
            'description'=>null,
            'active'=>1
        ]);

        factory(App\Team::class)->create([
            'name'=>'Iquique Glorioso',
            'escude'=>'archives/teams/18/escude/1.png',
            'description'=>null,
            'active'=>1
        ]);
    }
}
