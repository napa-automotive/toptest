<?php

namespace Database\Factories;

use App\Models\Subfield;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubfieldFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subfield::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "subject_id"=>Subject::all()->random()->id,
            "name"=>$this->faker->word,
            "description"=>$this->faker->text($maxNbChars = 200),
            "image"=>$this->faker->word,
            "thumbnail"=>$this->faker->word,
        ];
    }
}
