<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->bigIncrements('education_id');
            $table->string('education_institute_names');
            $table->string('education_degree_names');
            $table->string('education_subject_names');
            $table->string('education_result_grades');
            $table->string('education_result_pointse');
            $table->string('education_study_from_date')->nullable();;
            $table->string('education_study_to_date')->nullable();;
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
        Schema::dropIfExists('educations');
    }
}
