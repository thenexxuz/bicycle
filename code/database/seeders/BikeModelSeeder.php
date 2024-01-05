<?php

namespace Database\Seeders;

use App\Models\BikeModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BikeModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BikeModel::factory()
            ->count(100)
            ->create();
    }
}
