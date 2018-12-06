<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function index(){

        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }


    public function confirm($id){


        //find the order
        $order = Order::find($id);

        //update the order
        $order->update(['status'=>1]);
        //session message
        session()->flash('msg','Order has been confirmed');

        // redirect the page
        redirect('/orders');
    }

    public function pending($id){
        //Find the order
        $order = Order::find($id);

        //update the order status
       $order->update(['status'=>0]);
        //Session Message
        session()->flash('msg','Order has been pending');
        //Redirect the page
        redirect('/orders');

    }

    public function show($id){
        $order = Order::find($id);
        return view('admin.orders.details', compact('order'));
    }

}
