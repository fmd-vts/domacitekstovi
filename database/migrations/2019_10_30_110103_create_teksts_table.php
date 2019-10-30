<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTekstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teksts', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('korisnik_id')->index()->unsigned();
            $table->integer('vidljiv')->default(0);
            $table->string('izvodjac');
            $table->string('naslov');
            $table->mediumText('tekst');
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
        Schema::dropIfExists('teksts');
    }
}
