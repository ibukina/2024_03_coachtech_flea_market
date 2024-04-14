@extends('layouts.nav')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item_detail.css') }}">
@endsection

@section('main_content')
<div class="content-detail">
    <div class="item-image_wrapper">
        <div class="item-image">
            <img class="item-image_image" src="{{ asset($item->img_url) }}" alt="商品画像">
        </div>
    </div>
    <div class="item-detail_wrapper">
        <div class="item-detail">
            <h2 class="item-name">{{ $item->name }}</h2>
            <div class="item-brand">ブランド名</div>
            <div class="item-price">¥{{ number_format($item->price) }}(値段)</div>
            <div class="mark-container">
                <div class="mark-wrapper">
                    @if(!empty($liked) && isset($liked[$item->id]))
                    <form class="unlike-form" action="/item/unlike/{{ $item->id }}" method="post">
                        @csrf
                        <button class="unlike-button"></button>
                    </form>
                    @elseif(empty($liked) || !isset($liked[$item->id]))
                    <form class="like-form" action="/item/like/{{ $item->id }}" method="post">
                        @csrf
                        <button class="like-button"></button>
                    </form>
                    @endif
                    <div class="mark-number">{{ $likes->count() }}</div>
                </div>
                <div class="mark-wrapper">
                    <form class="comment-form" action="/item/comment/{{ $item->id }}" method="get">
                        @csrf
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <button class="comment-button"></button>
                    </form>
                    <div class="mark-number">{{ $comments->count() }}</div>
                </div>
            </div>
            <form class="purchase-form" action="/purchase/{{ $item->id }}" method="get">
                @csrf
                <input type="hidden" name="item_id" value="{{ $item->id }}">
                <button class="purchase-button">購入する</button>
            </form>
            <h3 class="description-title">商品説明</h3>
            <p class="item-color">カラー：グレー</p>
            <p class="item-description">{{ $item->description }}</p>
            <h3 class="information-title">商品の情報</h3>
            <div class="category-wrapper">
                <div class="category-title">カテゴリー</div>
                <div class="category-tag_wrapper">
                    @foreach($item->categories as $category)
                    <div class="category-tag">{{ $category->category }}</div>
                    @endforeach
                </div>
            </div>
            <div class="condition-wrapper">
                <div class="condition-title">商品の状態</div>
                <div class="condition-tag">{{ $item->condition->condition }}</div>
            </div>
        </div>
    </div>
</div>
@endsection