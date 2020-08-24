<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKarburantiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karburanti', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('automjeti_id');
            $table->unsignedBigInteger('personeli_id');
            $table->string('litra');
            $table->string('shuma');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('automjeti_id')->references('id')->on('automjeti');
            $table->foreign('personeli_id')->references('id')->on('personeli');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karburanti');
    }
}
