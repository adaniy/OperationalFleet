<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServisiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servisi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('automjeti_id');
            $table->unsignedBigInteger('personeli_id');
            $table->string('pershkrimi');
            $table->string('shuma');
            $table->string('kilometrat');
            $table->date('servisi_ardhshem');
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
        Schema::dropIfExists('servisi');
    }
}
