@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/address.css') }}">
@endsection

@section('main_content')
<div class="content-address">
    <h2 class="page-title">住所の変更</h2>
    <form class="address-form" action="/purchase/address/item_id" method="post">
        @csrf
        <label class="form-item_wrapper">
            <p class="form_item-name">郵便番号</p>
            <input class="form-item_input" name="postcode" type="text">
        </label>
        <label class="form-item_wrapper">
            <p class="form_item-name">住所</p>
            <input class="form-item_input" name="address" type="text">
        </label>
        <label class="form-item_wrapper">
            <p class="form_item-name">建物名</p>
            <input class="form-item_input" name="building" type="text">
        </label>
        <button class="form-button">更新する</button>
    </form>
</div>
@endsection