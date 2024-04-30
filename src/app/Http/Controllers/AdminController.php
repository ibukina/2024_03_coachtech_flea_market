<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Shop;

class AdminController extends Controller
{
    public function index(){
        $users=User::where('role_id', "10")->paginate(10, ['*'], 'usersPage');
        $shops=Shop::with('user.staffs.items')->paginate(5, ['*'], 'shopsPage');
        return view('admin', compact('users', 'shops'));
    }

    public function create(RegisterRequest $request){
        User::create([
            'role_id' => '5',
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect('/admin')->with('message', '店舗代表者を追加しました');
    }

    public function destroy($user_id){
        User::find($user_id)->delete();
        return redirect('/admin')->with('message', 'ユーザーを削除しました');
    }
}
