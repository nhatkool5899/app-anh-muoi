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
                'price_old' => 'required',
            ],
            [
                'name.required' => 'Tên không thể trống',
                'slug.required' => 'Slug không thể trống',
                'price_old.required' => 'Giá tiền không thể trống',
            ]
        );

        $data = $request->all();

        $product = new Product();
        $product->category_id = $data['category_id'];
        $product->name = $data['name'];
        $product->slug = $data['slug'];
        $product->price_old = $data['price_old'];

        $get_img = $request->file(('image'));


        if ($get_img) {

            $get_name_img = $get_img->getClientOriginalName();
            $name_image = current(explode('.', $get_name_img));
            $new_image = $name_image . '-' . rand(0, 99) . '.' . $get_img->getClientOriginalExtension();

            $category = Category::find($data['category_id']);
            $path = 'uploads/product/';

            $get_img->move($path, $new_image);

            $product->image = $new_image;
        }


        $product->save();

        return redirect('/product')->with('status', 'Thêm sản phẩm thành công');
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
        $category = Category::all();
        $product = Product::find($id);
        return view('admin.product.edit', compact('category', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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

        $product = Product::find($id);
        $product->name = $data['name'];
        $product->slug = $data['slug'];
        $product->price = $data['price'];

        $get_img = $request->file(('image'));


        if ($get_img) {

            $get_name_img = $get_img->getClientOriginalName();
            $name_image = current(explode('.', $get_name_img));
            $new_image = $name_image . '-' . rand(0, 99) . '.' . $get_img->getClientOriginalExtension();

            $category = Category::find($data['category_id']);
            $path = 'uploads/product/';

            $get_img->move($path, $new_image);

            $product->image = $new_image;

            $product->save();
        } else {
            $product->save();
        }



        return redirect('/product')->with('status', 'Cập nhật sản phẩm thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);

        $path = 'uploads/product/' . $product->image;
        if (file_exists($path)) {
            unlink($path);
        }

        Product::find($id)->delete();

        return redirect()->back()->with('status', 'Xóa thành công');
    }
}
