<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
class SuppliersController extends Controller
{
    public function suppliers_show()
    {
        
        $data = Supplier::all();
        return view('supplier', compact('data'));

    }
    public function suppliers_store(Request $request)
    {
            $supplier = new Supplier;
        $supplier->name =$request->name;
        $supplier->phone=$request->phone;
        $supplier->address=$request->address;
        $supplier->about=$request->about;
        $supplier->email=$request->email;
       


        $supplier->save();
        return back();
    }
}
