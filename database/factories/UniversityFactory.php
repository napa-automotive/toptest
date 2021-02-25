<?php

namespace Database\Factories;

use App\Models\University;
use Illuminate\Database\Eloquent\Factories\Factory;

class UniversityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = University::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->word,
            "description"=>$this->faker->sentence($nbWords = 6, $variableNbWords = true),
            "location"=>$this->faker->state,
            "rating"=>$this->faker->randomDigit,
            "rector"=>$this->faker->firstNameMale,
            "meta"=>json_encode([$this->faker->randomElement(
                [
                "house",
                "flat",
                "apartment",
                "room", "shop",
                "lot", "garage"
            ]
            )
    ]),
        ];
    }
}
