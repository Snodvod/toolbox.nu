<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLoansToolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_loans_tool', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('tool_id');
            $table->boolean('active');
            $table->dateTime('start');
            $table->dateTime('stop');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_loans_tool');
    }
}
