<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class productController extends Controller
{
    public function creatProduct()
    {
        if (Auth::user()) {
            if (Auth::user()->role == 1) {
                return view('backend.admin.product.creatproduct');
            }
        }
    }
    public function storeProduct(Request $request)
    {
        if (Auth::user()) {
            if (Auth::user()->role == 1) {
                $product = new Product();
                $product->name = $request->name;
                $product->slug = Str::slug($request->name);
                $product->price = $request->price;
                if (isset($request->image)) {
                    $imagename = rand() . 'product' . '.' . $request->image->extension();
                    $request->image->move('backend/image/product/', $imagename);
                    $product->image = $imagename;
                }
                $product->save();
                return redirect()->back();
            }
        }
    }
    public function listProduct()
    {
        if (Auth::user()) {
            if (Auth::user()->role == 1) {
                $product = Product::get();
                return view('backend.admin.product.productlist', compact('product'));
            }
        }
    }
    public function deleteProduct($id){
        if (Auth::user()) {
            if (Auth::user()->role == 1) {
                $product = Product::find($id);
                if($product->image && file_exists('backend/image/product/'.$product->image)){
                    unlink('backend/image/product/'.$product->image);
                }
                $product->delete();
                return redirect()->back();

            }
        }
    }
}
