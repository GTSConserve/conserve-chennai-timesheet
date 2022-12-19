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
        Schema::create('sub_tasks2s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('sub_task_id')->unsigned()->index();
            $table->foreign('sub_task_id')->references('id')->on('sub_tasks');
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
        Schema::dropIfExists('sub_tasks2s');
    }
};
