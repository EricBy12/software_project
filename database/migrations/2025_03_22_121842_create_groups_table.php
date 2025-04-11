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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string("title")->default("(NOT_FOUND)");
            $table->text("description")->default("");
            $table->string("location")->default("(NOT_FOUND)");
            $table->unsignedBigInteger("owner_id")->nullable();
            $table->integer("members")->default(1);
            $table->string("groupAdmissions")->default("Open");
            $table->boolean("privateStats")->default(false);
            //$table->boolean("appearOnLeaderboard")->default(true);
            $table->timestamps();

            $table->foreign('owner_id')->references('id')->on('users')->onDelete('set null'); //chat gpt
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
