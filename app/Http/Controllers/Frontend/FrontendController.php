<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
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
            $all_products = Product::where('status', 1)->take(8)->get();

        }
        $featured_products = Product::where('status', 1)->inRandomOrder()->get();
        $categories = Category::where('status', 1)->take(8)->get();

        return view('welcome', compact('categories', 'all_products', 'featured_products', 'slug'));
    }


    public function loadMoreProducts(Request $request)
    {
        $slug = $request->query('slug');

        $offset = $request->query('offset', 0);

        if ($slug !== null) {
            $products = Product::where('status', 1)
                ->whereHas('category', function ($query) use ($slug) {
                    $query->where('slug', $slug);
                })
                ->skip($offset)
                ->take(8)
                ->get();
        } else {
            $products = Product::where('status', 1)->inRandomOrder()->skip($offset)->take(8)->get();
        }

        return response()->json($products);
    }
}
