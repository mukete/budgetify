<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestForm extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        //
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reference')->unique();
            $table->string('title');
            $table->enum('status', array('DRAFT', 'APPROVED', 'DECLINED'))->default('DRAFT');
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
