<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnquiriesTable extends Migration
{
    public function up()
    {
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();  // Auto-incrementing primary key
            $table->string('name');  // Name field
            $table->string('email');  // Email field
            $table->string('phone');  // Phone number field
            $table->text('message');  // Message field
            $table->string('event_type');  // Event type (Wedding, Birthday, etc.)
            $table->timestamps();  // Created and updated timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('enquiries');
    }
}
