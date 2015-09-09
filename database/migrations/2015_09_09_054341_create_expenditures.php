<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpenditures extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        //
        Schema::create('expenditures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('code')->unique();
            $table->enum('status', array('DRAFT', 'SUBMITTED', 'APPROVDE'))->default('DRAFT');
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
