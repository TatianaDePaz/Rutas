<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viajes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_autobus')->nullable();
            $table->unsignedBigInteger('id_urbanizacion')->nullable();
            $table->unsignedBigInteger('id_zona')->nullable();
            $table->unsignedBigInteger('id_ruta')->nullable();
            $table->unsignedBigInteger('id_canton')->nullable();
            $table->unsignedBigInteger('id_departamento')->nullable();
            $table->unsignedBigInteger('id_municipio')->nullable();

            $table->foreign('id_autobus')
                    ->references('id')->on('autobuses')
                    ->onDelete('set null');

            $table->foreign('id_urbanizacion')
                    ->references('id')->on('urbanizaciones')
                    ->onDelete('set null');

            $table->foreign('id_zona')
                    ->references('id')->on('zonas')
                    ->onDelete('set null');

            $table->foreign('id_ruta')
                    ->references('id')->on('rutas')
                    ->onDelete('set null');

            $table->foreign('id_canton')
                    ->references('id')->on('cantones')
                    ->onDelete('set null');

            $table->foreign('id_departamento')
                    ->references('id')->on('departamentos')
                    ->onDelete('set null');

            $table->foreign('id_municipio')
                    ->references('id')->on('municipios')
                    ->onDelete('set null');
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
        Schema::dropIfExists('viajes');
    }
}
