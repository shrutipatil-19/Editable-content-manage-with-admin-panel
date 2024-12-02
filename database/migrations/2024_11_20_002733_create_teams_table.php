<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('personal_events', function (Blueprint $table) {
            $table->foreignId('events_id')->constrained()->onDelete('cascade'); // Adds the event_id foreign key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('personal_events', function (Blueprint $table) {
            $table->dropForeign(['events_id']);
            $table->dropColumn('events_id');
        });
    }
};

