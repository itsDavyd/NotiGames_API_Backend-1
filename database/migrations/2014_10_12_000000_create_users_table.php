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
            $table->bigIncrements('id');;
            $table->string('nombre','50');
            $table->string('apellidos','50');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('telefono', '9');
            $table->string('provincia','25');
            $table->string('ciudad','25');
            $table->string('foto')->nullable();
            $table->string('usuario');
            $table->string('password');
            $table->string('rol')->default(0);
            $table->rememberToken();
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
