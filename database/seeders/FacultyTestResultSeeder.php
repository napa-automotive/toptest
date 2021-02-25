<?php

namespace Database\Seeders;

use App\Models\FacultyTestResult;
use Illuminate\Database\Seeder;

class FacultyTestResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FacultyTestResult::factory()->count(100)->create();
    }
}
