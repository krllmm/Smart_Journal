<link href="{{ asset('_article/create.css') }}" rel="stylesheet">
@extends('layouts.main')
@section('title')
    Создать новую статью
@endsection

@section('content')
    <div class="header">Новая статья</div>

    <form class="info" action="{{ route('article.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">Заголовок</label>
            <input name="title" type="text" autocomplete="off" placeholder="Введите заголовок" class="input">
        </div>

        <div>
            @if ($errors->has('title'))
                <span class="error">{{ $errors->first('title') }}</span>
            @endif
        </div>

        <div>
            <label for="content">Основная часть</label>
            <textarea rows="26" name="content" autocomplete="off" placeholder="Введите основную часть статьи" class="input"></textarea>
        </div>

        <div>
            @if ($errors->has('content'))
                <span class="error">{{ $errors->first('content') }}</span>
            @endif
        </div>

        <div>
            <label for="deadline">Дедлайн</label>
            <input name="deadline" type="date" autocomplete="off" class="input">
        </div>

        <div>
            @if ($errors->has('deadline'))
                <span class="error">{{ $errors->first('deadline') }}</span>
            @endif
        </div>

        <div>
            <label for="status">Статус</label>
            <select type="text" name="status" class="select">
                <option>To-do</option>
                <option>In progress</option>
                <option>Done</option>
                <option>Delayed</option>
            </select>
        </div>

        <div>
            <label for="category_id">Категория</label>
            <select type="text" name="category_id" placeholder="Выберите категорию" class="select">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="tag_id">Теги (минимум 1)</label>
            <select multiple type="text" name="tags[]" placeholder="Выберите теги" class="select select_tags">
                @foreach ($tags as $tag)
                    <option class="tag" value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
            </select>
        </div>

        <div>
            @if ($errors->has('tags'))
                <span class="error">{{ $errors->first('tags') }}</span>
            @endif
        </div>

        <div>
            <button type="submit" class="create"><span>Создать</span></button>
        </div>

    </form>

    <footer>
        Powered by Laravel 10
    </footer>
@endsection
