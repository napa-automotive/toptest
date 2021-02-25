<?php

namespace Database\Seeders;

use App\Models\UserTestAnswer;
use Illuminate\Database\Seeder;

class UserTestAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserTestAnswer::factory()->count(100)->create();
    }
}
