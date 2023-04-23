<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetails;
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
        $product_2 = Product::with('category')->Where('category_id', 3)->get();

        return view('pages.sale', compact('product_1','product_2'));
    }

    public function cart()
    {
        // $cart = session()->get('cart');
        // print_r($cart);

        return view('pages.cart');
    }

    public function add_product_cart(Request $request)
    {
        $data = $request->all();
        $session_id = substr(md5(microtime()), rand(0, 26), 5);
        $cart = session()->get('cart');

        if ($cart == true) {
            $is_available = 0;
            foreach ($cart as $key => $value) {
                if ($value['product_id'] == $data['product_id']) {
                    $is_available++;
                }
            }
            if ($is_available == 0) {
                $cart[] = array(
                    'session_id' => $session_id,
                    'product_id' => $data['product_id'],
                    'product_name' => $data['product_name'],
                    'product_price' => $data['product_price'],
                    'product_category' => $data['product_category'],
                    'product_image' => $data['product_image'],
                    'product_quantity' => $data['product_quantity'],
                );
                session()->put('cart', $cart);
            }
        } else {
            $cart[] = array(
                'session_id' => $session_id,
                'product_id' => $data['product_id'],
                'product_name' => $data['product_name'],
                'product_price' => $data['product_price'],
                'product_category' => $data['product_category'],
                'product_image' => $data['product_image'],
                'product_quantity' => $data['product_quantity'],
            );
        }

        session()->put('cart', $cart);

        $number_item = count($cart);

        session()->save();

        echo $number_item;
    }

    public function delete_cart()
    {
        $cart = session()->get('cart');
        if ($cart == true) {
            session()->forget('cart');

            return redirect()->back()->with('message', 'Xóa thành công');
        }
    }

    public function update_item_quantity(Request $request)
    {
        $data = $request->all();
        $cart = session()->get('cart');

        if ($cart == true) {
            foreach ($cart as &$value) {
                if ($value['product_name'] == $data['product_name']) {

                    $value['product_quantity'] = $data['product_quantity'];
                }
            }
            session()->put('cart', $cart);
        }
    }

    public function delete_item_cart(Request $request)
    {
        $data = $request->all();

        $cart = session()->get('cart');

        if ($cart == true) {
            foreach ($cart as $key => $value) {
                if ($value['product_name'] == $data['product_name']) {
                    unset($cart[$key]);
                }
            }
            session()->put('cart', $cart);
            return $cart;
        }
    }

    public function delete_all_item()
    {
        $cart = session()->get('cart');
        if ($cart == true) {
            session()->forget('cart');
            return redirect()->back();
        }
    }


    public function customer_order(Request $request)
    {
        $data = $request->all();


        $cart = session()->get('cart');
        if ($cart == true) {

            $order = new Order();
            $order->name = $data['customer_name'];
            $order->phone = $data['customer_phone'];
            $order->address = $data['customer_address'];
            $order->total = $data['customer_total'];

            $order->save();
            foreach ($cart as $key => $value) {

                $order_details = new OrderDetails();
                $order_details->order_id = $order->id;
                $order_details->product_id = $value['product_id'];
                $order_details->product_price = $value['product_price'];
                $order_details->product_quantity = $value['product_quantity'];

                $order_details->save();
            }

            echo "success";
        } else {
            echo "error";
        }
    }
}
