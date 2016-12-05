<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdeaStatusPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idea_status', function (Blueprint $table) {
            $table->integer('idea_id')->unsigned()->index();
            $table->foreign('idea_id')->references('id')->on('ideas')->onDelete('cascade');
            $table->integer('status_id')->unsigned()->index();
            $table->foreign('status_id')->references('id')->on('status')->onDelete('cascade');
            $table->primary(['idea_id', 'status_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('idea_status');
    }
}
