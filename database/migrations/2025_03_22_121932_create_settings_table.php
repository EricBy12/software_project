<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void //This table is unused
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id");
            $table->string("hideRealName");
            $table->string("privateStats");
            $table->string("appearOnLeaderboard");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
