<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotorcyclesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('motorcycles', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama motor
            $table->text('description')->nullable(); // Deskripsi motor
            $table->string('smart_locate_code')->unique(); // Kode unik untuk SmartLocate System
            $table->boolean('eco_friendly')->default(false); // Apakah motor ramah lingkungan
            $table->string('nav_ride_status')->default('inactive'); // Status NavRide Navigator
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motorcycles');
    }
}
