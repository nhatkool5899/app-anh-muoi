<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login.index');
    }

    public function login(Request $request)
    {
        $this->validate(
            $request,
            [
                'email' => 'required',
                'password' => 'required'
            ],
            [
                'email.required' => 'Bạn chưa nhập email',
                'password.required' => 'Bạn chưa nhập password'
            ]
        );
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/dashboard');
        } else {
            return redirect('/admin')->with('message', 'Đăng nhập không thành công !');
        }
    }

    public function dashboard()
    {
        // $month1 = count(Visitor::whereMonth('data_visitor', '1')->get());
        // $month2 = count(Visitor::whereMonth('data_visitor', '2')->get());
        // $month3 = count(Visitor::whereMonth('data_visitor', '3')->get());
        // $month4 = count(Visitor::whereMonth('data_visitor', '4')->get());
        // $month5 = count(Visitor::whereMonth('data_visitor', '5')->get());
        // $month6 = count(Visitor::whereMonth('data_visitor', '6')->get());
        // $month7 = count(Visitor::whereMonth('data_visitor', '7')->get());
        // $month8 = count(Visitor::whereMonth('data_visitor', '8')->get());
        // $month9 = count(Visitor::whereMonth('data_visitor', '9')->get());
        // $month10 = count(Visitor::whereMonth('data_visitor', '10')->get());
        // $month11 = count(Visitor::whereMonth('data_visitor', '11')->get());
        // $month12 = count(Visitor::whereMonth('data_visitor', '12')->get());


        // $start_last_month = Carbon::now()->subMonth()->startOfMonth()->toDateString();
        // $end_last_month = Carbon::now()->subMonth()->endOfMonth()->toDateString();
        // $start_this_month = Carbon::now()->startOfMonth()->toDateString();
        // $now = Carbon::now()->toDateString();
        // $this_year = Carbon::now()->subDays(365)->toDateString();

        // // Count
        // $all = count(Visitor::all());
        // $visitor_last_month = count(Visitor::whereBetween('data_visitor', [$start_last_month, $end_last_month])->get());
        // $visitor_this_month = count(Visitor::whereBetween('data_visitor', [$start_this_month, $now])->get());
        // $visitor_year = count(Visitor::whereBetween('data_visitor', [$this_year, $now])->get());

        // $arrMonth = [$month1, $month2, $month3, $month4, $month5, $month6, $month7, $month8, $month9, $month10, $month11, $month12];
        // return view('admin.dashboard', compact('month1', 'month2', 'month3', 'month4', 'month5', 'month6', 'month7', 'month8', 'month9', 'month10', 'month11', 'month12', 'all', 'visitor_last_month', 'visitor_this_month', 'visitor_year'));
        return view('admin.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin');
    }
}
