@extends('layouts.nav')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('main_content')
<div class="content-profile">
    <h2 class="profile-title">プロフィール設定</h2>
    <form class="profile-form" action="/mypage/profile" method="post">
        @csrf
        <div class="user-icon_wrapper">
            <img class="user-icon" src="" alt="">
            <label class="profile-form_item-file_wrapper" for="img_url">
                画像を選択する
                <input class="profile-form_item-file" name="img" type="file" id="img_url">
            </label>
        </div>
        <label class="profile-form_item-wrapper">
            <p class="profile-form_item-name">ユーザー名</p>
            <input class="profile-form_item-input" name="name" type="text">
        </label>
        <label class="profile-form_item-wrapper">
            <p class="profile-form_item-name">郵便番号</p>
            <input class="profile-form_item-input" name="postcode" type="postcode">
        </label>
        <label class="profile-form_item-wrapper">
            <p class="profile-form_item-name">住所</p>
            <input class="profile-form_item-input" name="address" type="address">
        </label>
        <label class="profile-form_item-wrapper">
            <p class="profile-form_item-name">建物名</p>
            <input class="profile-form_item-input" name="building" type="text">
        </label>
        <button class="profile-update_button">更新する</button>
    </form>
</div>
@endsection