<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->search;
        $categories = Category::query();

        if ($query) {
            $categories->where(function ($queryBuilder) use ($query) {
                $queryBuilder->where('category_name', 'LIKE', '%' . $query . '%')
                             ->orWhere('slug', 'LIKE', '%' . $query . '%')
                             ->orWhere('short_description', 'LIKE', '%' . $query . '%')
                             ->orWhere('status', 'LIKE', '%' . $query . '%');
            });
        }

        $categories = $categories->latest()->paginate(5);

        return view('admin.category.index', compact('categories'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'category_name' => 'required|string|unique:categories|max:255',
            'short_description' => 'required',
            'status' => 'required|in:0,1',
        ]);




        $slug = Str::slug($request->category_name);
        $request['slug'] = $slug;


        Category::create($request->all());

        return redirect()->route('category.index')->with('success', 'Category Records Inserted successfully.');

    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {


        $request->validate([
            'category_name' => 'required|string|max:255|unique:categories,category_name,' . $category->id,
            'short_description' => 'required',
            'status' => 'required|in:0,1',
        ]);



        $slug = Str::slug($request->category_name);

        $request['slug'] = $slug;


        $category->update($request->all());


        return redirect()->route('category.index')->with('success', 'Category Records updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('category.index')->with('danger', 'Product deleted successfully');
    }

    public function category_update_status(Request $request, $id)
    {

        $category = Category::find($id);
        $category->status = $category->status == 0 ? 1 : 0;
        $category->save();

        return redirect(route('category.index'))->with('status', 'Status successfully Change...');
    }


}
