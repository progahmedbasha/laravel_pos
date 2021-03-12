<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoriesController extends Controller
{
    public function categories_show()
    {
           $data = Category::with('parent')->get();


     
        return view('categories', compact('data'));

    }
    public function categories_store(Request $request)
    {
        $category = new Category;
        $category->title =$request->title;
        $category->parent_id =$request->parent_id;



        $category->save();
        return back();
    }
}
