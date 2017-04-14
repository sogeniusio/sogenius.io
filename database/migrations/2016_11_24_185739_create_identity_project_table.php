<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdentityProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('identity_project', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('project_id')->unsigned();
          $table->foreign('project_id')->references('id')->on('projects');
          $table->integer('identity_id')->unsigned();
          $table->foreign('identity_id')->references('id')->on('identities');
      });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('identity_project');
    }
}
