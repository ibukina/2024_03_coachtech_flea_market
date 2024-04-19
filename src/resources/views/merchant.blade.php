@extends('layouts.nav')

@section('css')
<link rel="stylesheet" href="{{ asset('css/merchant.css') }}">
@endsection

@section('main_content')
<div class="content-merchant">
    @foreach($shops as $shop)
    <h1 class="shop-name">店舗名：{{ $shop->name }}</h1>
    <h3 class="merchant-name">店舗代表者：{{ $merchant->name }}</h3>
    @endforeach
    <div class="invitation-wrapper">
        <h4>スタッフ一覧</h4>
        <table class="user-table">
            @if($staffs->isEmpty())
            <tr class="table-row">
                <td class="user-non">現在ショップスタッフはいません</td>
            </tr>
            @else
            @foreach($staffs as $staff)
            <tr class="table-row">
                <td class="user-name">{{ $staff->user->name }}</td>
                <td class="user-email">{{ $staff->user->email }}</td>
                <td class="table-data_form">
                    <form class="user-delete_form" action="/merchant/delete/{{ $staff->id }}" method="post">
                        @csrf
                        <input type="hidden" name="staff_id" value="{{ $staff->id }}">
                        <button class="user-delete_button">削除</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @endif
        </table>
        <h4>ユーザー一覧</h4>
        <table class="user-table">
            @if($users)
            @foreach($users as $user)
            @if(!$staffs->pluck('user.id')->contains($user->id))
            <tr class="table-row">
                <td class="user-name">{{ $user->name }}</td>
                <td class="user-email">{{ $user->email }}</td>
                <td class="table-data_form">
                    <form class="user-invite_form" action="/merchant/invitation" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        @foreach($shops as $shop)
                        <input type="hidden" name="role_id" value="{{ $user->role->id }}">
                        <input type="hidden" name="shop_id" value="{{ $shop->id }}">
                        @endforeach
                        <button class="user-invite_button">招待</button>
                    </form>
                </td>
            </tr>
            @endif
            @endforeach
            @endif
        </table>
        {{ $users->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>
@endsection