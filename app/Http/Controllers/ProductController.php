<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();
        $product = Product::with('category')->orderBy('id', 'desc')->get();

        return view('admin.product.index', compact('category', 'product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required',
                'slug' => 'required',
                'price' => 'required',
            ],
            [
                'name.required' => 'Tên không thể trống',
                'slug.required' => 'Slug không thể trống',
                'price.required' => 'Giá tiền không thể trống',
            ]
        );

        $data = $request->all();

        $product = new Product();
        $product->name = $data['name'];
        $product->slug = $data['slug'];
        $product->price = $data['price'];
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
