<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePjeseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pjese', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('automjeti_id');
            $table->unsignedBigInteger('personeli_id');
            $table->string('lloji');
            $table->string('pershkrimi');
            $table->string('shuma');
            $table->string('kilometrat');
            $table->date('deleted_at')->nullable();
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
        Schema::dropIfExists('pjese');
    }
}
