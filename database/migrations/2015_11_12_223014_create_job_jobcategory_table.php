<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobJobcategoryTable extends Migration
{

    public function up()
    {
        Schema::create('job_jobcategory', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id');
            $table->integer('jobcategory');
        });
    }

    public function down()
    {
        Schema::drop('job_jobcategory');
    }
}
