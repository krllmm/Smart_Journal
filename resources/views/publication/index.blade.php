@extends('layouts.main')
@section('title')
    Your publications
@endsection

@section('content')
    your articles

    @if(count($articles) == 0)
        <div>
            Oops, looks like you haven`t got any articles done
        </div>
        <div>
            <a href="{{ route('article.create') }}">Create article</a>
        </div>
    @else
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

    @endif

@endsection
