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
        Schema::create('bad_words', function (Blueprint $table) {
            $table->id();
            $table->string('query');
            $table->string('replace')->nullable();
            $table->integer('point');
            $table->boolean('public');
            $table->boolean('private');
            $table->boolean('extra_char');
            $table->boolean('censorship');
            $table->boolean('censorship_all');
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
        Schema::dropIfExists('bad_words');
    }
};
