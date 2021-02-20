<?php

namespace Database\Factories;

use App\Models\Faculty;
use App\Models\FacultyTestResult;
use Illuminate\Database\Eloquent\Factories\Factory;

class FacultyTestResultFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FacultyTestResult::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "faculty_id"=>Faculty::all()->random()->id,
            "year"=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            "min_score"=>$this->faker->numberBetween($min = 0, $max = 100),
            "max_score"=>$this->faker->numberBetween($min=150, $max=250),
            "average_score"=>$this->faker->numberBetween($min=100, $max=150),
            "pass_score"=>$this->faker->numberBetween($min = 0, $max = 100),
            "grant_score"=>$this->faker->numberBetween($min=150, $max=250),
            "applicants_count"=>$this->faker->numberBetween($min=500, $max=10000),
            "entrants_count"=>$this->faker->numberBetween($min=0, $max=100),
            "entrance_rate"=>$this->faker->randomDigit,
        ];
    }
}
