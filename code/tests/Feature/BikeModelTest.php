<?php

namespace Tests\Feature;

use App\Models\BikeModel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BikeModelTest extends TestCase
{
    public function test_bike_models_exist(): void
    {
        $bikeModel = BikeModel::query()->first();
        $this->assertIsObject($bikeModel);
    }
}
