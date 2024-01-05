<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BikeModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $wheelSizes = [12, 14, 16, 18, 20, 24];
        return [
            'name' => fake()->name(),
            'brand' => Brand::all()->random(),
            'price' => number_format((rand(5000,50000) / 100.0), 2),
            'description' => fake()->sentence(),
            'gender' => (rand() < .3) ? null : fake()->boolean(),
            'category' => Category::all()->random(),
            'wheel_size' => $wheelSizes[array_rand($wheelSizes)],
        ];
    }
}
