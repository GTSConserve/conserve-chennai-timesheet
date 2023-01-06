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
        Schema::connection('mysql_migration')->create('education', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id')->unsigned()->index();
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->string('sslc_institution')->nullable();
            $table->string('sslc_board')->nullable();
            $table->date('sslc_date')->nullable();
            $table->string('sslc_percentage')->nullable();
            $table->string('sslc_file')->nullable();
            $table->string('hsc_institution')->nullable();
            $table->string('hsc_board')->nullable();
            $table->date('hsc_date')->nullable();
            $table->string('hsc_percentage')->nullable();
            $table->string('hsc_file')->nullable();
            $table->string('diploma_institution')->nullable();
            $table->string('diploma_board')->nullable();
            $table->date('diploma_date')->nullable();
            $table->string('diploma_percentage')->nullable();
            $table->string('diploma_file')->nullable();
            $table->string('bachelor_institution')->nullable();
            $table->string('bachelor_board')->nullable();
            $table->date('bachelor_date')->nullable();
            $table->string('bachelor_percentage')->nullable();
            $table->string('bachelor_file')->nullable();
            $table->string('master_institution')->nullable();
            $table->string('master_board')->nullable();
            $table->date('master_date')->nullable();
            $table->string('master_percentage')->nullable();
            $table->string('master_file')->nullable();
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
        Schema::dropIfExists('education');
    }
};
