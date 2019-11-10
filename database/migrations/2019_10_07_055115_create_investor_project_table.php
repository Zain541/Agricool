<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestorProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investor_project', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('investor_id')->unsigned();
            $table->bigInteger('project_id')->unsigned();
            $table->string('stripe_payment_id')->nullable();
            $table->float('investment')->unsigned();
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
        Schema::dropIfExists('investor_project');
    }
}
