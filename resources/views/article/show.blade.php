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

    <div>original author: {{ $article->author->login }}</div>
    <div><br>tags:
        @foreach ($article->tags as $tag)
            <p>{{ $tag->title }}</p>
        @endforeach
    </div>

    {{-- <div>co authors:
        @foreach ($article->Co_authors as $coa)
            <p>{{ $coa->login }}</p>
        @endforeach
    </div> --}}
@endsection
