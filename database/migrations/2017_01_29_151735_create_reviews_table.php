<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
          $table->increments('id');
          $table->text('firstname');
          $table->text('lastname');
          $table->string('facebook');
          $table->string('instagram');
          $table->string('twitter');
          $table->text('q1');
          $table->text('q2');
          $table->text('q3');
          $table->text('q4');
          $table->text('comments');
          $table->integer('testimony_id')->unsigned();
          $table->foreign('testimony_id')->references('id')->on('testimonies');
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
      Schema::dropIfExists('reviews');

    }
}
