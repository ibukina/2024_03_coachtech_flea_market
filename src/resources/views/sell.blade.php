@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell.css') }}">
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
<div class="content-sell">
    <h2 class="page-title">商品の出品</h2>
    <form class="sell-form" action="/sell" method="post" enctype="multipart/form-data">
        @csrf
        <p class="sell-form_item-name">商品画像</p>
        <div class="sell-form_item-file_container">
            <label class="sell-form_item-file_wrapper" for="img_url">
                画像を選択する
                <input class="sell-form_item-file" name="store_image" type="file" id="img_url">
            </label>
        </div>
        <h3 class="detail-title">商品の詳細</h3>
        <label class="sell-form_item-wrapper">
            <p class="sell-form_item-name">カテゴリー</p>
            @livewire('category-checkbox', ['categories'=>$categories])
        </label>
        <label class="sell-form_item-wrapper">
            <p class="sell-form_item-name">商品の状態</p>
            <select multiple class="sell-form_item-input sell-form_item-select" name="condition_id">
                <option class="sell-form_item-option" value=""></option>
                @foreach($conditions as $condition)
                <option class="sell-form_item-option" value="{{ $condition->id }}">{{ $condition->condition }}</option>
                @endforeach
            </select>
        </label>
        <h3 class="name-description-title">商品名と説明</h3>
        <label class="sell-form_item-wrapper">
            <p class="sell-form_item-name">商品名</p>
            <input class="sell-form_item-input" name="name" type="text">
        </label>
        <label class="sell-form_item-wrapper">
            <p class="sell-form_item-name">商品の説明</p>
            <textarea class="sell-form_item-input" name="description" type="text"></textarea>
        </label>
        <h3 class="price-title">販売価格</h3>
        <label class="sell-form_item-wrapper">
            <p class="sell-form_item-name">販売価格</p>
            <div class="sell-form_item-input_wrapper">
                <input class="sell-form_item-input_price" name="price" type="text">
                <span class="sell-form_item-input_span">¥</span>
            </div>
        </label>
        <button class="sell-form_button">出品する</button>
    </form>
</div>
@endsection