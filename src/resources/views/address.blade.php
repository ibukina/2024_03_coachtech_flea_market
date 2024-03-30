@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/address.css') }}">
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
<div class="content-address">
    <h2 class="page-title">住所の変更</h2>
    <form class="address-form" action="/purchase/address/item_id" method="post">
        @csrf
        <label class="address-form_item-wrapper">
            <p class="address-form_item-name">郵便番号</p>
            <input class="address-form_item-input" name="postcode" type="text">
        </label>
        <label class="address-form_item-wrapper">
            <p class="address-form_item-name">住所</p>
            <input class="address-form_item-input" name="address" type="text">
        </label>
        <label class="address-form_item-wrapper">
            <p class="address-form_item-name">建物名</p>
            <input class="address-form_item-input" name="building" type="text">
        </label>
        <button class="address-form_button">更新する</button>
    </form>
</div>
@endsection