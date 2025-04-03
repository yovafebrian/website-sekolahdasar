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
        Schema::create('prestasis', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->string('nama');
            $table->text('deskripsi')->nullable();
            $table->string('tingkat'); // Kabupaten, Provinsi, Nasional, Internasional
            $table->string('kategori'); // Akademik, Non-Akademik
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestasis');
    }
};

