<?php

namespace Tests\Feature;

use App\Models\Brand;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BrandTest extends TestCase
{
    public function test_brands_exist(): void
    {
        $category = Brand::query()->first();
        $this->assertIsObject($category);
    }

    public function test_brands_fully_populated(): void
    {
        $count = Brand::query()->count();

        $this->assertEquals($count, 6);
    }
}
