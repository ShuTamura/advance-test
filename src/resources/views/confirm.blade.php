@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('title')
<h1 class="header__title">内容確認</h1>
@endsection

@section('content')
    @livewire('confirm')
@endsection