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
            'idphong' => 'abc123',
            'idhomestay' => 'abc123',
            'songuoitoida' => 2,
            'gia' => 1600000,
            'thongtin' => 'Blahblahlbah',
            'thumbnail' => "http://cdn.sandals.com/sandals/v12/images/resorts/sbd/home/main-slider/pool-with-swim-up-bar-beach.jpg",
            'giamgia' => 0,
            'tinhtrang' => 'Bình thường',
        ]);

        DB::table('phong')->insert([
            'idphong' => 'abc231',
            'idhomestay' => 'abc123',
            'songuoitoida' => 3,
            'gia' => 2400000,
            'thongtin' => 'Blahblahlbah',
            'thumbnail' => "http://cdn.sandals.com/sandals/v12/images/resorts/sbd/home/main-slider/pool-with-swim-up-bar-beach.jpg",
            'giamgia' => 0,
            'tinhtrang' => 'Bình thường',
        ]);

        DB::table('phong')->insert([
            'idphong' => 'cef654',
            'idhomestay' => 'cef456',
            'songuoitoida' => 1,
            'gia' => 700000,
            'thongtin' => 'Blahblahlbah',
            'thumbnail' => "http://cdn.sandals.com/sandals/v12/images/resorts/sbd/home/main-slider/pool-with-swim-up-bar-beach.jpg",
            'giamgia' => 0,
            'tinhtrang' => 'Bình thường',
        ]);

        DB::table('phong')->insert([
            'idphong' => 'cef456',
            'idhomestay' => 'cef456',
            'songuoitoida' => 2,
            'gia' => 1400000,
            'thongtin' => 'Blahblahlbah',
            'thumbnail' => "http://cdn.sandals.com/sandals/v12/images/resorts/sbd/home/main-slider/pool-with-swim-up-bar-beach.jpg",
            'giamgia' => 0,
            'tinhtrang' => 'Bình thường',
        ]);

        DB::table('phong')->insert([
            'idphong' => 'cef546',
            'idhomestay' => 'cef456',
            'songuoitoida' => 3,
            'gia' => 2100000,
            'thongtin' => 'Blahblahlbah',
            'thumbnail' => "http://cdn.sandals.com/sandals/v12/images/resorts/sbd/home/main-slider/pool-with-swim-up-bar-beach.jpg",
            'giamgia' => 0,
            'tinhtrang' => 'Bình thường',
        ]);

        DB::table('phong')->insert([
            'idphong' => 'gkh987',
            'idhomestay' => 'ghk789',
            'songuoitoida' => 1,
            'gia' => 900000,
            'thongtin' => 'Blahblahlbah',
            'thumbnail' => "http://cdn.sandals.com/sandals/v12/images/resorts/sbd/home/main-slider/pool-with-swim-up-bar-beach.jpg",
            'giamgia' => 0,
            'tinhtrang' => 'Bình thường',
        ]);

        DB::table('phong')->insert([
            'idphong' => 'gkh789',
            'idhomestay' => 'ghk789',
            'songuoitoida' => 2,
            'gia' => 1800000,
            'thongtin' => 'Blahblahlbah',
            'thumbnail' => "http://cdn.sandals.com/sandals/v12/images/resorts/sbd/home/main-slider/pool-with-swim-up-bar-beach.jpg",
            'giamgia' => 0,
            'tinhtrang' => 'Bình thường',
        ]);

        DB::table('phong')->insert([
            'idphong' => 'gkh879',
            'idhomestay' => 'ghk789',
            'songuoitoida' => 3,
            'gia' => 2700000,
            'thongtin' => 'Blahblahlbah',
            'thumbnail' => "http://cdn.sandals.com/sandals/v12/images/resorts/sbd/home/main-slider/pool-with-swim-up-bar-beach.jpg",
            'giamgia' => 0,
            'tinhtrang' => 'Bình thường',
        ]);
    }
}
