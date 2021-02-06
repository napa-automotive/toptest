<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultyTestResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_test_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('faculty_id')->constrained('faculties');
            $table->date('year');
            $table->integer('min_score');
            $table->integer('max_score');
            $table->integer('avarage_score');
            $table->integer('pass_score');
            $table->integer('grant_score');
            $table->integer('ariza_topshirdi');
            $table->integer('qabul_qilindi');
            $table->decimal('entrance_rate');
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
        Schema::dropIfExists('faculty_test_results');
    }
}
