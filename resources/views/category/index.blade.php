@extends('layouts.main')
@section('title')
    Categories
@endsection

@section('content')
    <div>Categories</div>
    <a href="{{ route('category.create') }}">create category</a>
    @foreach ($categories as $a)
        <div>
            {{ $a->category }} : {{ count($a->articles) }}
        </div>
        <div>
            <a href="{{ route('category.edit', $a->id) }}">edit</a>
        </div>
        <form action="{{ route('category.destroy', $a->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">delete</button>
        </form>
    @endforeach
@endsection
