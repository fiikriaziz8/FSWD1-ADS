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
        Schema::create('cutis', function (Blueprint $table) {
            $table->string('Nomor_Induk');
            $table->foreign('Nomor_Induk')->references('Nomor_Induk')->on('karyawans');
            $table->date('Tanggal_Cuti');
            $table->integer('Lama_Cuti');
            $table->string('Keterangan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cutis');
    }
};
