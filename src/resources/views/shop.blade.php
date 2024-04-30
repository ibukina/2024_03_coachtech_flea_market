@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop.css') }}">
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
<div class="content-shop">
    <h2 class="page-title">店舗の追加</h2>
    <form class="shop-form" action="/merchant/shop" method="post" enctype="multipart/form-data">
        @csrf
        <p class="shop-form_item-name">店舗画像</p>
        <div class="shop-form_item-file_container">
            <label class="shop-form_item-file_wrapper" for="img_url">
                画像を選択する
                <input class="shop-form_item-file" name="store_image" type="file" id="img_url">
            </label>
        </div>
        <h3 class="detail-title">エリアとジャンル</h3>
        <label class="shop-form_item-wrapper">
            <p class="shop-form_item-name">地域</p>
            <select class="shop-form_item-input shop-form_item-select" name="area_id">
                <option class="shop-form_item-option" value=""></option>
                @foreach($areas as $area)
                <option class="shop-form_item-option" value="{{ $area->id }}">{{ $area->area }}</option>
                @endforeach
            </select>
        </label>
        <label class="shop-form_item-wrapper">
            <p class="shop-form_item-name">ジャンル</p>
            <select class="shop-form_item-input shop-form_item-select" name="genre_id">
                <option class="shop-form_item-option" value=""></option>
                @foreach($genres as $genre)
                <option class="shop-form_item-option" value="{{ $genre->id }}">{{ $genre->genre }}</option>
                @endforeach
            </select>
        </label>
        <h3 class="name-description-title">店舗名と概要</h3>
        <label class="shop-form_item-wrapper">
            <p class="shop-form_item-name">店舗名</p>
            <input class="shop-form_item-input" name="name" type="text">
        </label>
        <label class="shop-form_item-wrapper">
            <p class="shop-form_item-name">店舗概要</p>
            <textarea class="shop-form_item-input" name="summary" type="text"></textarea>
        </label>
        <button class="shop-form_button">出店する</button>
    </form>
</div>
@endsection