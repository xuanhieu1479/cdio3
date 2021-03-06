<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatphongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datphong', function (Blueprint $table) {
            $table->string('iddatphong')->primary();
            $table->string('emailnguoidung');
            $table->string('idphong');
            $table->date('ngayden')->nullable();
            $table->date('ngaydi')->nullable();
            $table->string('tinhtrang');
            $table->timestamps();
            $table->foreign('idphong')->references('idphong')->on('phong');
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
        Schema::dropIfExists('datphong');
    }
}
