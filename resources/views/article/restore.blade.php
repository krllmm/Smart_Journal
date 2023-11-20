<link rel="stylesheet" href="{{ asset('_article/show.css') }}">
@extends('layouts.main')
@section('title')
    Restoring
@endsection

@section('content')
    <div class="details">

            <div class="header">
                {{ $article->title }}
            </div>

            <div class="indicators">
                @foreach ($article->tags as $tag)
                    <div id="indicator">{{ $tag->title }}</div>
                @endforeach
            </div>

            <div id="date">{{ $article->created_at->format('d.m.Y') }} <span>&#x2022;</span>
                           {{ $article->category->category }} <span>&#x2022;</span>
                           {{ $article->rating }} points
            </div>
            <hr>



            <div class="content">
                {{ $article->content }}
            </div>


    </div>

    <footer>
        Powered by Laravel 10
    </footer>

@endsection
