<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kendaraan');
            $table->string('tahun_pembuatan');
            $table->string('warna_mobil');
            $table->integer('kapasitas_penumpang');
            $table->longText('deskripsi');
            $table->unsignedBigInteger('car_id');
            $table->timestamps();

            $table->foreign('car_id')->references('id')->on('cars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details');
        Schema::table('details', function (Blueprint $table) {
            $table->foreignId('car_id')->constrained();
        });
    }
}
