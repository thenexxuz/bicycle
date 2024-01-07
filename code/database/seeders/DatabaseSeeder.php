<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(10)->create();

         User::factory()->create([
             'name' => 'Example User',
             'email' => 'example@example.com',
             'password' => Hash::make('Example')
         ]);

         $this->call([
             CategorySeeder::class,
             BrandSeeder::class,
             BikeModelSeeder::class,
             BicycleSeeder::class,
         ]);
    }
}
