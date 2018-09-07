<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDelayInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delay_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('airport');
            $table->string('facility');
            $table->string('ad');
            $table->string('dd');
            $table->time('time');
            $table->integer('reason')->references('id')->on('reasons');
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
        Schema::dropIfExists('delay_info');
    }
}
