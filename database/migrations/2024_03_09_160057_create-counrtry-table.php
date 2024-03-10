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
        //
        Schema::create("countries", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("iso2");
            $table->string("phone_code");
            $table->string("capital");
            $table->string("currency");
            $table->string("timezones");
            $table->string("flag");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
