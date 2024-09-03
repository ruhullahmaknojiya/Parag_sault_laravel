<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function ProductDetails($id)
    {
        $products=Product::find($id);
        return view('frontend.product-details',compact('products'));
    }

    public function index()
    {
        return view('frontend.product-details');
    }

}
