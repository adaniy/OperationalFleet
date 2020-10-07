<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersoneliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personeli', function (Blueprint $table) {
            $table->id();
            $table->string('nr_personal');
            $table->string('emri_mbiemri');
            $table->date('data_lindjes');
            $table->string('nr_telefonite');
            $table->string('niveli_shkollimit');
            $table->string('grupi_gjakut');
            $table->string('pushimet')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('personeli');
    }
}
