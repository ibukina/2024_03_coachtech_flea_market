@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell.css') }}">
@endsection

@section('main_content')
<div class="content-sell">
    <h2 class="page-title">商品の出品</h2>
    <form class="sell-form" action="" method="post">
        <label class="form-item_wrapper">
            <p class="form_item-name">商品画像</p>
            <input class="form-item_input" name="img" type="file">
        </label>
        <h3 class="detail-title">商品の詳細</h3>
        <label class="form-item_wrapper">
            <p class="form_item-name">カテゴリー</p>
            <select class="form-item_input form-item_select" name="category">
                <option value=""></option>
                <option value=""></option>
            </select>
        </label>
        <label class="form-item_wrapper">
            <p class="form_item-name">商品の状態</p>
            <select class="form-item_input form-item_select" name="condition">
                <option value=""></option>
                <option value=""></option>
            </select>
        </label>
        <h3 class="name-description-title">商品名と説明</h3>
        <label class="form-item_wrapper">
            <p class="form_item-name">商品名</p>
            <input class="form-item_input" name="name" type="text">
        </label>
        <label class="form-item_wrapper">
            <p class="form_item-name">商品の説明</p>
            <input class="form-item_input" name="description" type="text">
        </label>
        <h3 class="price-title">販売価格</h3>
        <label class="form-item_wrapper">
            <p class="form_item-name">販売価格</p>
            <input class="form-item_input" name="price" type="text">
        </label>
        <button class="form-button">出品する</button>
    </form>
</div>
@endsection