<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
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
            'message'=>'string',
            'agreement'=>'required',
        ]);
        $order->create($data);
        $message = sprintf(
            "%s\r\n%s\r\n%s\r\n%s\r\n%s",
            "сообщение-заявка",
            $request->input("name"),
            $request->input("tel"),
            $request->input("email"),
            $request->input("message"),        
        );
   
        Http::post(sprintf(
            'https://api.telegram.org/bot%s/sendMessage',
            config('telegram.bot_token')),
            [
                'chat_id' => config('telegram.reciever_chat_id'),
                'text' => $message,
            ]
        );
        return redirect()->back()->with('info','Ваше сообщение принято! Мы свяжемся с Вами в ближайшее время!');
    }
}
