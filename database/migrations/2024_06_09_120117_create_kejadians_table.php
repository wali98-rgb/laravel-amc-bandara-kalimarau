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
        Schema::create('kejadians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pelapor', length: 255);
            $table->string('email_pelapor', length: 200);
            $table->string('jenis_kejadian', length: 200);
            $table->time('waktu_kejadian');
            $table->date('tanggal_kejadian');
            $table->longText('kronologi_kejadian');
            $table->text('img_kejadian')->nullable();
            $table->enum('status_kejadian', ['Teratasi', 'Tidak Teratasi'])->default('Tidak Teratasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kejadians');
    }
};
