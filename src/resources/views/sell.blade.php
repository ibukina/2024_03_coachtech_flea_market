@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell.css') }}">
@endsection

@section('main_content')
<div class="content-sell">
    <h2 class="page-title">商品の出品</h2>
    <form class="sell-form" action="/sell" method="post">
        <p class="sell-form_item-name">商品画像</p>
        <div class="sell-form_item-file_container">
            <label class="sell-form_item-file_wrapper" for="img_url">
                画像を選択する
                <input class="sell-form_item-file" name="img" type="file" id="img_url">
            </label>
        </div>
        <h3 class="detail-title">商品の詳細</h3>
        <label class="sell-form_item-wrapper">
            <p class="sell-form_item-name">カテゴリー</p>
            <select multiple class="sell-form_item-input sell-form_item-select" name="category">
                <option value=""></option>
                <option value=""></option>
            </select>
        </label>
        <label class="sell-form_item-wrapper">
            <p class="sell-form_item-name">商品の状態</p>
            <select multiple class="sell-form_item-input sell-form_item-select" name="condition">
                <option value=""></option>
                <option value=""></option>
            </select>
        </label>
        <h3 class="name-description-title">商品名と説明</h3>
        <label class="sell-form_item-wrapper">
            <p class="sell-form_item-name">商品名</p>
            <input class="sell-form_item-input" name="name" type="text">
        </label>
        <label class="sell-form_item-wrapper">
            <p class="sell-form_item-name">商品の説明</p>
            <input class="sell-form_item-input" name="description" type="text">
        </label>
        <h3 class="price-title">販売価格</h3>
        <label class="sell-form_item-wrapper">
            <p class="sell-form_item-name">販売価格</p>
            <input class="sell-form_item-input" name="price" type="text" placeholder="¥">
        </label>
        <button class="sell-form_button">出品する</button>
    </form>
</div>
@endsection