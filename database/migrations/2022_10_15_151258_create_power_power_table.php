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
        Schema::create('power_power', function (Blueprint $table) {
            $table->id();
            $table->foreignId('power_id')->constrained();
            $table->unsignedBigInteger('gift_power_id');
            $table->foreign('gift_power_id')
                ->references('id')
                ->on('powers');
            $table->integer('quantity');
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
        Schema::dropIfExists('power_power');
    }
};
