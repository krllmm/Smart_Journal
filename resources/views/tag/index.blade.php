<link rel="stylesheet" href="{{ asset('_tags/index.css') }}">
@extends('layouts.main')
@section('title')
    Теги
@endsection

@section('content')
    <h1>Теги</h1>
    <div class="create_tag">
        <a href="{{ route('tag.create') }}">Создать новый тег</a>
    </div>
    @foreach ($tags as $a)
        <div>
            <span>{{ $a->title }}</span> : {{ count($a->articles) }} использований
        </div>
        <div class="actions">

            <div class="edit_button">
                <a href="{{ route('tag.edit', $a->id) }}">Изменить</a>
            </div>
            <form action="{{ route('tag.destroy', $a->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="delete_button">Удалить</button>
            </form>

        </div>
    @endforeach
@endsection
