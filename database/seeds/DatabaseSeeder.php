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
        // $this->call(UsersTableSeeder::class);
        $this->call(chucvuTableSeeder::class);
        $this->call(nguoidungTableSeeder::class);
        // $this->call(homestayTableSeeder::class);
        // $this->call(phongTableSeeder::class);
    }
}
