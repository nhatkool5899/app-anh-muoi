<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sales;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        $sales = Sales::orderBy("id", "desc")->get();

        return view('admin.sale.index', compact('sales', 'product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = Product::where('category_id', 1)->orWhere('category_id', 2)->get();

        return view('admin.sale.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'date' => 'required',
                'start' => 'required',
                'end' => 'required',
                'name' => 'required',
                'description' => 'required',
                'discount' => 'required',
            ],
            [
                'date.required' => 'Ngày không thể trống',
                'start.required' => 'Giờ bắt đầu không thể trống',
                'end.required' => 'Giờ kết thúc thể trống',
                'name.required' => 'Tiêu đề không thể trống',
                'description.required' => 'Mô tả không thể trống',
                'discount.required' => 'Giảm giá không thể trống',
            ]
        );

        $data = $request->all();
        $sale = new Sales();
        $sale->name = $data['name'];
        $sale->description = $data['description'];
        $sale->discount = $data['discount'];
        $sale->date = $data['date'];
        $sale->hour_start = $data['start'];
        $sale->hour_end = $data['end'];

        $sale->product_id = json_encode($data['product_id']);

        $time_start =  $data['date'] . " " . $data['start'] . ":00";
        $time_end =  $data['date'] . " " . $data['end'] . ":00";
        $carbonDateStart = Carbon::parse($time_start);
        $carbonDateEnd = Carbon::parse($time_end);

        $unix_time_start = $carbonDateStart->timestamp;
        $unix_time_end = $carbonDateEnd->timestamp;

        $sale->time_start = $unix_time_start;
        $sale->time_end = $unix_time_end;

        $sale->save();

        return redirect('/sale')->with('status', 'Thêm thành công');
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
        $sale = Sales::find($id);
        $product = Product::where('category_id', 1)->orWhere('category_id', 2)->get();
        return view('admin.sale.edit', compact('sale', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate(
            [
                'date' => 'required',
                'start' => 'required',
                'end' => 'required',
                'name' => 'required',
                'description' => 'required',
                'discount' => 'required',
            ],
            [
                'date.required' => 'Ngày không thể trống',
                'start.required' => 'Giờ bắt đầu không thể trống',
                'end.required' => 'Giờ kết thúc thể trống',
                'name.required' => 'Tiêu đề không thể trống',
                'description.required' => 'Mô tả không thể trống',
                'discount.required' => 'Giảm giá không thể trống',
            ]
        );

        $data = $request->all();
        $sale = Sales::find($id);
        $sale->name = $data['name'];
        $sale->description = $data['description'];
        $sale->discount = $data['discount'];
        $sale->date = $data['date'];
        $sale->hour_start = $data['start'];
        $sale->hour_end = $data['end'];

        $sale->product_id = json_encode($data['product_id']);

        $time_start =  $data['date'] . " " . $data['start'] . ":00";
        $time_end =  $data['date'] . " " . $data['end'] . ":00";
        $carbonDateStart = Carbon::parse($time_start);
        $carbonDateEnd = Carbon::parse($time_end);

        $unix_time_start = $carbonDateStart->timestamp;
        $unix_time_end = $carbonDateEnd->timestamp;

        $sale->time_start = $unix_time_start;
        $sale->time_end = $unix_time_end;

        $sale->save();

        return redirect('/sale')->with('status', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Sales::find($id)->delete();
        return redirect()->back()->with('status', 'Xóa thành công');
    }
}
