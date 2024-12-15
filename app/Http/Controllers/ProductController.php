<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;


class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::orderBy('created_at')->paginate(5);

        return view('products.index', compact('products'));
    }

    public function create(): View
    {
        return view('products.create');
    }

    public function store(SaveProductRequest $request)
    {
        $validated = $request->validated();

        $product = Product::create($validated);

        return to_route('products.show', $product)->with('message', 'Product successfully created');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(SaveProductRequest $request, Product $product)
    {
        $validated = $request->validated();

        $product->update($validated);

        return to_route('products.index')->with('message', 'Product successfully updated');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return to_route('products.index')->with('message', 'Product successfully deleted');
    }
}
