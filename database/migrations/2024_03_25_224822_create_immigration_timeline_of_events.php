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
        Schema::create('immigration_timeline_of_events', function (Blueprint $table) {
            $table->id();
            $table->string('duration');
            $table->string('plan');
            $table->longText('timeline_context');
            $table->foreignId('timeline_id')->references('id')->on('immigration_services')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('immigration_timeline_of_events');
    }
};
