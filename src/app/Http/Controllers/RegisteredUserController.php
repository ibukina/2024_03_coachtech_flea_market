<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisteredUserController extends Controller
{
    public function index(){
        return view('register');
    }

    public function create(Request $request){
        $user=User::create([
            'name' => "new user",
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect('/login');
    }
}
