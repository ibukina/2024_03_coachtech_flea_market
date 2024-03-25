@extends('layouts.nav')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item_detail.css') }}">
@endsection

@section('main_content')
<div class="content-detail">
    <div class="item-image_wrapper">
        <img class="item-image" src="" alt="商品画像">
    </div>
    <div class="item-detail_wrapper">
        <h2 class="item-name">商品名</h2>
        <div class="item-brand">ブランド名</div>
        <div class="price">¥47,000(値段)</div>
        <div class="mark-container">
            <div class="mark-wrapper">
                <form  class="like-form" action="" method="">
                    @csrf
                    <button class="like-button">
                        <span class="like-button_image"></span>
                    </button>
                </form>
                <div class="mark-number">3</div>
            </div>
            <div class="mark-wrapper">
                <form class="comment-form" action="">
                    @csrf
                    <button class="comment-button">
                        <span class="comment-button_image"></span>
                    </button>
                </form>
                <div class="mark-number">14</div>
            </div>
        </div>
        <form class="purchase-form" action="" method="">
            @csrf
            <button class="purchase-button">購入する</button>
        </form>
        <h3 class="summary-title">商品説明</h3>
        <p class="item-color">カラー：グレー</p>
        <p class="item-summary">新品
            商品の状態は良好です。傷もありません。
            購入後、即発送いたします。
        </p>
        <h3 class="information-title">商品の情報</h3>
        <div class="category-wrapper">
            <div class="category-title">カテゴリー</div>
            <div class="category-tag">洋服</div>
            <div class="category-tag">メンズ</div>
        </div>
        <div class="situation-wrapper">
            <div class="situation-title">商品の状態</div>
            <div class="situation-tag">良好</div>
        </div>
    </div>
</div>
@endsection