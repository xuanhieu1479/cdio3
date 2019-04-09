<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomestayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homestay', function (Blueprint $table) {
            $table->string('idhomestay')->primary();
            $table->string('emailnguoidung');
            $table->string('ten');
            $table->string('diachi');
            $table->string('mota');
            $table->string('thumbnail');
            $table->string('danhgia');
            $table->string('tinhtrang');
            $table->timestamps();
            $table->foreign('emailnguoidung')->references('email')->on('nguoidung');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homestay');
    }
}
