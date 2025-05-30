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
        Schema::create('attraction_building', function (Blueprint $table) {
            $table->foreignId('attraction_id')->references('id')->on('attractions')->onDelete('cascade')->onUpdate('no action');
            $table->foreignId('building_id')->references('id')->on('buildings')->onDelete('cascade')->onUpdate('no action');
            $table->string('distance')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attraction_building');
    }
};
