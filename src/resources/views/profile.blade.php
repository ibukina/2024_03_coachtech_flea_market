@extends('layouts.nav')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('main_content')
@if (count($errors) > 0)
    <div class="error-wrapper">
        <div class="error-has">
        入力内容に問題があります
        </div>
        <div class="error-message_wrapper">
            @foreach ($errors->all() as $error)
            <li class="error-message">{{$error}}</li>
            @endforeach
        </div>
    </div>
@endif
<div class="content-profile">
    <h2 class="profile-title">プロフィール設定</h2>
    <form class="profile-form" action="/mypage/profile" method="post"  enctype="multipart/form-data">
        @csrf
        <div class="user-icon_wrapper">
            <img class="user-icon" src="" alt="">
            <label class="profile-form_item-file_wrapper" for="img_url">
                画像を選択する
                <input class="profile-form_item-file" name="img_url" type="file" id="img_url">
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