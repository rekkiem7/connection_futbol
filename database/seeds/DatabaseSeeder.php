<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 $this->call(TableRoleSeeder::class);
         $this->call(TableUserSeeder::class);
         $this->call(TableFormatLeagueSeeder::class);
         $this->call(TableLeagueSeeder::class);
         $this->call(TableCategoryLeagueSeeder::class);
    }
}
