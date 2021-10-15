<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        ddd(Product::with('subcategory', 'subcategory.category')->get()[0]->subcategory->category);
        return;
    }

    public function store(Request $request){

        

    }

}
