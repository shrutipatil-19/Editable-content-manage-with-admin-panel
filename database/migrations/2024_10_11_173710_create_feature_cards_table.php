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
        Schema::create('feature_cards', function (Blueprint $table) {
            $table->id();
            $table->string('icon')->nullable();  // Optional icon field
            $table->string('FeatureCardHeading');
            $table->text('FeatureCardDescription');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feature_cards');
    }
};
