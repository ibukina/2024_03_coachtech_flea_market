@extends('layouts.logo')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('main_content')
<div class="content-register">
    <div class="register-wrapper">
        <div class="register-form_title">会員登録</div>
        <form class="register-form" action="/register" method="post">
            @csrf
            <label class="register-form_item">
                <div class="register-form_item-name">メールアドレス</div>
                <input type="email" name="email" class="register-form_item-input">
            </label>
            <label class="register-form_item">
                <div class="register-form_item-name">パスワード</div>
                <input type="password" name="password" class="register-form_item-input">
            </label>
            <label class="register-form_item">
                <button class="register-form_item-button">登録する</button>
            </label>
        </form>
        <a class="login-link" href="/login">ログインはこちら</a>
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