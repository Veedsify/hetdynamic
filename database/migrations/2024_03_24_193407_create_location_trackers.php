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
        Schema::create('location_trackers', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address');
            $table->string('country');
            $table->string('city');
            $table->string('state');
            $table->string('state_code');
            $table->string('postal_code');
            $table->string('lat');
            $table->string('lon');
            $table->string('timezone');
            $table->string('continent');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('location_trackers');
    }
};
