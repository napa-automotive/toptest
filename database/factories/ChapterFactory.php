<?php

namespace Database\Factories;

use App\Models\Chapter;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ChapterFactory extends Factory
{

    protected $model = Chapter::class;

    public function definition()
    {
        return [
            'subfield_id' => function()
            {
                return self::factoryForModel(\App\Models\Subfield::class)->create()->id;
            },
            'name' => $this->faker->name,
            'description' => $this->faker->word,
        ];
    }
}
