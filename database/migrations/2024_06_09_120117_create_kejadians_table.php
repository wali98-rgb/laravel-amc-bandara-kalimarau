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
            $table->string('jenis_kejadian', length: 200);
            $table->time('waktu_kejadian', precision: 3);
            $table->date('tanggal_kejadian');
            $table->longText('kronologi_kejadian');
            $table->binary('img_kejadian');
            $table->enum('status_kejadian', ['ya', 'tidak'])->default('tidak');
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
