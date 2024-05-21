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
        Schema::create('powers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_shop');
            $table->text('description');
            $table->integer('price');
            $table->integer('token')->default(0);
            $table->enum('special', ['CARD', 'COOKIE', 'IRWISH', 'IRWISH_TOILET', 'HORIA', 'ALCHEMIST', 'HALLOWEEN', 'CHRISTMAS', 'WINTER_FESTIVAL', 'ARTBOOK', 'MINI_MONSTER', 'PYRAMID', 'NAVAL_BATTLE', 'MYSTHORIA', 'PIRATE_QUEST', 'HAUNTED_MANOR', 'DUNGEON'])->nullable();
            $table->integer('promo')->default(0);
            $table->string('pack');
            $table->integer('gender');
            $table->enum('type', ['ONE_TIME', 'QUANTITY', 'TIME', 'PACK']);
            $table->integer('unavailable');
            $table->integer('hidden');
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
        Schema::dropIfExists('objects');
    }
};
