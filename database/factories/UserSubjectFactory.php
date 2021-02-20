<?php

namespace Database\Factories;

use App\Models\Subject;
use App\Models\User;
use App\Models\UserSubject;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserSubjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserSubject::class;

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
            "progress"=>$this->faker->randomDigit,
            "state"=>$this->faker->randomDigit,
            "entry_level"=>$this->faker->randomDigit,
//            "created_at"=>$this->faker->dateTime($max = 'now', $timezone = null),
            "completed_at"=>$this->faker->dateTime($max = 'now', $timezone = null),
        ];
    }
}
