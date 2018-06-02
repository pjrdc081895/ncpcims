<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Relationship;
class CreateRelationshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relationships', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('description');
            $table->timestamps();
        });

        Relationship::create([
            'description' => 'Mother'
            ]);
        Relationship::create([
            'description' => 'Son'
            ]);
        Relationship::create([
            'description' => 'Daughter'
            ]);
        Relationship::create([
            'description' => 'Brother'
            ]);
         
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relationships');
    }
}
