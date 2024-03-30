@extends('layouts.nav')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('main_content')
<div class="content-mypage">
    <div class="user-info_wrapper">
        <div class="user-info">
            <img class="user-icon" src="{{ $user->img_url }}" alt="">
            <div class="user-name">{{ $user->user->name }}</div>
        </div>
        <div class="profile-link_wrapper">
            <a class="profile-link" href="/mypage/profile">プロフィールを編集</a>
        </div>
    </div>
    <div class="mypage-tag_wrapper">
        <button class="mypage-tag sell-item_tag">出品した商品</button>
        <button class="mypage-tag purchase-item_tag">購入した商品</button>
    </div>
    <div class="item-wrapper">
        @for ($i = 0; $i < 10; $i++)
        <form class="detail-form" action="/item/item_id" method="get">
            @csrf
            <button class="detail-form_button"></button>
        </form>
        @endfor
    </div>
</div>
@endsection