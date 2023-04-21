<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        # code...
    }

    public function sale()
    {
        $product_1 = Product::with('category')->where('category_id', 1)->orWhere('category_id', 2)->get();
        return view('pages.sale', compact('product_1'));
    }

    public function cart()
    {
        return view('pages.cart');
    }

    public function add_cart(Request $request)
    {
        $data = $request->all();
        $session_id = substr(md5(microtime()), rand(0, 26), 5);
        $cart = session()->get('cart');

        if ($cart == true) {
            $is_available = 0;
            foreach ($cart as $key => $value) {
                if ($value['product_id'] == $data['cart_product_id']) {
                    $is_available++;
                }
            }
            if ($is_available == 0) {
                $cart[] = array(
                    'session_id' => $session_id,
                    'product_name' => $data['cart_product_name'],
                    'product_id' => $data['cart_product_id'],
                    'product_image' => $data['cart_product_image'],
                    'product_desc' => $data['cart_product_desc'],
                    'product_qty' => $data['cart_product_qty'],
                    'product_price' => $data['cart_product_price'],
                );
                session()->put('cart', $cart);
            }
        } else {
            $cart[] = array(
                'session_id' => $session_id,
                'product_name' => $data['cart_product_name'],
                'product_id' => $data['cart_product_id'],
                'product_image' => $data['cart_product_image'],
                'product_desc' => $data['cart_product_desc'],
                'product_qty' => $data['cart_product_qty'],
                'product_price' => $data['cart_product_price'],
            );
        }
        session()->put('cart', $cart);

        session()->save();
    }

    public function delete_cart()
    {
        $cart = session()->get('cart');
        if ($cart == true) {
            session()->forget('cart');

            return redirect()->back()->with('message', 'Xóa thành công');
        }
    }

    public function delete_pd_cart($session_id)
    {
        $cart = session()->get('cart');
        if ($cart == true) {
            foreach ($cart as $key => $value) {
                if ($value['session_id'] == $session_id) {
                    unset($cart[$key]);
                }
            }
            session()->put('cart', $cart);
            return redirect()->back()->with('message', 'Xoá sản phẩm thành công');
        } else {
            return redirect()->back()->with('error', 'Xoá sản phẩm thất bại');
        }
    }
}
