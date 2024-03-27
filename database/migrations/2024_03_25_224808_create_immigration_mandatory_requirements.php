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
        Schema::create('mandatory_requirements', function (Blueprint $table) {
            $table->id();
            $table->string('requirements')->nullable();
            $table->longText('requirement_context')->nullable();
            $table->foreignId('immigration_service_id')->references('id')->on('immigration_services')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('immigration_mandatory_requirements');
    }
};
