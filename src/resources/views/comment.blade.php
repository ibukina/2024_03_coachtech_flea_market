@extends('layouts.nav')

@section('css')
<link rel="stylesheet" href="{{ asset('css/comment.css') }}">
@endsection

@section('main_content')
<div class="content-comment">
    <div class="item-image_wrapper">
        <img class="item-image" src="" alt="商品画像">
    </div>
    <div class="item-comment_wrapper">
        <div class="item-wrapper">
            <h2 class="item-name">商品名</h2>
            <p class="item-brand">ブランド名</p>
            <p class="item-price">¥47,000(値段)</p>
            <div class="mark-form_wrapper">
                <div class="mark-wrapper">
                    <div class="mark-image"></div>
                    <div class="mark-number">3</div>
                </div>
                <div class="mark-wrapper">
                    <div class="mark-image"></div>
                    <div class="mark-number">14</div>
                </div>
            </div>
        </div>
        <div class="comment-container">
            <div class="comment-wrapper">
                <div class="comment-user_wrapper">
                    <img class="user-icon" src="" alt="">
                    <div class="user-name"></div>
                </div>
                <div class="user-comment"></div>
            </div>
        </div>
        <form class="comment-form" action="">
            @csrf
            <label class="form-item_wrapper">
                <p class="form_item-name">商品へのコメント</p>
                <input class="form-item_input" name="comment" type="text">
            </label>
            <button class="form-button">コメントを送信する</button>
        </form>
    </div>
</div>
@endsection