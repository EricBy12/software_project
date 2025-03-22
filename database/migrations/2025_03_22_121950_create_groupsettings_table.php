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
        Schema::create('groupsettings', function (Blueprint $table) {
            $table->id();
            $table->foreignId("group_id");
            $table->string("groupAdmissions");
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
        Schema::dropIfExists('groupsettings');
    }
};