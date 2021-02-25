<?php

namespace Database\Factories;

use App\Models\TestQuestion;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestQuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TestQuestion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "unit_id" => Unit::all()->random()->id,
            "name" => $this->faker->word,
            "description" => $this->faker->text($maxNbChars = 20),
            "level" => $this->faker->randomDigit,
        ];
    }
}
