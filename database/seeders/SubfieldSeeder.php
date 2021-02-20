<?php

namespace Database\Seeders;

use App\Models\Subfield;
use Illuminate\Database\Seeder;

class SubfieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subfield::factory()->count(10)->create();
    }
}
