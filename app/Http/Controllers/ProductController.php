<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Request as FacadesRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Products = Product::all();
        return view('product.all', compact('Products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|max:20|min:4',
            'code' => 'required|max:10|min:4',
            'description' => 'required',
            // 'image' => 'required',
            'status' => 'required',
        ]);
        Product::create([
            'name' => $request->name,
            'code' => $request->code,
            'description' => $request->description,
            // 'image' => 'London to Paris',
            'status' => $request->status,
        ]);
        return redirect()->route('Products.index')->with('massage', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product )
    {

        dd($product );
        // $data=Product::find(6);
        // dd($data);

    return view('product.update', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
