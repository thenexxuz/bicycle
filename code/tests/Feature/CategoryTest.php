<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    public function test_catecories_exist(): void
    {
        $category = Category::query()->first();
        $this->assertIsObject($category);
    }

    public function test_catecories_fully_populated(): void
    {
        $count = Category::query()->count();

        $this->assertEquals($count, 8);
    }
}
