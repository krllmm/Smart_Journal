<link href="{{ asset('_publication/index.css') }}" rel="stylesheet">
<link href="{{ asset('_article/index.css') }}" rel="stylesheet">
@extends('layouts.main')
@section('title')
    Your publications
@endsection

@section('content')

    <div class="head">Мои статьи</div>

    @livewire('filter2')

    <footer>
        Powered by Laravel 10
    </footer>

@endsection
