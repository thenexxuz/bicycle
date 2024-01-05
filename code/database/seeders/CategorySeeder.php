<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'BMX'],
            ['name' => 'Cruiser'],
            ['name' => 'Electric'],
            ['name' => 'Mountain'],
            ['name' => 'Kids BMX'],
            ['name' => 'Kids Cruiser'],
            ['name' => 'Kids Mountain'],
            ['name' => 'Balance'],
        ];

        foreach ($categories as $category) {
            $c = new Category([
                'name' => $category['name'],
            ]);
            $c->save();
        }
    }
}
