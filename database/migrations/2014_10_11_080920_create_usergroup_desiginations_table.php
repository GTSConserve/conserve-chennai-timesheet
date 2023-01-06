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
        Schema::connection('mysql_migration')->create('usergroup_desiginations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('usergroup_department_id')->unsigned()->index()->nullable();
            $table->foreign('usergroup_department_id')->references('id')->on('usergroup_departments');
            $table->integer('usergroup_experience_id')->unsigned()->index()->nullable();
            $table->foreign('usergroup_experience_id')->references('id')->on('usergroup_experiences');
            $table->integer('usergroup_grade_id')->unsigned()->index()->nullable();
            $table->foreign('usergroup_grade_id')->references('id')->on('usergroup_grades');
            $table->enum('status',['0','1'])->default('1');
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
        Schema::dropIfExists('usergroup_desiginations');
    }
};
