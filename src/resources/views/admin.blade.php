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
            <div class="sell-wrapper">
                <div class="detail-form_wrapper">
                    <form class="detail-form" action="/item/item->id" method="get">
                        @csrf
                        <img class="detail-form_image" src="" alt="">
                        <button class="detail-form_button"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection