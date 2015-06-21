<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeasuresTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('measures', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('weight')->unsigned();
      $table->dateTime('date');
      $table->integer('session_id')->unsigned();
      $table->foreign('session_id')
        ->references('id')->on('sessions')
        ->onDelete('cascade');
//      $table->foreign('user_id')
//        ->references('id')->on('users')
//        ->onDelete('cascade');
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
    Schema::drop('measures', function (Blueprint $table) {
      $table->dropForeign('measures_session_id_foreign');
    });
  }
}