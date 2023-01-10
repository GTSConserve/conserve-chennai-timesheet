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
        // Schema::create('employee_week_off_links', function (Blueprint $table) {
        //     // $table->increments('id');

        //     // $table->integer('week_off_id')->unsigned()->index();
        //     // $table->foreign('week_off_id')->references('id')->on('week_offs');
        //     // $table->string('days')->nullable();
        //     // $table->enum('status',['0','1'])->default('0');
        //     // $table->timestamps();
        //     // $table->softDeletes();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_week_off_links');
    }
};
