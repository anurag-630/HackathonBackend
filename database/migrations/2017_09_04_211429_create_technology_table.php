<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnologyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technology', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('signup_id');
            $table->string('technology');
            $table->timestamps();
            $table->foreign('signup_id')->references('id')->on('signup')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technology');

    }
}
