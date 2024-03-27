<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;

class UserController extends Controller
{
    public function mypage(){
        $users=Auth::user();
        $likes=Auth::user()->likes()->with('item')->get();
        $sells=Auth::user()->with('item')->get();
        return view('mypage');
    }

    public function profile(){
        $users=Auth::user();
        return view('profile');
    }

    public function updateProfile(ProfileRequest $request){
        $user_id=Auth::user();
        User::find($user_id)->update(['name'=>$request->name]);
        Profile::updateOrCreate([
            'user_id'=>$user_id,
            'img_url'=>$request['img'],
            'postcode'=>$request['postcode'],
            'address'=>$request['address'],
            'building'=>$request['building'],
        ]);
        return redirect('/mypage');
    }
}
