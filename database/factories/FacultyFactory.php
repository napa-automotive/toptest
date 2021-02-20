<?php

namespace Database\Factories;

use App\Models\Faculty;
use App\Models\University;
use Illuminate\Database\Eloquent\Factories\Factory;

class FacultyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Faculty::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "university_id"=>University::all()->random()->id,
            "name"=>$this->faker->firstName,
            "description"=>$this->faker->sentence($nbWords = 6, $variableNbWords = true),
            "avarage_score"=>$this->faker->randomDigit,
        ];
    }
}
