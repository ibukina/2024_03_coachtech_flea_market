@extends('layouts.nav')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('main_content')
@if(session('error'))
    <div class="alert">
        {{ session('error') }}
    </div>
@endif
<div class="content-mypage">
    <div class="user-info_wrapper">
        <div class="user-info">
            @if($profile)
            <img class="user-icon" src="{{ asset($profile->img_url) }}" alt="">
            @else
            <img class="user-icon" src="{{ asset('storage/image/default.png') }}" alt="">
            @endif
            <div class="user-name">{{ $user->name }}</div>
        </div>
        <div class="profile-link_wrapper">
            <a class="profile-link" href="/mypage/profile">プロフィールを編集</a>
        </div>
    </div>
    @livewire('mypage-button', ['sells'=>$sells, 'purchases'=>$purchases])
</div>
@endsection