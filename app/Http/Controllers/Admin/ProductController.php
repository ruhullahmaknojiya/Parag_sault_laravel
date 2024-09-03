<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $query = $request->search;
    $productsQuery = Product::query();

    if ($query) {
        $productsQuery->where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('product_name', 'LIKE', '%' . $query . '%')
                         ->orWhere('SKU', 'LIKE', '%' . $query . '%')
                         ->orWhere('product_description', 'LIKE', '%' . $query . '%')
                         ->orWhere('price', 'LIKE', '%' . $query . '%')
                         ->orWhere('status', 'LIKE', '%' . $query . '%')
                         ->orWhereHas('category', function ($q) use ($query) {
                             $q->where('category_name', 'LIKE', '%' . $query . '%');
                         });
        });
    }

    $products = $productsQuery->latest()->paginate(5);

    return view('admin.products.index', compact('products'));
}




    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'product_name' => 'required|string|max:255',
            'category_id' => 'required',
            'SKU' => 'required',
            'product_quantity' => 'required',
            'product_description' => 'required',
            'price' => 'required',
            'status' => 'required|in:0,1',
            'images.*' => 'image|mimes:png,jpg,jpeg,webp|max:2048'
        ]);

        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('products', 'public');
                $imagePaths[] = $path;
            }
        }

        Product::create([
            'product_name' => $request->product_name,
            'category_id' => $request->category_id,
            'SKU' => $request->SKU,
            'product_quantity' => $request->product_quantity,
            'product_description' => $request->product_description,
            'price' => $request->price,
            'status' => $request->status,
            'images' => $imagePaths
        ]);

        return redirect()->route('products.index')->with('success', 'Product Records Inserted successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit_categories = Category::all();
        $products = Product::find($id);
        return view('admin.products.edit', compact('products', 'edit_categories'));
    }

    /**
     * Update the specified resource in storage.
     */


    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'category_id' => 'required',
            'SKU' => 'required',
            'product_quantity' => 'required',
            'product_description' => 'required',
            'price' => 'required',
            'status' => 'required|in:0,1',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:png,jpg,jpeg,webp|max:2048',
        ]);

        $product = Product::findOrFail($id);
        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->SKU = $request->SKU;
        $product->product_quantity = $request->product_quantity;
        $product->product_description = $request->product_description;
        $product->price = $request->price;
        $product->status = $request->status;

        $imagePaths = $product->images ?? [];

        if ($request->hasFile('images')) {
            // Delete old images
            foreach ($product->images as $image) {
                Storage::disk('public')->delete($image);
            }
            // Store new images
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('products', 'public');
                $imagePaths[] = $path;
            }
        }

        $product->images = $imagePaths;
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('danger', 'Product Records deleted successfully');
    }

    public function product_update_status(Request  $request, $id)
    {
        $product = Product::find($id);
        $product->status = $product->status == 0 ? 1 : 0;
        $product->update();
        return redirect()->route('products.index')->with('status', 'Product Status Changed Successfully');
    }



   
}
