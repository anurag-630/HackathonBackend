<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer', function(Blueprint $table)
        {
            $table->increments('ans_id');
            $table->unsignedInteger('question_id');
            $table->string('answer');
            $table->unsignedInteger('answer_by');
            $table->unsignedInteger('upvote')->default(0);
            $table->unsignedInteger('downvote')->default(0);
            $table->timestamps();
            $table->foreign('question_id')->references('ques_id')->on('question')->onDelete('cascade');
            $table->foreign('answer_by')->references('id')->on('mentor')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer');

    }
}
