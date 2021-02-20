<?php

namespace Database\Factories;

use App\Models\TestOption;
use App\Models\TestQuestion;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestOptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TestOption::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "question_id"=>TestQuestion::all()->random()->id,
            "name"=>$this->faker->word,
            "description"=>$this->faker->text($maxnbChars = 20),
            "is_correct"=>$this->faker->boolean,

        ];
    }
}
