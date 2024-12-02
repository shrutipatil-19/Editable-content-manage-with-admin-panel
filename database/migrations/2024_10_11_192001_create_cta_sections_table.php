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
        Schema::create('cta_sections', function (Blueprint $table) {
            $table->id();
            $table->string('cta_title')->nullable(); // Allow null values
            $table->text('cta_description')->nullable(); // Allow null values
            $table->string('cta_button_text')->nullable(); // Allow null values
            $table->string('cta_button_link')->nullable(); // Allow null values
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cta_sections');
    }
};
