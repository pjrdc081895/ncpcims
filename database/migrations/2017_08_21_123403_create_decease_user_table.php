<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeceaseUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decease_user', function (Blueprint $table) {
             $table->increments('id')->unsigned();
             $table->integer('user_id')->unsigned();
             $table->integer('decease_id')->unsigned();
             $table->integer('relationship_id')->unsigned();
             $table->timestamps();
             
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
             $table->foreign('decease_id')->references('id')->on('deceases')->onDelete('cascade');
              $table->foreign('relationship_id')->references('id')->on('relationships')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('decease_user');
    }
}
