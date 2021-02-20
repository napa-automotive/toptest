<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UserSession;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserSessionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserSession::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
//            "user_id"=>User::all()->random()->id,
//            "ip_address"=>$this->faker->ipv4,
//            "user_agent"=>$this->faker->word,
//            "payload"=>$this->faker->words($nb = 3, $asText = false),
        ];
    }
}
