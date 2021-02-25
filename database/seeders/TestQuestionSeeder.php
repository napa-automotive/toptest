<?php

namespace Database\Seeders;

use App\Models\TestQuestion;
use Illuminate\Database\Seeder;

class TestQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TestQuestion::factory()->count(100)->create();
    }
}
