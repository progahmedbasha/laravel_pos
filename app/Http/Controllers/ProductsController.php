<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductsController extends Controller
{
    public function products_show()
    {
    	
    	$data = Product::all();
    	return view('products', compact('data'));

    }
    public function products_store(Request $request)
    {
            $product = new Product;
        $product->name =$request->product_name;
        $product->qty=$request->qty;
        $product->description=$request->description;
       


        $product->save();
        return back();
    }
    public function delete(Product $data)
    {
        $data->delete();
        return back();
    }
        public function edite(Product $data)
    {
           
            return view('edite_product', compact('data'));
    }
    
        public function update(Request $request ,Product $data)
    {
            $data ->update($request->all());
           return redirect('products');
    }    
}
