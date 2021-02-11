<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Chapter::factory()->count(10)->create();
    }
}
