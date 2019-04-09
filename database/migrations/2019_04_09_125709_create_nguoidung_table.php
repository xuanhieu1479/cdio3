<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNguoidungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoidung', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('matkhau');
            $table->string('ten');
            $table->string('sdt');
            $table->smallInteger('idchucvu');
            $table->string('tinhtrang');
            $table->timestamps();
            $table->foreign('idchucvu')->references('idchucvu')->on('chucvu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nguoidung');
    }
}
