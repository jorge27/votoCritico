<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Candidatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('candidato', function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre_candidato');
            $table->text('partido');

            $table->integer('tipo_candidatura'); /*Example: presidencia, gobernatura, alcaldia, senaduria, diputados_locales, diputados_camara_baja*/
            
            $table->string('email')->unique();
            $table->text('sitio');
            $table->string('foto')->nullable();
            $table->integer('id_estado')->nullable();
            $table->integer('id_estado_municipio')->nullable();
            $table->text('telefono');
            $table->tinyInteger('active')->default(1);
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
        Schema::drop('candidato');
    }
}
