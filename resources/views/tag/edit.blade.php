@extends('layouts.main')
@section('title')
    Tags - edit
@endsection

@section('content')
    <div>edit tag {{ $tag->title }}</div>

    <form action="{{ route('tag.update', $tag->id) }}" method="POST">
        @csrf
        @method('patch')
        <label for="title"></label>
        <input type="text" placeholder="Tag name" name="title" value="{{ $tag->title }}">
        <div>
            <button type="submit">update</button>
        </div>
    </form>
@endsection
