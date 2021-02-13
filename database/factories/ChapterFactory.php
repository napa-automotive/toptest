<?php

namespace Database\Factories;

use App\Models\Chapter;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ChapterFactory extends Factory
{

    protected $model = Chapter::class;

    public function definition()
    {
        return [
            'subfield_id' => DB::table("subfields")->get()->random()->id,
            'name' => $this->faker->name,
            'description' => $this->faker->word,
        ];
    }
}
