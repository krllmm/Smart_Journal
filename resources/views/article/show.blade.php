@extends('layouts.main')
@section('title')
    Article {{ $article->id }}
@endsection

@section('content')
    <div>Article {{ $article->id }}</div>
    <div>id in database: {{ $article->id }}</div>
    <div>title: {{ $article->title }}</div>
    <div>content: {{ $article->content}}</div>
    <div>category: {{ $article->category->category }}</div>
    <div>
        Status: {{ $article->status }}
    </div>

    <div>original author: {{ $article->author->login }}</div>
    <div><br>tags:
        @foreach ($article->tags as $tag)
            <p>{{ $tag->title }}</p>
        @endforeach
    </div>

    <div>co authors:
        @foreach ($article->Co_authors as $coa)
            <div><a href="{{ route('user', $coa->id) }}">{{ $coa->login }}</a></div>
        @endforeach
    </div>

    <div>
        --------------
    </div>
    <div>
        <a href="{{ route('article.edit', $article->id) }}">edit</a>
    </div>
    <div>
        --------------
    </div>
    <div>
        <a href="{{ route('download', $article->id) }}">download</a> .docx file
    </div>
    <div>
        --------------
    </div>
    <div>history:
        @foreach ($article->history as $history)
            <div>{{ $history->content }}, {{ $history->created_at }}</div>
        @endforeach
    </div>
@endsection
