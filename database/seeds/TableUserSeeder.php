<?php

use Illuminate\Database\Seeder;

class TableUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\User::class)->create([
        		'name'=>'Pablo Andrés',
        		'lastname'=>'Barría Reyes',
        		'rut'=>'16844428-1',
        		'name_user'=>'rekkiem',
        		'password'=>md5('12345'),
        		'facebook_id'=>null,
        		'email'=>'pbarria.reyes@gmail.com',
        		'cellphone'=>'76631136',
        		'role_id'=>1,
        		'active'=>1
        	]); 
    }
}
