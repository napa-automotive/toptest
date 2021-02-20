<?php

namespace Database\Factories;

use App\Models\Subject;
use App\Models\User;
use App\Models\UserExam;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserExamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserExam::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id"=>User::all()->random()->id,
            "subject_id"=>Subject::all()->random()->id,
            "state"=>$this->faker->randomDigit,
            "total_score"=>$this->faker->randomDigit,
            "duration"=>$this->faker->numberBetween($min=1800, $max=5400),
        ];
    }
}
