@extends('layouts.nav')

@section('css')
<link rel="stylesheet" href="{{ asset('css/merchant.css') }}">
@endsection

@section('main_content')
@if(session('message'))
    <div class="message">
        {{ session('message') }}
    </div>
@endif
<div class="content-merchant">
    <h2 class="merchant-name">店舗代表者：{{ $merchant->name }}</h2>
    <div class="invitation-wrapper">
        <h4>招待フォーム</h4>
        <div class="invite-form_wrapper">
            <form class="user-invite_form" action="/merchant/invitation" method="post">
                @csrf
                <select class="invite-form_select" name="shop_id">
                    <option value="">店舗選択</option>
                    @if($shops)
                    @foreach($shops as $shop)
                    <option value="{{ $shop->id }}">{{ $shop->name }}</option>
                    @endforeach
                    @endif
                </select>
                <select class="invite-form_select" name="user_id">
                    <option value="">ユーザー選択</option>
                    @if($users)
                    @foreach($users as $user)
                    @if(!$staffs->contains($user->id))
                    <option value="{{ $user->id }}">{{ $user->name . "/" . $user->email }}</option>
                    @endif
                    @endforeach
                    @endif
                </select>
                <button class="user-invite_button">招待</button>
            </form>
            @error('shop_id')
            <p>{{ $message }}</p>
            @enderror
            @error('user_id')
            <p>{{ $message }}</p>
            @enderror
        </div>
        @foreach($shops as $shop)
        <h4>{{ $shop->name }}スタッフ一覧</h4>
        <table class="user-table">
            @if($shop->staffs->isEmpty())
            <tr class="table-row">
                <td class="user-non">現在ショップスタッフはいません</td>
            </tr>
            @else
            @foreach($shop->staffs as $staff)
            <tr class="table-row">
                <td class="user-name">{{ $staff->user->name }}</td>
                <td class="user-email">{{ $staff->user->email }}</td>
                <td class="table-data_form">
                    <form class="user-delete_form" action="/merchant/delete/{{ $staff->id }}" method="post">
                        @csrf
                        <input type="hidden" name="staff_id" value="{{ $staff->id }}">
                        <button class="user-delete_button">削除</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @endif
        </table>
        @endforeach
    </div>
</div>
@endsection