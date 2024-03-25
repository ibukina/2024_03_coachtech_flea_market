@extends('layouts.nav')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item_all.css') }}">
@endsection

@section('main_content')
<div class="content-item">
    <div class="content-item_tag-wrapper">
        <button class="content-item_tag recommendation-button">おすすめ</button>
        <button class="content-item_tag mylist-button">マイリスト</button>
    </div>
    <div class="item-wrapper">
        <form class="detail-form" action="/item/item_id" method="get">
            @csrf
            <button class="detail-form_button"></button>
        </form>
    </div>
</div>
@endsection