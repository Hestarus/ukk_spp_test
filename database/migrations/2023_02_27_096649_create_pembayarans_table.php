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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('petugas_id');
            $table->foreignId('siswa_id');
            $table->date('tgl_bayar')->default(now());
            $table->string('bulan_bayar', 15);
            $table->string('tahun_bayar',4);
            $table->foreignId('spp_id');
            $table->integer('jumlah_bayar');
            $table->timestamps();

            $table->foreign('petugas_id')->references('id')->on('users');
            $table->foreign('siswa_id')->references('id')->on('siswas');
            $table->foreign('spp_id')->references('spp_id')->on('siswas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
