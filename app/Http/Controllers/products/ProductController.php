<?php

namespace App\Http\Controllers\products;

use Auth;
use Illuminate\Http\Request;
use App\Models\products\Cart;
use App\Models\products\product;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function SingleProduct($id){

        $products = product::find($id);
        $related_products = product::where('type', $products->type)
        ->where('id','!=',$id)->take('4')
        ->orderBy('id', 'desc')
        ->get();

        return view ('products.productSingle', compact('products', 'related_products'));
    }

    public function addCart (Request $request,$id) {

        $addcart = Cart::create([
            "pro_id" => $request->id,
            "name" => $request->name,
            "image" => $request->image,
            "price" => $request->price,
            "user_id" => Auth::user()->id,

        ]);

        return redirect()->route('product.single', $id)->with(['success' => 'product_added']);
    }
}
