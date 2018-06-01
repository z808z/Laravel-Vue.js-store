<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Category;

class CategoryTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAssertStatus()
    {
        $this->json('get', '/api/category/category1', [])
             ->assertStatus(200);
    }

    public function testAddCategory()
    {
        $category = Category::create([
            'name'      => 'Test Category',
            'slug'      => 'test-category',
            'parent_id' => 1,
        ]);

        $this->json('get', 'categories/' . $category->name, [])
             ->assertStatus(200);
    }

    public function testDeleteCategory()
    {
        $category = Category::create([
            'name'      => 'Test Category',
            'slug'      => 'test-category',
            'parent_id' => 1,
        ]);

        $this->json('delete', 'categories/delete/' . $category->id, [])
             ->assertStatus(200);
    }
}
