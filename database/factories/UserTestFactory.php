<?php

namespace Database\Factories;

use App\Models\Subject;
use App\Models\User;
use App\Models\UserExam;
use App\Models\UserTest;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserTestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserTest::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id"=>User::all()->random()->id,
            "exam_id"=>UserExam::all()->random()->id,
            "subject_id"=>Subject::all()->random()->id,
            "questions_count"=>$this->faker->numberBetween($min = 0, $max = 90),
            "score"=>$this->faker->randomDigit,
            "type"=>$this->faker->word,
        ];
    }
}
