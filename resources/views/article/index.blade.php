@extends('layouts.main')
@section('title')
    Articles
@endsection

@section('content')
    <div>Articles</div>
    @foreach ($articles as $a)
        <div>
            {{ $a->title }}
        </div>
        <div>
            <a href="{{ route('article.show', $a->id) }}">more</a>
        </div>
    @endforeach
@endsection
