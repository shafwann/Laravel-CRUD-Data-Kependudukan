<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->increments('id_penduduk');
            $table->bigInteger('nik');
            $table->string('nama', 255);
            $table->enum('gender', ['Laki-laki', 'Perempuan']);
            $table->string('alamat', 255);
            $table->enum('status', ['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati']);
            $table->string('pekerjaan', 255);
            $table->enum('warga', ['WNI', 'WNA']);
            $table->string('asal', 255);
            $table->date('tanggal');
            $table->enum('darah', ['A', 'B', 'AB', 'O']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penduduk');
    }
};
