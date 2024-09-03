<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ShopController extends Controller
{
    public function index()
    {
        $slug = \request('slug');

        if ($slug !== null) {
            $all_products = Product::where('status', 1)
                ->whereHas('category', function ($query) use ($slug) {
                    $query->where('slug', $slug);
                })
                ->take(8)
                ->get();
        } else {
            $all_products = Product::where('status', 1)->get();
        }

        $categories = Category::where('status', 1)->take(8)->get();

        return view('frontend.shop', compact('categories', 'all_products', 'slug'));
    }

    public function search(Request $request)
    {
        $query = $request->input('search');

        // Perform the search for categories
        $categories = Category::where('category_name', 'LIKE', '%' . $query . '%')
            ->get(['category_name']);

        return response()->json($categories);
    }


}
