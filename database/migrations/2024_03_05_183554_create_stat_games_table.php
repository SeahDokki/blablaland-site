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
        Schema::create('stat_games', function (Blueprint $table) {
            $table->id();
            $table->integer('score')->default(0);
            $table->integer('max_level')->default(0);
            $table->integer('won')->default(0);
            $table->integer('lost')->default(0);
            $table->integer('remaining_token')->default(0);
            $table->integer('total_token')->default(0);
            $table->enum('game', ['TOURNAMENT_FURY', 'PYRAMID', 'NAVAL_BATTLE', 'MYSTHORIA', 'HAUNTED_MANOR', 'DUNGEON']);
            $table->foreignId('player_id')->constrained();
            $table->timestamps();

            $table->unique(['player_id', 'game']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stat_games');
    }
};
