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
        Schema::create('usergroup_experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('status',['0','1'])->default('1');
            $table->integer('usergroup_category_id')->unsigned()->index()->nullable();
            $table->foreign('usergroup_category_id')->references('id')->on('usergroup_categories');
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
        Schema::dropIfExists('usergroup_experiences');
    }
};