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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->String('title')->default('Sijonjong');
            $table->String('author')->default('Asep');
            $table->String('rating')->default('8.5');
            $table->String('reviews')->default('Lumayan Bagus');
            $table->String('publication_year')->default('2010');
            $table->String('genre')->default('Action');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
