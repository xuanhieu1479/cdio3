<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class chucvuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chucvu')->insert([
            'idchucvu' => 1,
            'tenchucvu' => 'Admin',
        ]);

        DB::table('chucvu')->insert([
            'idchucvu' => 2,
            'tenchucvu' => 'Nhà cung cấp',
        ]);

        DB::table('chucvu')->insert([
            'idchucvu' => 3,
            'tenchucvu' => 'Khách hàng',
        ]);
    }
}
