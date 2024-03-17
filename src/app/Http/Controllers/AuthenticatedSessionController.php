<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    public function index(){
        return view ('login');
    }

    public function create(Request $request){
        $credentials=$request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect('/');
        }
        return redirect('/login')->with('error', 'ログイン状態が正しくないか、会員登録されていない可能性があります');
    }

    public function destroy(){
        Auth::logout();
        return redirect('/login');
    }
}
