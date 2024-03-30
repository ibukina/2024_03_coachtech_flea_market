@extends('layouts.nav')

@section('css')
<link rel="stylesheet" href="{{ asset('css/comment.css') }}">
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
<div class="content-comment">
    <div class="item-image_wrapper">
        <div class="item-image">
            <img class="item-image_image" src="" alt="商品画像">
        </div>
    </div>
    <div class="item-comment_wrapper">
        <div class="item-wrapper">
            <h2 class="item-name">商品名</h2>
            <div class="item-brand">ブランド名</div>
            <div class="item-price">¥47,000(値段)</div>
            <div class="mark-container">
                <div class="mark-wrapper">
                    <form class="like-form" action="/item/comment/item_id" method="post">
                        @csrf
                        <input type="hidden" name="item_id" value="">
                        <button class="like-button"></button>
                    </form>
                    <div class="mark-number">3</div>
                </div>
                <div class="mark-wrapper">
                    <form class="comment-form_link" action="/item/comment/item_id" method="get">
                        @csrf
                        <input type="hidden" name="item_id" value="">
                        <button class="comment-button"></button>
                    </form>
                    <div class="mark-number">14</div>
                </div>
            </div>
        </div>
        <div class="comment-container">
            <div class="comment-wrapper">
                <div class="comment-user_wrapper">
                    <img class="user-icon" src="" alt="">
                    <div class="user-name">名前</div>
                </div>
                <div class="user-comment"></div>
            </div>
            <div class="comment-wrapper">
                <div class="comment-user_wrapper">
                    <img class="user-icon" src="" alt="">
                    <div class="user-name">名前</div>
                </div>
                <div class="user-comment"></div>
            </div>
            <div class="comment-wrapper">
                <div class="comment-user_wrapper">
                    <img class="user-icon" src="" alt="">
                    <div class="user-name">名前</div>
                </div>
                <div class="user-comment"></div>
            </div>
        </div>
        <form class="comment-form" action="">
            @csrf
            <label class="comment-form_item-wrapper">
                <p class="comment-form_item-name">商品へのコメント</p>
                <textarea class="comment-form_item-text" name="comment"></textarea>
            </label>
            <button class="comment-form_button">コメントを送信する</button>
        </form>
    </div>
</div>
@endsection