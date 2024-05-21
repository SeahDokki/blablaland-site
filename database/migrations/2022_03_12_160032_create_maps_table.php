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
        Schema::create('maps', function (Blueprint $table) {
            \Illuminate\Support\Facades\DB::statement('SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";');
            $table->id();
            $table->string('name');
            $table->integer('positionX');
            $table->integer('positionY');
            $table->integer('respawnX')->nullable();
            $table->integer('respawnY')->nullable();
            $table->boolean('protected');
            $table->boolean('individual');
            $table->boolean('gift_receiver')->default(0);
            $table->integer('file_id');
            $table->integer('meteo_id');
            $table->integer('transport_id');
            $table->integer('region_id');
            $table->integer('planet_id');
            $table->integer('paradis_id')->nullable();
            $table->foreignId('grade_id')->constrained();
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
        Schema::dropIfExists('maps');
    }
};
