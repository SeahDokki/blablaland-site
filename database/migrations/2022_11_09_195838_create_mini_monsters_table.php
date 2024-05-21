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
        Schema::create('mini_monsters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id')->constrained();
            $table->foreignId('power_id')->constrained();
            $table->string('name')->nullable();
            $table->integer('typeX')->default(0);
            $table->integer('typeY')->default(0);
            $table->integer('worm')->default(0);
            $table->integer('apple')->default(0);
            $table->integer('ant')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mini_monsters');
    }
};
