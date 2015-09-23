<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccomplishmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accomplishments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->integer('beers');
            $table->integer('coffees');
            $table->string('date');
            $table->unsignedInteger('user_id');
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
        Schema::table('accomplishments', function (Blueprint $table) {
            //
        });
    }
}
