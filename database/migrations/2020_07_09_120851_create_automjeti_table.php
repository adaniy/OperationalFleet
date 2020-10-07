<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutomjetiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automjeti', function (Blueprint $table) {
            $table->id();
            $table->string('nr_shasise');
            $table->string('lloji');
            $table->string('brendi');
            $table->string('viti');
            $table->string('regjistrimi')->nullable();
            $table->string('kilometrat')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('automjeti');
    }
}
