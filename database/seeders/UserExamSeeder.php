<?php

namespace Database\Seeders;

use App\Models\UserExam;
use Illuminate\Database\Seeder;

class UserExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserExam::factory()->count(10)->create();
    }
}
