<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartments extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        //
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('manager');
            $table->string('email');
            $table->integer('school_id')->unsigned();
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
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
