<?php

namespace App\Http\Controllers\api;

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

    public function store(Request $request, Category $category)
    {
        $this->validate($request, [
            'name'    => 'required|min:10',
            'slug'    => 'required|min:60|string|without_spaces|max:255|regex:/^[a-z]+$/i',
            'content' => 'min:10',
        ]);
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
