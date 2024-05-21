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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('pseudo');
            $table->string('session');
            $table->integer('experience');
            $table->integer('experience_daily');
            $table->integer('blabillon');
            $table->integer('positionX');
            $table->integer('positionY');
            $table->boolean('direction')->default(0);
            $table->boolean('online');
            $table->string('clan')->nullable();
            $table->integer('shine')->nullable();
            $table->string('chat_color')->nullable();
            $table->text('reason_ban')->nullable();
            $table->integer('experience_ban')->nullable();
            $table->integer('secret_chat')->default(0);
            $table->integer('secret_tracker')->default(0);
            $table->foreignId('skin_id')->constrained();
            $table->integer('map_id');
            $table->integer('server_id');
            $table->foreignId('user_id')->constrained();
            $table->timestamp('spooky_at')->nullable();
            $table->timestamp('rewarded_at')->nullable();
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
        Schema::dropIfExists('players');
    }
};
