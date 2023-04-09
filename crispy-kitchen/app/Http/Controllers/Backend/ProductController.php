<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //Add Product
    public static function addproduct() {
        return view('backend.addproduct');
    }

    public static function addedproduct(request $request) {

        $request->validate([
            'p_name' => 'required',
            'p_des' => 'required',
            'p_qty' => 'required',
            'p_price' => 'required',
            'p_status' => 'required',
        ]);

        $product = new Product();
        
        $product->pro_name = $request->p_name;
        $product->pro_des = $request->p_des;
        $product->pro_qty = $request->p_qty;
        $product->pro_price = $request->p_price;
        $product->pro_status = $request->p_status;

        $product->save();
        
        return redirect(Route('manageproduct'));

    }

    public static function manageproduct() {
        $products = Product::all();
        return view('backend.manageproduct',compact('products'));
    }

    public function active($pid) {
        $product=Product::find($pid);

        $product->pro_status='1';
        $product->update();
        return back();
        
    }
    
    public function inactive($pid) {
        $product=Product::find($pid);
        
        $product->pro_status='0';
        $product->update(); 
        return back();

    }

    public function delete($pid) {
        $product=Product::find($pid);
        $product->delete();
        return back(); 
    }

    public function edit($pid) {
        $product=Product::find($pid);
        return view('backend.editproduct', compact('product')); 
    }

    public function updateproduct(request $request, $pid) {

        $product=Product::find($pid);
        $request->validate([
            'p_name' => 'required',
            'p_des' => 'required',
            'p_qty' => 'required',
            'p_price' => 'required',
            'p_status' => 'required',
        ]);
        
        $product->pro_name = $request->p_name;
        $product->pro_des = $request->p_des;
        $product->pro_qty = $request->p_qty;
        $product->pro_price = $request->p_price;
        $product->pro_status = $request->p_status;

        $product->update();
        
        return redirect(Route('manageproduct'));

    }
}
