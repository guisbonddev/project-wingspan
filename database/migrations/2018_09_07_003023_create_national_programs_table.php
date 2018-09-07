<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNationalProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('national_programs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('airport');
            $table->string('facility');
            $table->time('start');
            $table->time('end');
            $table->string('scope');
            $table->integer('reason')->references('id')->on('reasons');
            $table->integer('avg');
            $table->integer('aar');
            $table->integer('pr');
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
        Schema::dropIfExists('national_programs');
    }
}
