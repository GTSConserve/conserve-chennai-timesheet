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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('user_group_id')->unsigned()->index();
            $table->foreign('user_group_id')->references('id')->on('usergroups');
            $table->integer('usergroup_department_id')->unsigned()->index()->nullable();
            $table->foreign('usergroup_department_id')->references('id')->on('usergroup_departments');
            $table->integer('usergroup_experience_id')->unsigned()->index()->nullable();
            $table->foreign('usergroup_experience_id')->references('id')->on('usergroup_experiences');
            $table->integer('usergroup_category_id')->unsigned()->index()->nullable();
            $table->foreign('usergroup_category_id')->references('id')->on('usergroup_categories');
            $table->integer('usergroup_grade_id')->unsigned()->index()->nullable();
            $table->foreign('usergroup_grade_id')->references('id')->on('usergroup_grades');
            $table->integer('usergroup_desigination_id')->unsigned()->index()->nullable();
            $table->foreign('usergroup_desigination_id')->references('id')->on('usergroup_desiginations');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('users');
    }
};
