<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTestAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_test_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_id')->constrained('user_tests');
            $table->foreignId('question_id')->constrained('test_questions');
            $table->foreignId('option_id')->constrained('test_options');
            $table->boolean('is_correct');
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
        Schema::dropIfExists('user_test_answers');
    }
}
