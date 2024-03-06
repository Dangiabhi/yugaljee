<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class BookingController extends Controller
{
    public function booking(){
        $data = Order::all();
 
        return view('admin.booking')->with('data',$data);
    }
 
}
