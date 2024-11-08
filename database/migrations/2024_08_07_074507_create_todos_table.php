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
        Schema::create('todos', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('title');
            $table->text('task');
            $table->date('date');
            $table->boolean('priority');
            $table->string('category');
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key
            $table->timestamps(); // Created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};
