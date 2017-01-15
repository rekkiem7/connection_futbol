<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Mockery\CountValidator\Exception;
use Session;
use App\FormatLeague;
use App\League;
use App\CategoryLeague;
class MailController extends Controller
{
    public function index(){
        return view('emails.index');
    }

    public function writeMail(){
        try{
            if(Session::get('login')==true)
            {
                $leagues=League::Information();
                return view('emails.writeMail',array('leagues'=>$leagues));
            }else{
                return redirect('/');
            }
        }catch(Exception $e)
        {

        }

    }
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
