<?php

namespace Database\Seeders;

use App\Models\Crop;
use Database\Factories\CropFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CropSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Crop::factory()->count(10)->create();
    }
}
