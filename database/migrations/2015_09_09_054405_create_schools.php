<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchools extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        //
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('dean');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        //
    }
}
