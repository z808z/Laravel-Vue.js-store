<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    public function getProductsByCategory($category)
    {
        $products = Category::where('slug', $category)->first()->products()->get();
        return $products;
    }
}