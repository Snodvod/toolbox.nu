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
            $table->boolean('accepted');
            $table->boolean('active');
            $table->dateTime('start');
            $table->dateTime('stop');
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
        Schema::drop('user_loans_tool');
    }
}
