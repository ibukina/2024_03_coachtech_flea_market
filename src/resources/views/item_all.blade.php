@extends('layouts.nav')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item_all.css') }}">
@endsection

@section('main_content')
@livewire('item-button', ['items'=>$items, 'likes'=>$likes])
@endsection