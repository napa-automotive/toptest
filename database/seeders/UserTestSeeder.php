<?php

namespace Database\Seeders;

use App\Models\UserTest;
use Illuminate\Database\Seeder;

class UserTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserTest::factory()->count(100)->create();
    }
}
