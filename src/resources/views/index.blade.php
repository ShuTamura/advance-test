@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('title')
<h1 class="header__title">お問い合わせ</h1>
@endsection

@section('content')
    @livewire('contact-form')
@endsection