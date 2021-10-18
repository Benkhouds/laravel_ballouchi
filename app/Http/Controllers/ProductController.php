<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::with('subcategory', 'subcategory.category')->get();

        return view('products.index',['products'=>$products]);
    }

}
