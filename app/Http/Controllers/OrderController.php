<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = Order::with('details')->orderBy('id', 'desc')->get();

        return view('admin.order.index', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $order = Order::find($id);
        $order_details = OrderDetails::where('order_id', $id)->get();

        return view('admin.order.edit', compact('order', 'order_details'));
    }

    public function change_status(Request $request)
    {
        $data = $request->all();
        $order = Order::find($data['id']);
        if($order){
            $order->status = $data['status'];
            $order->save();

            echo "success";
        }else{
            echo "error";
        }
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
        Order::find($id)->delete();

        return redirect()->back()->with('status', "Xóa thành công");
    }
}
