<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudget extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        //
        Schema::create('budgets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->string('item');
            $table->integer('quantity')->unsigned();
            $table->integer('price')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->enum('status', array('DRAFT', 'APPROVED', 'DECLINED'))->default('DRAFT');
            $table->date('start_year');
            $table->date('end_year');
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
