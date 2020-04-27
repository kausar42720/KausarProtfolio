<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsCompletedListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_completed_list', function (Blueprint $table) {
           $table->bigIncrements('projects_completed_list_id');
            $table->string('projects_completed_list_name')->nullable();
            $table->string('projects_completed_list_categories_name')->nullable();
            $table->string('projects_completed_list_img')->nullable();
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
        Schema::dropIfExists('projects_completed_list');
    }
}
