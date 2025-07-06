<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Auth\Events\Validated;

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

    public function store(Request $request){
        $validated = $request->validate([
            "name" => "required|string",
            "description" => 'nullable|string',
            "price" =>"required|numeric",
            "quantity" =>"required|numeric",
            "status" => "required",
            "category_id" =>"required",
            "image" =>"nullable|image|mimes:jpg,png,jpeg"
        ]);
        if($request->hasFile( "image")){
            $validated['image'] = $request->file("image")->store("products", "public");
        }
        Product::create($validated);

        return redirect()->route("product.index")->with("success", "Product added successfully!");
    }


}




