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
        Schema::create('parallax_banners', function (Blueprint $table) {
            $table->id();
            $table->string('parallax_image'); 
            $table->string('parallax_heading'); 
            $table->string('parallax_btn_text'); 
            $table->string('parallax_btn_link'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parallax_banners');
    }
};
