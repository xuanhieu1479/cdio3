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
        $hash = password_hash('123', PASSWORD_DEFAULT);
        DB::table('nguoidung')->insert([
            'email' => 'admin@gmail.com',
            'matkhau' => $hash,
            'ten' => 'Admin',
            'sdt' => '1234567890',
            'idchucvu' => 1,
            'tinhtrang' => 'Active'
        ]);
    }
}
