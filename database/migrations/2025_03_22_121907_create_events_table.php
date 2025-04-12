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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string("title")->default("DATA_NOT_FOUND");
            $table->string("tag")->default("DATA_NOT_FOUND");
            $table->string("description")->default("DATA_NOT_FOUND");
            $table->string("location")->default("DATA_NOT_FOUND");
            $table->string("time")->default("DATA_NOT_FOUND");
            $table->foreignId("group_id")->default(1); //For pivot table.
            $table->unsignedBigInteger("organizer_id")->nullable(); // Assigned to user on creation. chat gpt assisted.
            $table->string("attendance_restriction")->default("DATA_NOT_FOUND");
            $table->integer("attendees")->default(0);
            $table->timestamps();

            $table->foreign('organizer_id')->references('id')->on('users')->onDelete('set null'); //ChatGPT.

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
