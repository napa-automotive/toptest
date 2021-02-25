<?php

namespace Database\Factories;

use App\Models\TestOption;
use App\Models\TestQuestion;
use App\Models\UserTest;
use App\Models\UserTestAnswer;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserTestAnswerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserTestAnswer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "test_id" => UserTest::all()->random()->id,
            "question_id" => TestQuestion::all()->random()->id,
            "option_id" => TestOption::all()->random()->id,
            "is_correct" => $this->faker->boolean,
        ];
    }
}
