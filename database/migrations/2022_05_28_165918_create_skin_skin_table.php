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
        Schema::create('skin_skin', function (Blueprint $table) {
            $table->id();
            $table->foreignId('skin_id')->constrained();
            $table->unsignedBigInteger('gift_skin_id');
            $table->foreign('gift_skin_id')
            ->references('id')
            ->on('skins');
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
        Schema::dropIfExists('skin_skin');
    }
};
