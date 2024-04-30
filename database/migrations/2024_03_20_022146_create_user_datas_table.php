<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_datas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('provinsi_ktp');
            $table->string('kabupaten_kota_ktp');
            $table->string('kecamatan_ktp');
            $table->string('kelurahan_ktp');
            $table->string('rt_ktp');
            $table->string('rw_ktp');
            $table->string('kode_pos_ktp');
            $table->string('alamat_domisili');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_datas');
    }
};
