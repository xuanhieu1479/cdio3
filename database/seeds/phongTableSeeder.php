<?php

use Illuminate\Database\Seeder;

class phongTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phong')->insert([
            'idphong' => 'abc321',
            'idhomestay' => 'abc123',
            'songuoitoida' => 1,
            'gia' => 800000,
            'thongtin' => 'Blahblahlbah',
            'thumbnail' => "http://cdn.sandals.com/sandals/v12/images/resorts/sbd/home/main-slider/pool-with-swim-up-bar-beach.jpg",
            'giamgia' => 0,
            'tinhtrang' => 'Bình thường',
        ]);

        DB::table('phong')->insert([
            'idphong' => 'cef456',
            'idhomestay' => 'cef654',
            'songuoitoida' => 2,
            'gia' => 1500000,
            'thongtin' => 'Blahblahlbah',
            'thumbnail' => "http://cdn.sandals.com/sandals/v12/images/resorts/sbd/home/main-slider/pool-with-swim-up-bar-beach.jpg",
            'giamgia' => 0,
            'tinhtrang' => 'Bình thường',
        ]);

        DB::table('phong')->insert([
            'idphong' => 'ghk987',
            'idhomestay' => 'ghk789',
            'songuoitoida' => 3,
            'gia' => 2400000,
            'thongtin' => 'Blahblahlbah',
            'thumbnail' => "http://cdn.sandals.com/sandals/v12/images/resorts/sbd/home/main-slider/pool-with-swim-up-bar-beach.jpg",
            'giamgia' => 0,
            'tinhtrang' => 'Bình thường',
        ]);
    }
}
