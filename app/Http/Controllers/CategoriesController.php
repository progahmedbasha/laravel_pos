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

    public function edite(Category $data)
    {
           
            return view('categories_edite', compact('data'));
    }
    public function update(Request $request ,Category $data)
    {
            $data ->update($request->all());
           return redirect('categories');
    } 
}



//${{ money_format($product->price, 2) }}