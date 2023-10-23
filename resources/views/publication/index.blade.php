@extends('layouts.main')
@section('title')
    Your publications
@endsection

@section('content')
    your articles

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
