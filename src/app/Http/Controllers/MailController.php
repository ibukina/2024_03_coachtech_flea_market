<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MailRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminEmail;
use App\Models\User;

class MailController extends Controller
{
    public function confirm(MailRequest $request){
        $mail=$request->only('title', 'email', 'content');
        return view('mail', compact('mail'));
    }

    public function send(MailRequest $request){
        $user=User::where('email', $request->email)->first()->name;
        $mail=$request->only('title', 'email', 'content');
        $mail['user']=$user;
        Mail::to($mail['email'])->send(new AdminEmail($mail));
        return redirect('/admin')->with('message', 'メールが送信されました');
    }
}
