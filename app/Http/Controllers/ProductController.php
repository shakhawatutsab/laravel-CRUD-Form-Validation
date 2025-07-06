<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view("product.product-list", compact("products"));
    }

    public function create(){
        $categories = Category::all();
        return view("product.create",compact('categories'));
    }
}




