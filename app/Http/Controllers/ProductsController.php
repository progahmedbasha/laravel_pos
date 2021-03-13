<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Supplier;
class ProductsController extends Controller
{
    public function products_show()
    {
    	
    	$data = Product::all();
        $categories = Category::with('parent')->get();
        $suppliers = Supplier::all();
    	return view('products', compact('data','categories','suppliers'));

    }
    public function products_store(Request $request)
    {
        $product = new Product;
        $product->barcode =$request->barcode;
        $product->name=$request->name;
        $product->buy_price=$request->buy_price;
        $product->sell_price =$request->sell_price;
        $product->qty=$request->qty;
        $product->total_buy_price =$request->buy_price*$request->qty;
        $product->total_sell_price=$request->sell_price*$request->qty;
        $product->category_id =$request->category_id;
        


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
           $categories = Category::all();
            return view('edite_product', compact('data','categories'));
    }
    
        public function update(Request $request ,Product $data)
    {
            $data ->update($request->all());
           return redirect('products');
    }    
}
