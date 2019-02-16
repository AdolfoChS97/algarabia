<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('elemento_id');
            $table->unsignedInteger('persona_id');
            $table->integer('cant_total_productos');
            $table->integer('total');
            $table->string('entrega')->nullable();
            $table->timestamps();

            $table->foreign('elemento_id')->references('id')->on('elementos')->onUpdate('cascade');
            $table->foreign('persona_id')->references('id')->on('personas')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
