<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('projects', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title');
          $table->string('overview')->nullable();
          $table->text('description');
          $table->string('slug')->unique();
          $table->integer('type_id')->nullable()->unsigned();

          $table->string('display_image')->nullable();
          $table->string('feat_image1')->nullable();
          $table->string('feat_image2')->nullable();
          $table->string('feat_image3')->nullable();
          
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
        Schema::dropIfExists('projects');
    }
}
