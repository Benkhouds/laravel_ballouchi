<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
class SubCategoryController extends Controller
{
    //
    public function store(Request $request){
       $attributes = $request->validate([
            'label_subCategory' => ['required']
        ]);
        SubCategory::create($attributes);
    }
    public function show(Request $request){
        return view('category',[    
            'category' => Category::all()
        ]);
    }
}
