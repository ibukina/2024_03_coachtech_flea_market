@extends('layouts.logo')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('main_content')
<div class="content-login">
    <div class="login-wrapper">
        <div class="login-form_title">ログイン</div>
        <form class="login-form" action="/login" method="post">
            @csrf
            <label class="login-form_item">
                <div class="login-form_item-name">メールアドレス</div>
                <input class="login-form_item-input" type="email" name="email">
            </label>
            <label class="login-form_item">
                <div class="login-form_item-name">パスワード</div>
                <input class="login-form_item-input" type="password" name="password">
            </label>
            <label class="login-form_item">
                <button class="login-form_item-button">ログインする</button>
            </label>
        </form>
        <a class="register-link" href="/register">会員登録はこちら</a>
    </div>
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
</div>
@endsection