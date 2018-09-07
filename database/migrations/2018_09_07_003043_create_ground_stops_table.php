<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroundStopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ground_stops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('airport');
            $table->time('time');
            $table->string('scope');
            $table->integer('reason')->references('id')->on('reasons');
            $table->string('facility');
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
        Schema::dropIfExists('ground_stops');
    }
}
