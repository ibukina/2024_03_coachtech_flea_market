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
            <input class="form-item_file" name="img" type="file">
        </div>
        <label class="form-item_wrapper">
            <p class="form-item_name">ユーザー名</p>
            <input class="form-item_input" name="name" type="text">
        </label>
        <label class="form-item_wrapper">
            <p class="form-item_name">郵便番号</p>
            <input class="form-item_input" name="postcode" type="text">
        </label>
        <label class="form-item_wrapper">
            <p class="form-item_name">住所</p>
            <input class="form-item_input" name="address" type="text">
        </label>
        <label class="form-item_wrapper">
            <p class="form-item_name">建物名</p>
            <input class="form-item_input" name="building" type="text">
        </label>
        <button class="profile-update_button">更新する</button>
    </form>
</div>
@endsection