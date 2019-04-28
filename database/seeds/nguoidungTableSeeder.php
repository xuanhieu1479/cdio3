<?php

use Illuminate\Database\Seeder;

class nguoidungTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nguoidung')->insert([
            'email' => 'admin@gmail.com',
            'matkhau' => '123',
            'ten' => 'Admin',
            'sdt' => '1234567890',
            'idchucvu' => 1,
            'tinhtrang' => 'Active'
        ]);
    }
}
