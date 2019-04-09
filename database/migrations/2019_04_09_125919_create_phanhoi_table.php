<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhanhoiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phanhoi', function (Blueprint $table) {
            $table->string('idphanhoi')->primary();
            $table->string('emailnguoidung');
            $table->string('noidung');
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
        Schema::dropIfExists('phanhoi');
    }
}
