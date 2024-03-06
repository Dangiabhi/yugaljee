<?php

namespace App\Http\Controllers\admin;
use App\Models\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
   public function orders(Request $lead){
     
    $lead->validate([
        'name' => 'required',
        'carnum' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'service' => 'required',
        'type' => 'required',
        'address' => 'required',
    ]);

    $order = new Order;
    $order->name =$lead->name;
    $order->vehicle_num =$lead->carnum;
    $order->phone =$lead->phone;
    $order->email =$lead->email;
    $order->service =$lead->service;
    $order->request_type = $lead->type;
    $order->location = $lead->address;
    $order->status = '0'; // 0 = not started, 1 = in progress , 2 =  complated
    $order->save();
    echo 'form Submited';
    return redirect()->back()->with('status','Succss');

   }
}
