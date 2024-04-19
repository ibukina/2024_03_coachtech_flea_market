@extends('layouts.nav')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('main_content')
<div class="content-admin">
    <div class="user-container">
        <h2 class="user-title">ユーザー一覧</h2>
        <table class="user-table">
            @if($users)
            @foreach($users as $user)
            <tr class="table-row">
                <td class="user-name">{{ $user->name }}</td>
                <td class="user-email">{{ $user->email }}</td>
                <td class="table-data_form">
                    <form class="user-delete_form" action="/admin/delete/{{ $user->id }}" method="post">
                        @csrf
                        <button class="user-delete_button">削除</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @endif
        </table>
        {{ $users->links('vendor.pagination.bootstrap-4') }}
    </div>
    <div class="shop-container">
        <div class="shop-title">ショップ一覧</div>
        <div class="shop-wrapper">
            @if($shops)
            @foreach($shops as $shop)
            <div class="shop-item_wrapper">
                <div class="shop-name">店舗名：{{ $shop->name }}</div>
                <div class="merchant-name">店舗管理者：{{ $shop->user->name }}</div>
                @foreach($shop->user->items as $item)
                <div class="shop-item_detail">
                    <img class="item-image" src="{{ asset($item->img_url) }}" alt="">
                    <div class="item-name">{{ $item->name }}</div>
                    <form class="detail-form" action="/item/{{ $item->id }}" method="get">
                        @csrf
                        <button class="detail-form_button">商品詳細へ</button>
                    </form>
                </div>
                @endforeach
            </div>
            @endforeach
            @endif
        </div>
        {{ $shops->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>
@endsection