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
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->unsignedBigInteger('divisi_id');
            $table->unsignedBigInteger('penilaian_id');
            $table->unsignedBigInteger('kompetensi_id');
            $table->foreign('divisi_id')->references('id')->on('divisis');
            $table->foreign('penilaian_id')->references('id')->on('penilaians');
            $table->foreign('kompetensi_id')->references('id')->on('kompetensis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawans');
    }
};
