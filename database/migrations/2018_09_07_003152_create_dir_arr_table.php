<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirArrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dir_arr', function (Blueprint $table) {
            $table->increments('id');
            $table->string('airport');
            $table->string('facility');
            $table->string('arrival');
            $table->string('departure');
            $table->integer('vmc');
            $table->integer('low_vmc');
            $table->integer('imc');
            $table->integer('low_imc');
            $table->text('notes');
            $table->integer('created_by');
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
        Schema::dropIfExists('dir_arr');
    }
}
