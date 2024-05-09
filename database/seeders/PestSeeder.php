<?php

namespace Database\Seeders;

use App\Models\Pest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pest::factory()->count(10)->create();
    }
}
