<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_sheets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users');
            $table->date('date')->nullable();
            $table->integer('user_group_id')->unsigned()->index();
            $table->foreign('user_group_id')->references('id')->on('usergroups');
            $table->integer('project_id')->unsigned()->index();
            $table->foreign('project_id')->references('id')->on('projects');
            $table->integer('activity_id')->unsigned()->index();
            $table->foreign('activity_id')->references('id')->on('activities');
            $table->integer('task_id')->unsigned()->index();
            $table->foreign('task_id')->references('id')->on('tasks');
            $table->integer('sub_task1_id')->unsigned()->index()->nullable();
            $table->foreign('sub_task1_id')->references('id')->on('sub_tasks');
            $table->integer('sub_task2_id')->unsigned()->index()->nullable();
            $table->foreign('sub_task2_id')->references('id')->on('sub_tasks2s');
            $table->string('description')->nullable();
            $table->string('work_hours')->nullable();
            $table->string('approved_work_hours')->nullable();
            $table->integer('approved_by')->unsigned()->index()->nullable();
            $table->foreign('approved_by')->references('id')->on('users');
            $table->date('approved_date')->nullable();
            $table->enum('timesheet_status',['0','1']);
            $table->enum('activity_status',['0','1']);
            $table->enum('status',['0','1']);
            $table->timestamps();
            $table->softDeletes();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('time_sheets');
    }
};
