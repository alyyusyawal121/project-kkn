<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('program_id'); // Foreign key ke tabel programs
            $table->string('image_path'); // Path gambar
            $table->timestamps();
        
            // Relasi ke tabel programs
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
        });
        
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
