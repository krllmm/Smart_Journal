@extends('layouts.main')
@section('title')
    Tags
@endsection

@section('content')
    <div> Tags</div>
    <a href="{{ route('tag.create') }}">create tag</a>
    @foreach ($tags as $a)
        <div>
            {{ $a->title }} : {{ count($a->articles) }}
        </div>
        <div>
            <a href="{{ route('tag.edit', $a->id) }}">edit</a>
        </div>
        <form action="{{ route('tag.destroy', $a->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">delete</button>
        </form>
    @endforeach
@endsection
