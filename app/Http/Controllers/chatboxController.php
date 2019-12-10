<?php

namespace App\Http\Controllers;

use App\chatbox;
use Illuminate\Http\Request;

class chatboxController extends Controller
{
    public function viewEmails($email){
        $emails = chatbox::where('userEmail',$email)->get();

        return view('user.emails', ['emails'=>$emails]);
    }

    public function sendEmail(Request $req,$email){
        $chatbox = new chatbox;
        $chatbox->userEmail = $email;
        $chatbox->teacherEmail = $req->to;
        $chatbox->messageBody = $req->body;
        $chatbox->save();


        print_r("emails inserted");

    }
}
