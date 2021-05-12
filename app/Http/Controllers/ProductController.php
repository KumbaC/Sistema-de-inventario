<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{

    public function index(){
        $products = Product::latest('id')->paginate(10);

        return view('products.index', compact('products'));
    }

    public function category(Category $category){
        $products = Product::where('category_id', $category->id)->latest('id')->paginate(6);
        return view('products.category', compact('products','category'));
    }
}
