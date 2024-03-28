@extends('layouts.nav')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item_detail.css') }}">
@endsection

@section('main_content')
<div class="content-detail">
    <div class="item-image_wrapper">
        <div class="item-image">
            <img class="item-image_image" src="{{ asset('') }}" alt="商品画像">
        </div>
    </div>
    <div class="item-detail_wrapper">
        <div class="item-detail">
            <h2 class="item-name">商品名</h2>
            <div class="item-brand">ブランド名</div>
            <div class="item-price">¥47,000(値段)</div>
            <div class="mark-container">
                <div class="mark-wrapper">
                    <form class="like-form" action="/item/like/item_id" method="post">
                        @csrf
                        <input type="hidden" name="item_id" value="">
                        <button class="like-button"></button>
                    </form>
                    <div class="mark-number">3</div>
                </div>
                <div class="mark-wrapper">
                    <form class="comment-form" action="/item/comment/item_id" method="get">
                        @csrf
                        <input type="hidden" name="item_id" value="">
                        <button class="comment-button"></button>
                    </form>
                    <div class="mark-number">14</div>
                </div>
            </div>
            <form class="purchase-form" action="/purchase/item_id" method="get">
                @csrf
                <input type="hidden" name="item_id" value="">
                <button class="purchase-button">購入する</button>
            </form>
            <h3 class="description-title">商品説明</h3>
            <p class="item-color">カラー：グレー</p>
            <p class="item-description">新品</br>
                商品の状態は良好です。傷もありません。</br></br>
                購入後、即発送いたします。
            </p>
            <h3 class="information-title">商品の情報</h3>
            <div class="category-wrapper">
                <div class="category-title">カテゴリー</div>
                <div class="category-tag">洋服</div>
                <div class="category-tag">メンズ</div>
            </div>
            <div class="condition-wrapper">
                <div class="condition-title">商品の状態</div>
                <div class="condition-tag">良好</div>
            </div>
        </div>
    </div>
</div>
@endsection