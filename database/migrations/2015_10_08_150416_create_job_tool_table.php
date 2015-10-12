<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobToolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_tool', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id')->unsigned();
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->integer('tool_id')->unsigned();
            $table->foreign('tool_id')->references('id')->on('tools')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('job_tool');
    }
}
