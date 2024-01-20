<link rel="stylesheet" href="{{ asset('_article/show.css') }}">
@extends('layouts.main')
@section('title')
    {{ $article->title }}
@endsection

@section('content')
    <main>
        <div class="show_container">
            <div class="details">
                <div class="header">
                    {{ $article->title }}
                </div>
                <hr>
                <div class="content">
                    {{ $article->content }}
                </div>
            </div>
            <div class="sidebar">
                <div class="caption">Автор</div>
                <div class="author_info">
                    <div>{{ $article->author->name}} {{ $article->author->surname}}</div>
                </div>
                <hr>

                @if(count($article->tags) != 0)
                    <div class="caption">Теги</div>
                    <div class="indicators">
                        @foreach ($article->tags as $tag)
                            <div id="indicator">{{ $tag->title }}</div>
                        @endforeach
                    </div>
                    <hr>
                @endif

                <div class="info">
                    <div>Опубликовано: {{ $article->created_at->format('d.m.Y h:m') }}</div>
                    <div>Категория: {{ $article->category->category }}</div>
                    <div>Рейтинг: {{ $article->rating }}</div>
                </div>
                <hr>
                @if(count($article->Co_authors) != 0)
                    <div>
                        <div class="caption">With the help of:</div>
                        @foreach ($article->Co_authors as $coa)
                            <div><a href="{{ route('user', $coa->id) }}">{{ $coa->login }}</a></div>
                        @endforeach
                    </div>
                    <hr>
                @endif
                <div class="download">
                    <a href="{{ route('download', $article->id) }}">Загрузить файл</a>
                </div>
            </div>
        </div>
        <footer>
            Powered by Laravel 10
        </footer>
    </main>
@endsection
