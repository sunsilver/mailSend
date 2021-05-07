<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSendController extends Controller
{
    public function mailSend(Request $request) 
    { 
        return view('mailSend'); 
    }

    public function mailSendSubmit(Request $request)
    { 
        //request 객체를 통해 ajax에서 data라는 이름으로 보낸 값을 읽을 수 있음
        $data_arr = array( 
            'subject' => $request->subject, 
            'name' => $request->name, 
            'emailAddr' => $request->emailAddr, 
            'content' => $request->content ); 
            
        Mail::send('mail.mail_form', ['data_arr' => $data_arr], function($message) use ($data_arr){ 
            //전송할 메일 주소
            $message->to('jk05221@naver.com')->subject($data_arr['subject']); 
            $message->from($data_arr['emailAddr']); 
        }); 
            return $request; 
        }

}
