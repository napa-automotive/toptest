<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $commentable = $this->commentable();
        return [
            "user_id" => User::all()->random()->id,
            'commentable_id' => $commentable::factory(),
            'commentable_type' => $commentable,
            "rating" => $this->faker->randomDigit,
            "feedback" => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
        ];
    }

    public function commentable()
    {
        return $this->faker->randomElement([
            User::class,
            // Video::class,
        ]);
    }
}
