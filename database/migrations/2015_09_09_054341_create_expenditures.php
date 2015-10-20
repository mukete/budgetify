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
            $table->integer('department_id')->unsigned();
            $table->string('code')->unique();
            $table->text('details');
            $table->enum('status', array('DRAFT', 'SUBMITTED', 'APPROVED'))->default('DRAFT');
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
