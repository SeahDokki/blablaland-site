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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->integer('gender')->default(0);
            $table->integer('show_friend')->default(1);
            $table->integer('show_wedding')->default(1);
            $table->string('avatar')->default('public/avatars/default.png');
            $table->text('signature')->nullable();
            $table->text('website')->nullable();
            $table->string('grade_alias')->nullable();
            $table->foreignId('grade_id')->constrained();
            $table->foreignId('statut_id')->nullable()->constrained();
            $table->foreignId('country_id')->default(23)->constrained();
            $table->timestamp('website_last_at')->nullable();
            $table->timestamp('forum_last_at')->nullable();
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
        Schema::dropIfExists('users');
    }
};
