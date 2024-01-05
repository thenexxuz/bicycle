<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['name' => 'Decathlon'],
            ['name' => 'Huffy'],
            ['name' => 'Hyper'],
            ['name' => 'Kent'],
            ['name' => 'Mongoose'],
            ['name' => 'Schwinn'],
        ];

        foreach ($brands as $brand) {
            $b = new Brand([
                'name' => $brand['name'],
            ]);
            $b->save();
        }
    }
}
