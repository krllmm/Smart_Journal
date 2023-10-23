@extends('layouts.main')
@section('title')
    Tags - create
@endsection

@section('content')
    <div>Create tag</div>

    <form action="{{ route('tag.store') }}" method="POST">
        @csrf
        <label for="title"></label>
        <input type="text" placeholder="tag name" name="title">
        <div>
            <button type="submit">create</button>
        </div>
    </form>
@endsection
