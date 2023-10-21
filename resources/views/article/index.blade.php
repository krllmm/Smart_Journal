@extends('layouts.main')
@section('title')
    Articles
@endsection

@section('content')
    <div>Articles</div>
    <a href="{{ route('article.create') }}">create article</a>
    @foreach ($articles as $a)
        <div>
            {{ $a->title }}
        </div>
        <div>
            <a href="{{ route('article.show', $a->id) }}">more</a>
        </div>
        <div>
            <a href="{{ route('article.edit', $a->id) }}">edit</a>
        </div>
        <form action="{{ route('article.destroy', $a->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">delete</button>
        </form>
    @endforeach
@endsection
