<link href="{{ asset('_article/index.css') }}" rel="stylesheet">
@extends('layouts.main')
@section('title')
    Articles
@endsection

@section('content')
    <div class="head">Articles</div>

    @livewire('filter')

    <footer>
        Smart Journal <span>&#x2022;</span> Powered by Laravel 10
    </footer>
@endsection
