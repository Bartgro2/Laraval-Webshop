<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
        # load additonal data, such as categories and brands, if needed
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
        # add categories and brand here after updating the models are filled with data
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create($request->all());
        # make a adjust to the store method if we use validation, for example: $name = => $request->validate(['name' => 'required|string|max:255']);
        # attach the product's categories and brands if needed
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
        # edit if we use categories and brands;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        # validate the request data (e.g., name, description, price, etc.)
        $product = Product::findOrFail($id);
        $product->update($request->all());
        # make a adjust to the update method if we use validation, for example: $name = => $request->validate(['name' => 'required|string|max:255']);
        # sync the product's categories and brands if needed
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
