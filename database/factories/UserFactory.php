<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "first_name" => $this->faker->word,
            "last_name" => $this->faker->word,
            "phone_number" => $this->faker->e164PhoneNumber,
            "email" => $this->faker->safeEmail,
            "password" => $this->faker->password,
            "image" => $this->faker->text($maxNbChars = 7),
            "thumbnail" => $this->faker->text($maxNbChars = 20),
            "verified_at" => $this->faker->dateTime($max = 'now', $timezone = null),
            "activated_at" => $this->faker->dateTime($max = 'now', $timezone = null),
        ];
    }
}
