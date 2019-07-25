<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubtasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('task_id')
            ->unsigned()
            ->index();
            $table->string('name');
            $table->text('description');
            $table->boolean('done');
            $table->timestamp('end', 0)->nullable();
            $table->timestamp('ended_at', 0)->nullable();
            $table->timestamps();
            
            $table->foreign('task_id')
            ->references('id')
            ->on('tasks')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subtasks');
    }
}
