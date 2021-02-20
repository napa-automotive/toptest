<?php

namespace Database\Factories;

use App\Models\Chapter;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;

class UnitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Unit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "chapter_id"=>Chapter::all()->random()->id,
            "name"=>$this->faker->word,
            "description"=>$this->faker->text($maxNbChars = 200),
            "content"=>$this->faker->text($maxNbChars = 400)
        ];
    }
}
