@extends('layouts.main')
@section('title')
    Categories - edit
@endsection

@section('content')
    <div>edit category {{ $category->category }}</div>

    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @csrf
        @method('patch')
        <label for="category"></label>
        <input type="text" placeholder="Category name" name="category" value="{{ $category->category }}">
        <div>
            <button type="submit">update</button>
        </div>
    </form>
@endsection
