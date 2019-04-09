<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNguoidungDanhgiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoidung_danhgia', function (Blueprint $table) {
            $table->string('emailnguoidung');
            $table->string('idhomestay');
            $table->primary(['emailnguoidung', 'idhomestay']);
            $table->timestamps();
            $table->foreign('emailnguoidung')->references('email')->on('nguoidung');
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
        Schema::dropIfExists('nguoidung_danhgia');
    }
}
