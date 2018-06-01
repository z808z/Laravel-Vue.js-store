<?php

namespace App\Http\Controllers\api;

use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    public function getAll()
    {
        $categories = Category::get()->toTree();

        return $categories;
    }

    public function store(StoreCategoryRequest $request, Category $category)
    {
        $category = $category->create([
            'name'      => $request->name,
            'slug'      => $request->slug,
            'parent_id' => $request->parent_id,
        ]);

        return $category;
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update([
            'name'      => $request->name,
            'slug'      => $request->slug,
            'parent_id' => $request->parent_id,
        ]);

        return $category;
    }

    public function delete(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return response()->json([
            'message' => 'Category deleted',
        ]);
    }

}
