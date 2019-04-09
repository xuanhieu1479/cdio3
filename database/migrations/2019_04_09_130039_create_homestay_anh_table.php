<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomestayAnhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homestay_anh', function (Blueprint $table) {
            $table->string('idhomestay');
            $table->string('anh');
            $table->primary(['idhomestay', 'anh']);
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
        Schema::dropIfExists('homestay_anh');
    }
}
