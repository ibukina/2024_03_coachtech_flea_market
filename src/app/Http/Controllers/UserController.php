<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;

class UserController extends Controller
{
    public function mypage(){
        $user=Auth::user()->profile;
        // $likes=Auth::user()->likes()->with('item')->get();
        // $sells=Auth::user()->with('item')->get();
        return view('mypage', compact('user'));
    }

    public function profile(){
        $users=Auth::user();
        return view('profile');
    }

    public function updateProfile(ProfileRequest $request){
        $user_id=Auth::id();
        $read_path='storage/image/default.png';
        if($request->hasFile('img')){
            $image_file=$request->file('img');
            $filename=$image_file->getClientOriginalName();
            $image_path=$image_file->storeAs('public/image', $filename);
            //画像を保存するパスは"public/image/xxx.jpeg"
            $read_path = str_replace('public/', 'storage/', $image_path);
            // 画像のパスをデータベースに保存
        }
        User::find($user_id)->update(['name'=>$request->name]);
        Profile::updateOrCreate([
            'user_id'=>$user_id,
            'img_url'=>$read_path,
            'postcode'=>$request['postcode'],
            'address'=>$request['address'],
            'building'=>$request['building'],
        ]);
        return redirect('/mypage');
    }
}
