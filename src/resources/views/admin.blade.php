@extends('layouts.nav')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('main_content')
@if(session('message'))
    <div class="message">
        {{ session('message') }}
    </div>
@endif
@if (count($errors) > 0)
    <div class="error-has">
        入力内容に問題があります
    </div>
    <div class="error-message_wrapper">
        @foreach ($errors->all() as $error)
        <li class="error-message">{{$error}}</li>
        @endforeach
    </div>
@endif
<div class="content-admin">
    <div class="mail-container">
        <h2 class="mail-title">メール送信</h2>
        <form class="mail-form" action="/mail/confirm" method="post">
            @csrf
            <label class="mail-form_item">
                <div class="mail-form_item-name">送信タイトル</div>
                <input class="mail-form_title" name="title" type="text">
            </label>
            <label class="mail-form_item">
                <div class="mail-form_item-name">送信相手</div>
                <input class="mail-form_email" name="email" type="email">
            </label>
            <label class="mail-form_item">
                <div class="mail-form_item-name">送信内容</div>
                <textarea class="mail-form_text" name="content"></textarea>
            </label>
            <label class="mail-form_item">
                <button class="mail-form_item-button">送信内容を確認</button>
            </label>
        </form>
    </div>
    <div class="user-container">
        <h2 class="user-title">ユーザー一覧</h2>
        <table class="user-table">
            @if($users)
            @foreach($users as $user)
            <tr class="table-row">
                <td class="user-name">{{ $user->name }}</td>
                <td class="user-email">{{ $user->email }}</td>
                <td class="table-data_form">
                    <form class="user-delete_form" action="/admin/delete/{{ $user->id }}" method="post">
                        @csrf
                        <button class="user-delete_button">削除</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @endif
        </table>
        {{ $users->appends(['shopsPage' => request('shopsPage')])->links('vendor.pagination.bootstrap-4') }}
    </div>
    <div class="shop-container">
        <div class="shop-title">ショップ一覧</div>
        <div class="shop-wrapper">
            @if($shops)
            @foreach($shops as $shop)
            <div class="shop-item_wrapper">
                <h2 class="shop-name">店舗名：{{ $shop->name }}</h2>
                <h3 class="merchant-name">店舗管理者：{{ $shop->user->name }}</h3>
                @if(!empty($shop->staffs))
                @foreach($shop->staffs as $staff)
                <h4 class="shop-staff">{{ $staff->user->name }}</h4>
                @if(!empty($staff->user->items))
                @foreach($staff->user->items as $item)
                <div class="shop-item_detail">
                    <img class="item-image" src="{{ asset($item->img_url) }}" alt="">
                    <div class="item-name">{{ $item->name }}</div>
                    <form class="detail-form" action="/item/{{ $item->id }}" method="get">
                        @csrf
                        <button class="detail-form_button">商品詳細へ</button>
                    </form>
                </div>
                @endforeach
                @endif
                @endforeach
                @endif
            </div>
            @endforeach
            @endif
            {{ $shops->appends(['usersPage' => request('usersPage')])->links('vendor.pagination.bootstrap-4') }}
            <p class="item-alert">※一般ユーザーが出品したものにつきましてはホーム画面からお探しください。</p>
        </div>
    </div>
</div>
@endsection