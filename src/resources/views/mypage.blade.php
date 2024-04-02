@extends('layouts.nav')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('main_content')
<div class="content-mypage">
    <div class="user-info_wrapper">
        <div class="user-info">
            @if($profile)
            <img class="user-icon" src="{{ asset($profile->img_url) }}" alt="">
            @else
            <img class="user-icon" src="{{ asset('storage/image/default.png') }}" alt="">
            @endif
            <div class="user-name">{{ $user->name }}</div>
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
        @if($sells)
        @foreach($sells as $sell)
        <div class="detail-form_wrapper">
            <form class="detail-form" action="/item/{{ $sell->id }}" method="get">
                @csrf
                <img class="detail-form_image" src="{{ asset($sell->img_url) }}" alt="">
                <button class="detail-form_button"></button>
            </form>
        </div>
        @endforeach
        @endif
    </div>
</div>
@endsection