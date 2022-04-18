<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatEstadisticasCsgoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_estadisticas_csgo', function (Blueprint $table) {
            $table->id();
            $table->integer('nHoras');
            $table->integer('mmr');
            $table->integer('nKills');
            $table->integer('nMuertes');
            $table->unsignedBigInteger('idCategoria');
            $table->foreign('idCategoria')->references('id')->on('categorias')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->unsignedBigInteger('idUsuario');
            $table->foreign('idUsuario')->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
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
        Schema::dropIfExists('cat_estadisticas_csgo');
    }
}
