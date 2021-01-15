<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('numero',25)->nullable();
            $table->string('direccion',75)->nullable();
            $table->unsignedBigInteger('role_id')->nullable();
            $table->foreign('role_id')
                  ->references('id')
                  ->on('roles')
                  ->onDelete('set null')
            ;

            $table->unsignedBigInteger('ciudade_id')->nullable();
            $table->foreign('ciudade_id')
                  ->references('id')
                  ->on('ciudades')
                  ->onDelete('set null');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
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
        Schema::dropIfExists('users');
    }
}
