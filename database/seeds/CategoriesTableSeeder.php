<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $category = Category::create(['name' => 'Category1', 'slug' => 'category1', 'parent_id' => 0]);
	    $category = Category::create(['name' => 'Category2', 'slug' => 'category2', 'parent_id' => 0]);
	    $category = Category::create(['name' => 'Category3', 'slug' => 'category3', 'parent_id' => 0]);
	    $category = Category::create(['name' => 'Category4', 'slug' => 'category4', 'parent_id' => 0]);
	    $category = Category::create(['name' => 'Category5', 'slug' => 'category5', 'parent_id' => 0]);
	    $category = Category::create(['name' => 'SubCategory2_1', 'slug' => 'subcategory2_1', 'parent_id' => 2]);
	    $category = Category::create(['name' => 'SubCategory2_2', 'slug' => 'subcategory2_2', 'parent_id' => 2]);
	    $category = Category::create(['name' => 'SubCategory2_3', 'slug' => 'subcategory2_3', 'parent_id' => 2]);
	    $category = Category::create(['name' => 'SubCategory4_1', 'slug' => 'subcategory4_1', 'parent_id' => 4]);
	    $category = Category::create(['name' => 'SubCategory5_1', 'slug' => 'subcategory5_1', 'parent_id' => 5]);
    }
}
