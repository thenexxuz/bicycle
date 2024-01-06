<?php

namespace Tests\Feature;

use App\Models\Bicycle;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BicycleTest extends TestCase
{
    public function test_bike_models_exist(): void
    {
        $bicycle = Bicycle::query()->first();
        $this->assertIsObject($bicycle);
    }
}
