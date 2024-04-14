<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddressRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\Item;
use App\Models\Purchase;
use App\Models\SoldItem;

class PurchaseController extends Controller
{
    public function index($item_id){
        $item=Item::find($item_id);
        $profile=Auth::user()->profile;
        return view('purchase', compact('item', 'profile'));
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
        $item=Item::find($item_id);
        return view('address', compact('item'));
    }

    public function updateAddress(AddressRequest $request, $item_id){
        $user_id=Auth::id();
        Profile::updateOrCreate(
            ['user_id'=>$user_id],
            ['user_id'=>$user_id,
            'postcode'=>$request['postcode'],
            'address'=>$request['address'],
            'building'=>$request['building'],]
        );
        return redirect()->route('purchaseView', ['item_id'=>$item_id]);
    }
}
