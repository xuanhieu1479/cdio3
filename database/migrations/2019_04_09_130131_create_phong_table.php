<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phong', function (Blueprint $table) {
            $table->string('idphong')->primary();
            $table->string('idhomestay');
            $table->smallInteger('songuoitoida')->unsigned();
            $table->double('gia');
            $table->string('thongtin');
            $table->string('thumbnail');
            $table->float('giamgia')->unsigned();
            $table->string('tinhtrang');
            $table->timestamps();
            $table->foreign('idhomestay')->references('idhomestay')->on('homestay');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phong');
    }
}
