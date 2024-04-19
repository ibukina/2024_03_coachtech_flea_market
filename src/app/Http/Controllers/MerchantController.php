<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Shop;
use App\Models\Staff;

class MerchantController extends Controller
{
    public function index(){
        $merchant=Auth::user();
        $shops=Shop::where('user_id', $merchant->id)->get();
        foreach($shops as $shop){
            $shop_id=$shop->id;
            $staffs=Staff::where('shop_id', $shop_id)->with('user')->get();
        }
        $users=User::where('role_id', "10")->paginate(10);
        return view('merchant', compact('users', 'merchant', 'shops', 'staffs'));
    }

    public function create(Request $request){
        if($request->role_id == 10){
            Staff::create([
                'user_id'=>$request->user_id,
                'shop_id'=>$request->shop_id,
            ]);
        }
        return redirect('merchant');
    }

    public function destroy($staff_id){
        Staff::find($staff_id)->delete();
        return redirect('merchant');
    }
}
