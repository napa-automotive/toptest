<?php

namespace Database\Seeders;

use App\Models\TestOption;
use Illuminate\Database\Seeder;

class TestOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TestOption::factory()->count(100)->create();
    }
}
