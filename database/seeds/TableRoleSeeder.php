<?php

use Illuminate\Database\Seeder;

class TableRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Role::class)->create([
        		'name'=>'Administrador',
        		'active'=>1
        	]); 
        factory(App\Role::class)->create([
        		'name'=>'Capitán',
        		'active'=>1
        	]); 
        factory(App\Role::class)->create([
        		'name'=>'Jugador',
        		'active'=>1
        	]); 
    }
}
