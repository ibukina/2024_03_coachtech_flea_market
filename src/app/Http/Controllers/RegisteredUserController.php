<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisteredUserController extends Controller
{
    public function index(){
        return view('register');
    }

    public function create(RegisterRequest $request){
        User::create([
            'role_id' => '10',
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect('/login');
    }
}
