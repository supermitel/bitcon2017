<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('photo');
            $table->text('description');
        });

        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId')->unsigned();
            $table->integer('teamId')->unsigned();
            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('teamId')->references('id')->on('teams');
            $table->string('profilePic');
            $table->string('cv');
            $table->integer('age');
            $table->string('school');
            $table->string('place');
            $table->string('phone');
            $table->boolean('needAcomodation')->default('0');
            $table->longText('description');
        });

        Schema::create('companies', function (Blueprint $table){
            $table->increments('id');
            $table->integer('admin')->unsigned();
            $table->foreign('admin')->references('id')->on('users');
            $table->string('name');
            $table->string('logo');
            $table->string('website');
            $table->integer('rank'); /// the lower the better ( 0 - organizers, 1 - platinum etc)
        });

        Schema::create('adminRights', function (Blueprint $table){
            $table->increments('id');
            $table->integer('companyId')->unsigned()->nullable();
            $table->integer('userId')->unsigned()->nullable();
            $table->foreign('companyId')->references('id')->on('companies');
            $table->foreign('userId')->references('id')->on('users');
            $table->string('target');
            $table->string('targetId');
        });

        Schema::create('workshops', function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->string('subtitle');
            $table->integer('companyId')->unsigned();
            $table->foreign('companyId')->references('id')->on('companies');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workshops');
        Schema::dropIfExists('adminRights');
        Schema::dropIfExists('candidates');
        Schema::dropIfExists('companies');
        Schema::dropIfExists('teams');
    }
}
