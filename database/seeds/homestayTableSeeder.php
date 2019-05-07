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
        DB::table('homestay')->insert([
            'idhomestay' => 'abc123',
            'email' => "admin@gmail.com",
            'ten' => 'Homestay 1',
            'thanhpho' => 'Đà Nẵng',
            'diachi' => "123 Điện Biên Phủ",
            'mota' => 'Đây là cái mô tả',
            'thumbnail' => "http://cdn.sandals.com/sandals/v12/images/resorts/sbd/home/main-slider/pool-with-swim-up-bar-beach.jpg",
            'danhgia' => 4.2,
            'tinhtrang' => 'Bình thường',
        ]);

        DB::table('homestay')->insert([
            'idhomestay' => 'cef456',
            'email' => "admin@gmail.com",
            'ten' => 'Homestay 2',
            'thanhpho' => 'Hồ Chí Minh',
            'diachi' => "456 Điện Biên Phủ",
            'mota' => 'Đây là cái mô tả',
            'thumbnail' => "http://cdn.sandals.com/sandals/v12/images/resorts/sbd/home/main-slider/pool-with-swim-up-bar-beach.jpg",
            'danhgia' => 3.4,
            'tinhtrang' => 'Bình thường',
        ]);

        DB::table('homestay')->insert([
            'idhomestay' => 'ghk789',
            'email' => "admin@gmail.com",
            'ten' => 'Homestay 3',
            'thanhpho' => 'Hà Nội',
            'diachi' => "789 Điện Biên Phủ",
            'mota' => 'Đây là cái mô tả',
            'thumbnail' => "http://cdn.sandals.com/sandals/v12/images/resorts/sbd/home/main-slider/pool-with-swim-up-bar-beach.jpg",
            'danhgia' => 2.1,
            'tinhtrang' => 'Bình thường',
        ]);
    }
}
