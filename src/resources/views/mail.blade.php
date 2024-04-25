@extends('layouts.logo')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mail.css') }}">
@endsection

@section('main_content')
<div class="content-mail">
    <div class="mail-wrapper">
        <div class="mail-title">送信内容の確認</div>
        <form class="mail-form" action="/mail/send" method="post">
            @csrf
            <label class="mail-form_item">
                <div class="mail-form_item-name">送信タイトル</div>
                <input class="mail-form_title" name="title" type="text" value="{{ $mail['title'] }}">
            </label>
            <label class="mail-form_item">
                <div class="mail-form_item-name">送信相手</div>
                <input class="mail-form_email" name="email" type="email" value="{{ $mail['email'] }}">
            </label>
            <label class="mail-form_item">
                <div class="mail-form_item-name">送信内容</div>
                <textarea class="mail-form_text" name="content">{{ $mail['content'] }}</textarea>
            </label>
            <label class="mail-form_item">
                <button class="mail-form_item-button">送信する</button>
            </label>
        </form>
        <a class="back-link" type="button" onClick="history.back()">戻る</a>
    </div>
</div>
@endsection