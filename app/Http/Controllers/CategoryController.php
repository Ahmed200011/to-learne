<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = Category::when($request->search, function ($model, $value) use ($request) {
            if ($request->select == '*') {

                $model->where('name', 'like', "%$value%")
                    ->orWhere('code', 'like', "%$value%")
                    ->orWhere('description', 'like', "%$value%");
            } else {
                $model->where($request->select, 'like', "%$value%");
            }
        })->get();
        return view('category.all', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20|min:4',
            // 'code' => 'required|max:10|min:4',
            'description' => 'required',
            // 'image' => 'required',
            'status' => 'required',
        ]);
        Category::create([
            'name' => $request->name,
            'code' => $request->code,
            'description' => $request->description,
            // 'image' => 'London to Paris',
            'status' => $request->status,
        ]);
        return redirect()->route('category.index')->with('massage', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        // dd($category);
        return view('category.update', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|max:20|min:4',
            // 'code' => 'required|max:10|min:4',
            'description' => 'required',
            // 'image' => 'required',
            'status' => 'required',
        ]);
        $category->update([
            'name' => $request->name,
            'code' => $request->code,
            'description' => $request->description,
            // 'image' => 'London to Paris',
            'status' => $request->status,
        ]);
        return redirect()->route('category.index')->with('massage', 'Product Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('massage', 'Product Deleted successfully');
    }
}
