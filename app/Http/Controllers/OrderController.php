<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store (Request $request, Order $order)
    {
        if($request -> check){
            die();
        }
        $data = $request -> validate([
            'name'=>'required|string|max:255',
            'tel'=>'required|string|max:255',
            'email'=>'required|string|max:255',
            'comment'=>'string'
        ]);
        $order->create($data);
        return redirect()->back()->with('info','Ваше сообщение принято! Мы свяжемся с Вами в ближайшее время!');
    }
}
