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
        Schema::create('tugas_darings', function (Blueprint $table) {
            $table->id();
            $table->integer('grade'); // kelas 1-6
            $table->string('subject'); // nama mata pelajaran
            $table->string('title'); // judul materi
            $table->string('youtube_link'); // link youtube
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tugas_darings');
    }
};