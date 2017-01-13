<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class MailController extends Controller
{
    public function send(Request $request)
   {
       //guarda el valor de los campos enviados desde el form en un array
       $data = $request->all();
 
       //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
       Mail::send('emails.message', $data, function($message) use ($request)
       {
           //remitente
           $message->from('info@entreligas.cl','EntreLigasFC');
 
           //asunto
           $message->subject($request->subject);
 
           //receptor
           $message->to($request->email, $request->name);
 
       });
       return \View::make('success');
   }
}
