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
        Schema::connection('mysql_migration')->create('employee_team_leader_links', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->unsigned()->index();
            $table->foreign('project_id')->references('id')->on('projects');
            $table->integer('emp_id')->unsigned()->index();
            $table->foreign('emp_id')->references('id')->on('users');
            $table->integer('assign_by')->unsigned()->index();
            $table->foreign('assign_by')->references('id')->on('users');
            $table->integer('reporting_tl_id')->unsigned()->index();
            $table->foreign('reporting_tl_id')->references('id')->on('users');
            $table->enum('status',['0','1'])->nullable();
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
        Schema::dropIfExists('employee_team_leader_links');
    }
};
