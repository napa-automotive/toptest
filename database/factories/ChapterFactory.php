<?php

namespace Database\Factories;

use App\Models\Chapter;
use App\Models\Subfield;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChapterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Chapter::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "subfield_id" => Subfield::all()->random()->id,
            "name" => $this->faker->word,
            "description" => $this->faker->text($maxNbChars = 200),
        ];
    }
}
