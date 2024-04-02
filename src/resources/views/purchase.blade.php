@extends('layouts.nav')

@section('css')
<link rel="stylesheet" href="{{ asset('css/purchase.css') }}">
@endsection

@section('main_content')
<div class="content-purchase">
    <form class="purchase-form" action="/purchase/{{ $item->id }}" method="post">
        @csrf
        <div class="item-info_wrapper">
            <div class="item-wrapper">
                <div class="item-image_wrapper">
                    <div class="item-image">
                        <img class="item-image_image" src="{{ asset($item->img_url) }}" alt="商品画像">
                    </div>
                </div>
                <div class="item-name_price">
                    <h2 class="item-name">{{ $item->name }}</h2>
                    <p class="item-price">¥{{ $item->price }}</p>
                </div>
            </div>
            <div class="link-wrapper">
                <div class="payment-name">支払い方法</div>
                <a class="payment-link" href="/address/{{ $item->id }}">変更する</a>
            </div>
            <div class="link-wrapper">
                <div class="address-name">配送先</div>
                <a class="address-link" href="/purchase/address/{{ $item->id }}">変更する</a>
            </div>
        </div>
        <div class="payment-wrapper">
            <div class="payment-table_wrapper">
                <table class="payment-table">
                    <tr class="table-row">
                        <th class="table-header"></th>
                        <td class="table-data"></td>
                    </tr>
                    <tr class="table-row">
                        <th class="table-header">商品代金</th>
                        <td class="table-data">¥{{ $item->price }}</td>
                    </tr>
                    <tr class="table-row">
                        <th class="table-header"></th>
                        <td class="table-data"></td>
                    </tr>
                    <tr class="table-row">
                        <th class="table-header"></th>
                        <td class="table-data"></td>
                    </tr>
                    <tr class="table-row">
                        <th class="table-header">支払い金額</th>
                        <td class="table-data">¥{{ $item->price }}</td>
                    </tr>
                    <tr class="table-row">
                        <th class="table-header">支払い方法</th>
                        <td class="table-data">コンビニ払い</td>
                    </tr>
                </table>
            </div>
            <button class="payment-button">購入する</button>
        </div>
    </form>
</div>
@endsection