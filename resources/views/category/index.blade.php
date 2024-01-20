<link rel="stylesheet" href="{{ asset('_category/index.css') }}">
@extends('layouts.main')
@section('title')
    Категории
@endsection

@section('content')
    <h1>Категории</h1>
    <div class="create_category">
        <a href="{{ route('category.create') }}">Создать категорию</a>
    </div>
    @foreach ($categories as $a)
        <div>
            <span>{{ $a->category }}</span> : {{ count($a->articles) }} использований
        </div>
        <div class="actions">
            <div class="edit_button">
                <a href="{{ route('category.edit', $a->id) }}">Изменить</a>
            </div>
            <form action="{{ route('category.destroy', $a->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="delete_button">Удалить</button>
            </form>
        </div>

    @endforeach
@endsection
