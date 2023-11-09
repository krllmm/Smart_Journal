<link href="{{ asset('_article/index.css') }}" rel="stylesheet">
@extends('layouts.main')
@section('title')
    Articles
@endsection

@section('content')
    <div class="content-container">
        <div class="head">Articles</div>

        @foreach ($articles as $article)
            <div class="article_card">
                {{-- <div>
                    {{ $article->title }}
                </div> --}}
                <div class="card_header">
                    <img src="{{ $article->author->profile_picture }}" alt="image not available">
                    <p>{{ $article->author->name }} {{ $article->author->surname }}</p>
                </div>
                <div>
                    <a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a>
                </div>
                {{-- <div>
                    <a href="{{ route('article.edit', $article->id) }}">edit</a>
                </div>
                <form action="{{ route('article.destroy', $article->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">delete</button>
                </form> --}}
            </div>
        @endforeach
    </div>
@endsection
