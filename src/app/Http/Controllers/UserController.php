<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;
use App\Models\Item;
use App\Models\SoldItem;

class UserController extends Controller
{
    public function mypage(){
        $user=Auth::user();
        $profile=$user->profile;
        $user_id=$user->id;
        $sells=Item::where('user_id', $user_id)->get();
        $purchases=SoldItem::where('user_id', $user_id)->get();
        return view('mypage', compact('user', 'profile', 'sells', 'purchases'));
    }

    public function profile(){
        return view('profile');
    }

    public function updateProfile(ProfileRequest $request){
        $user_id=Auth::id();
        $read_path='img/default.svg';
        if($request->hasFile('img_url')){
            $image_file=$request->file('img_url');
            $filename=$image_file->getClientOriginalName();
            $image_path=$image_file->storeAs('public/image', $filename);
            //画像を保存するパスは"public/image/xxx.jpeg"
            $read_path = str_replace('public/', 'storage/', $image_path);
            // 画像のパスをデータベースに保存
        }
        User::find($user_id)->update(['name'=>$request->name]);
        Profile::updateOrCreate(
            ['user_id'=>$user_id],
            ['user_id'=>$user_id,
            'img_url'=>$read_path,
            'postcode'=>$request['postcode'],
            'address'=>$request['address'],
            'building'=>$request['building'],]
        );
        return redirect('/mypage');
    }
}
