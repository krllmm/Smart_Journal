<link href="{{ asset('_search/index.css') }}" rel="stylesheet">
@extends('layouts.main')
@section('title')
    Search
@endsection

@section('content')
    <div class="content-container">
        <div class="head">Результат по запросу: {{ $input }}</div>

        @foreach ($response as $article)
            <div class="article_card">
                <div class="card_avatar">
                    <img src="{{ $article->author->profile_picture }}" alt="image not available">
                </div>
                <div class="card_info">
                    <div id="username">{{ $article->author->name }} {{ $article->author->surname }}</div>
                    <a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a>
                    <div class="options">
                        <div id="date">{{ $article->category->category }} <span>&#x2022;</span>
                                       {{ $article->created_at->format('d.m.Y') }} <span>&#x2022;</span>
                                       {{ $article->rating }} points</div>
                        <a href="{{ route('article.edit', $article->id) }}"><div>Expand</div></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <footer>
        Powered by Laravel 10
    </footer>
@endsection
