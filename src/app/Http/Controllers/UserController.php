<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class UserController extends Controller
{
    public function mypage(){
        return view('mypage');
    }

    public function profile(Request $request){
        return redirect('/mypage');
    }

    public function updateProfile(Request $request){
        return redirect('/mypage');
    }
}
