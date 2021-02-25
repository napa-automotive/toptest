<?php

namespace Database\Factories;

use App\Models\Language;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subject::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "language_id"=>Language::all()->random()->id,
            "name"=>$this->faker->word,
            "description"=>$this->faker->text($maxNbChars = 200),
            "image"=>$this->faker->word,
            "thumbnail"=>$this->faker->word,
        ];
    }
}
