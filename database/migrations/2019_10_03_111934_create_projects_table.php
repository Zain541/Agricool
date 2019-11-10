<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('project_name');
            $table->string('farm_name');
            $table->string('project_start_date');
            $table->string('project_end_date');
            $table->string('investment');
            $table->string('location');
            $table->string('commodity');
            $table->string('rio');
            $table->string('collected_funds');
            $table->string('risk');
            $table->string('farm_description');
            $table->string('project_date');
            $table->string('project_manager_detail');
            $table->string('farm_owner');
            $table->string('project_image');
            $table->string('owner_image');
            $table->string('project_manager_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
