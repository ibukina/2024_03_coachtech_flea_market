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
            <img class="item-image_image" src="{{ asset($item->img_url) }}" alt="商品画像">
        </div>
    </div>
    <div class="item-comment_wrapper">
        <div class="item-wrapper">
            <h2 class="item-name">{{ $item->name }}</h2>
            @if(optional($item->user->shops)->first())
            <div class="item-brand">{{ $item->user->shops->first()->name }}</div>
            @else
            <div class="item-brand">{{ $item->user->name }}</div>
            @endif
            <div class="item-price">¥{{ $item->price }}(値段)</div>
            <div class="mark-container">
                <div class="mark-wrapper">
                    @if(!empty($liked))
                    @if(isset($liked[$item->id]))
                    <form class="unlike-form" action="/item/unlike/{{ $item->id }}" method="post">
                        @csrf
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <button class="unlike-button"></button>
                    </form>
                    @else
                    <form class="like-form" action="/item/like/{{ $item->id }}" method="post">
                        @csrf
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <button class="like-button"></button>
                    </form>
                    @endif
                    @endif
                    <div class="mark-number">{{ $likes->count() }}</div>
                </div>
                <div class="mark-wrapper">
                    <form class="comment-form_link" action="/item/comment/item_id" method="get">
                        @csrf
                        <input type="hidden" name="item_id" value="">
                        <button class="comment-button"></button>
                    </form>
                    <div class="mark-number">{{ $comments->count() }}</div>
                </div>
            </div>
        </div>
        @livewire('comment-select', ['comments'=>$comments, 'item'=>$item])
        @can('user-only')
        <form class="comment-form" action="/item/comment/{{ $item->id }}" method="post">
            @csrf
            <label class="comment-form_item-wrapper">
                <p class="comment-form_item-name">商品へのコメント</p>
                <textarea class="comment-form_item-text" name="comment"></textarea>
            </label>
            <button class="comment-form_button">コメントを送信する</button>
        </form>
        @endcan
    </div>
</div>
@endsection