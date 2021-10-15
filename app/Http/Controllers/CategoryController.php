<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function store(Request $request){
           $attributes = $request->validate([
            'label_category' => ['required']
        ]);
        Category::create($attributes);
    }
}
