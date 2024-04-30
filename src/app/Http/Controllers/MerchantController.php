<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ShopRequest;
use App\Http\Requests\StaffRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Shop;
use App\Models\Staff;
use App\Models\Area;
use App\Models\Genre;

class MerchantController extends Controller
{
    public function index(){
        $merchant=Auth::user();
        $shops=Shop::where('user_id', $merchant->id)->with('staffs.user')->get();
        $staffs=collect();
        foreach($shops as $shop){
            foreach($shop->staffs as $staff){
                $staffs->push($staff->user_id);
            }
        }
        $users=User::where('role_id', "10")->get();
        return view('merchant', compact('users', 'merchant', 'shops', 'staffs'));
    }

    public function create(StaffRequest $request){
        Staff::create([
            'user_id'=>$request->user_id,
            'shop_id'=>$request->shop_id,
        ]);
        return redirect('/merchant')->with('message', 'ショップスタッフを追加しました');
    }

    public function destroy($staff_id){
        Staff::find($staff_id)->delete();
        return redirect('/merchant')->with('message', 'ショップスタッフを削除しました');
    }

    public function shopView(){
        $areas=Area::all();
        $genres=Genre::all();
        return view('shop', compact('areas', 'genres'));
    }

    public function shopCreate(ShopRequest $request){
        $image_file=$request->file('store_image');
        $filename=$image_file->getClientOriginalName();
        $image_path=$image_file->storeAs('public/image', $filename);
        $read_path = str_replace('public/', 'storage/', $image_path);
        $user_id=Auth::id();
        Shop::create([
            'user_id'=>$user_id,
            'name'=>$request->name,
            'area_id'=>$request->area_id,
            'genre_id'=>$request->genre_id,
            'summary'=>$request->summary,
            'img_url'=>$read_path,
        ]);
        return redirect('/merchant')->with('message', '店舗を追加しました');
    }
}
