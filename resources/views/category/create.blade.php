@extends('layouts.main')
@section('title')
    Categories - create
@endsection

@section('content')
    <div>Create category</div>

    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <label for="category"></label>
        <input type="text" placeholder="Category name" name="category">
        <div>
            <button type="submit">create</button>
        </div>
    </form>
@endsection
