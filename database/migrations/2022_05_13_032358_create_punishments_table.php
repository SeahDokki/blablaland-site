<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('punishments', function (Blueprint $table) {
            $table->id();
            $table->text('reason');
            $table->integer('duration');
            $table->enum('type', ['BAN', 'FORUM_BAN', 'KICK', 'INFO', 'LIBERE', 'SIGNATURE', 'AVATAR']);
            $table->foreignId('player_id')->constrained();
            $table->unsignedBigInteger('moderator_id');
            $table->foreign('moderator_id')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('punishments');
    }
};
