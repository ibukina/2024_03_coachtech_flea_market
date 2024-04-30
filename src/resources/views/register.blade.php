@extends('layouts.logo')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('main_content')
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
@can('admin-only')
<div class="content-register">
    <div class="register-wrapper">
        <h2 class="register-title">店舗代表者追加</h2>
        <form class="register-form" action="/admin/merchant" method="post">
            @csrf
            <label class="register-form_item">
                <div class="register-form_item-name">名前</div>
                <input class="register-form_item-input" type="text" name="name">
            </label>
            <label class="register-form_item">
                <div class="register-form_item-name">メールアドレス</div>
                <input class="register-form_item-input" type="email" name="email">
            </label>
            <label class="register-form_item">
                <div class="register-form_item-name">パスワード</div>
                <input class="register-form_item-input" type="password" name="password">
            </label>
            <label class="register-form_item">
                <button class="register-form_item-button">登録する</button>
            </label>
        </form>
    </div>
</div>
@else
<div class="content-register">
    <div class="register-wrapper">
        <div class="register-form_title">会員登録</div>
        <form class="register-form" action="/register" method="post">
            @csrf
            <input type="hidden" name="name" value="new user">
            <label class="register-form_item">
                <div class="register-form_item-name">メールアドレス</div>
                <input class="register-form_item-input" type="email" name="email">
            </label>
            <label class="register-form_item">
                <div class="register-form_item-name">パスワード</div>
                <input class="register-form_item-input" type="password" name="password">
            </label>
            <label class="register-form_item">
                <button class="register-form_item-button">登録する</button>
            </label>
        </form>
        <a class="login-link" href="/login">ログインはこちら</a>
    </div>
</div>
@endcan
@endsection