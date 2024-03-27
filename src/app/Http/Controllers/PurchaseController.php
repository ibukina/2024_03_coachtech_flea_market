<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddressRequest;
use Illuminate\Support\Facades\Auth;
use Ap\Models\Profile;
use App\Models\Item;
use App\Models\Purchase;
use App\Models\SoldItem;

class PurchaseController extends Controller
{
    public function index(){
        // $items=Item::find($item_id);
        return view('purchase');
    }

    public function purchase(Request $request){
        $user_id=Auth::id();
        SoldItem::create([
            'user_id'=>$user_id,
            'item_id'=>$request['item_id'],
        ]);
        return redirect('/');
    }

    public function address($item_id){
        return view('address');
    }

    public function updateAddress(AddressRequest $request){
        $user_id=Auth::user();
        Profile::where('user_id', $user_id)->update([
            'postcode'=>$request['postcode'],
            'address'=>$request['address'],
            'building'=>$request['building'],
        ]);
        return redirect('/purchase/item_id');
    }
}
