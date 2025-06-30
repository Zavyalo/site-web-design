<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SubscribeController extends Controller
{
    public function store (Request $request, Subscribe $subscribe)
    {

        if($request -> check){
            die();
        }
        $data = $request -> validate([
            'email'=>'required|string|max:255' ,
            'agreement'=>'required',         
        ]);
        $subscribe->create($data);
        $message = sprintf(
            "%s\r\n%s",
            "сообщение-полдписка",
            $request->input("email")     
        );
   
        Http::post(sprintf(
            'https://api.telegram.org/bot%s/sendMessage',
            config('telegram.bot_token')),
            [
                'chat_id' => config('telegram.reciever_chat_id'),
                'text' => $message,
            ]
        );
        return redirect()->back()->with('info','Вы успешно подписались на рассылку!');
    }
}
