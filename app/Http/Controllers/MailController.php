<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Mockery\CountValidator\Exception;
use Session;
use App\FormatLeague;
use App\League;
use App\CategoryLeague;
use View;
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
           try{
              $data = $request->all();
              $imagen1=url('/').'/EntreLigas.png';
              $teamEscude=url('/').'/'.$request->teamEscude;
             //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
               if($request->type==1)
               {
                 $plantilla='emails.templates.invitationCaptain';
               }else{
                 $plantilla='emails.templates.invitationPlayer';  
               }

               //$view = View::make($plantilla)->with($data);
               //$contents = $view->render();//contenido del mail en string>
               Mail::send($plantilla, ['imagen1' => $imagen1,'email'=>$request->email,'subject'=>$request->subject,'teamEscude'=>$teamEscude,'teamName'=>$request->teamName,'leagueName'=>$request->leagueName,'categoryName'=>$request->categoryName,'body'=>$request->body,'league'=>$request->league,'category'=>$request->category,'tournament'=>$request->tournament,'team'=>$request->team,'type'=>$request->type], function ($message) use ($request) {
                            $message->from('info@entreligas.cl','EntreLigasFC');
                            $message->subject($request->subject);
                            $message->to($request->email,$request->name);
                        });
                       
               /*$email=Mail::send($plantilla, $data, function($message) use ($request)
               {
                   //remitente
                   $message->from('info@entreligas.cl','EntreLigasFC');
                   $message->subject($request->subject);
                   $message->to($request->email, $request->name);
               });*/
               return 1;
           }catch(\Exception $e){
              dd($e);
           }
    }
}
