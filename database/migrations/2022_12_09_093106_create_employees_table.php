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
        Schema::connection('mysql_migration')->create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('location_id')->unsigned()->index()->nullable();
            $table->foreign('location_id')->references('id')->on('locations');
            $table->integer('country_id')->unsigned()->index()->nullable();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->integer('division_id')->unsigned()->index()->nullable();
            $table->foreign('division_id')->references('id')->on('divisions');
            $table->integer('shift_id')->unsigned()->index()->nullable();
            $table->foreign('shift_id')->references('id')->on('divisions');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->enum('gender',['Male','Female','Others'])->nullable();
            $table->date('dob_certificate')->nullable();
            $table->date('dob_original')->nullable();
            $table->enum('marital_status',['Single','Married','Widowed','Separated','Divorced'])->nullable();
            $table->string('user_name')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('offical_mail')->nullable();
            $table->string('personal_mail')->nullable();
            $table->string('nationality')->nullable();
            $table->string('alter_phone_no')->nullable();
            $table->string('father_name')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('residential_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('emergency_name')->nullable();
            $table->string('emergency_relation')->nullable();
            $table->string('emergency_number')->nullable();
            $table->string('aadhar_number')->nullable();
            $table->string('aadhar_file')->nullable();
            $table->string('pan_number')->nullable();
            $table->string('pan_file')->nullable();
            $table->string('license_number')->nullable();
            $table->string('license_up_to')->nullable();
            $table->string('license_file')->nullable();
            $table->string('emp_id')->nullable();
            $table->string('emp_code')->nullable();
            $table->string('doj')->nullable();
            $table->string('division')->nullable();
            $table->string('designation')->nullable();
            $table->integer('reporting_to')->unsigned()->index()->nullable();
            $table->foreign('reporting_to')->references('id')->on('users');
            $table->string('employment_type')->nullable();
            $table->string('employment_status')->nullable();
            $table->integer('employee_access')->unsigned()->index();
            $table->foreign('employee_access')->references('id')->on('usergroups');
            $table->string('skill1')->nullable();
            $table->string('skill2')->nullable();
            $table->string('skill3')->nullable();
            $table->string('basic')->nullable();
            $table->string('hra')->nullable();
            $table->string('other_allowances')->nullable();
            $table->string('ctc')->nullable();
            $table->string('cost_hra')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('offer_letter')->nullable();
            $table->string('teansfer_letter')->nullable();
            $table->string('experience_letter')->nullable();
            $table->string('month_pay_slip')->nullable();
            $table->string('resume')->nullable();
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
        Schema::dropIfExists('employees');
    }
};
