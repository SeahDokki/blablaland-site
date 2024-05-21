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
        Schema::create('skins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->integer('price');
            $table->integer('token')->default(0);
            $table->enum('special', ['V1', 'CARD', 'COOKIE', 'IRWISH_TOILET', 'PYRAMID', 'NAVAL_BATTLE', 'MYSTHORIA', 'PIRATE_QUEST', 'HAUNTED_MANOR', 'DUNGEON'])->nullable();
            $table->integer('promo')->default(0);
            $table->string('color');
            $table->boolean('unavailable');
            $table->boolean('hidden')->default(1);
            $table->foreignId('group_id')->nullable()->constrained();
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
        Schema::dropIfExists('skins');
    }
};
