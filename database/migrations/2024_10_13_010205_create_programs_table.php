<?php

// database/migrations/xxxx_xx_xx_create_programs_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->json('images')->nullable(); // Assuming images are stored as JSON
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Foreign key
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('programs');
    }
}

