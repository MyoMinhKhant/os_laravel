<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(UserTableSeeder::Class);
    /*	$this->call(CategoryTableSeeder::Class);*/
    	/*$this->call(BrandTableSeeder::Class);*/
    	/*$this->call(StudentTableSeeder::Class);*/
        // $this->call(UserSeeder::class);
    }
}
