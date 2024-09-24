<?php

namespace App\Http\Controllers\products;

use Illuminate\Http\Request;
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
}
