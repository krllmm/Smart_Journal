<link rel="stylesheet" href="{{ asset('_article/edit.css') }}">
@extends('layouts.main')
@section('title')
    Редактирование статьи
@endsection

@section('content')

    <div class="header">Редактировать "{{ $article->title }}"</div>

    <form class="info" action="{{ route('article.update', $article->id) }}" method="POST">
        @csrf
        @method('patch')

        @if (Auth::user()->id == $article->author->id)
            <div>
                <label for="title">Заголовок</label>
                <input name="title" type="text" autocomplete="off" placeholder="Введите заголовок"
                    value="{{ $article->title }}" class="input">
            </div>

            <div>
                <label for="content">Основная часть</label>
                <textarea rows="26" name="content" autocomplete="off" placeholder="Введите основную часть" class="input">{{ $article->content }}</textarea>
            </div>

            <div>
                <label for="deadline">Дедлайн</label>
                <input name="deadline" type="date" autocomplete="off" value="{{ $article->deadline }}" class="input">
            </div>

            <div>
                <label for="status">Статус</label>
                <select type="text" name="status" class="select">
                    @foreach ($statuses as $status)
                        <option {{ $status === $article->status ? ' selected' : '' }} value="{{ $status }}">
                            {{ $status }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="category_id">Категория</label>
                <select type="text" name="category_id" class="select select_category">
                    @foreach ($categories as $category)
                        <option {{ $category->id === $article->category->id ? ' selected' : '' }}
                            value="{{ $category->id }}"> {{ $category->category }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="tag_id">Теги (минимум 1)</label>
                <select multiple type="text" name="tags[]" class="select select_tags">
                    @foreach ($tags as $tag)
                        <option
                            @foreach ($article->tags as $articleTag)
                            {{ $tag->id === $articleTag->id ? ' selected' : '' }} @endforeach
                            value="{{ $tag->id }}"> {{ $tag->title }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                @if ($errors->has('tags'))
                    <span class="error">{{ $errors->first('tags') }}</span>
                @endif
            </div>
        @else
            <div>
                <label for="content">Основная часть</label>
                <textarea rows="36" name="content" autocomplete="off" placeholder="Enter article`s body here" class="input textarea-content">{{ $article->content }}</textarea>
            </div>

            <div>
                <label for="comment">Комментарий</label>
                <textarea name="comment" type="text" autocomplete="off" placeholder="Введите комментарий" class="input textarea-comment"></textarea>
            </div>
        @endif

        <div>
            <button type="submit" class="update"><span>Отправить</span></button>
        </div>
    </form>

    <footer>
        Powered by Laravel 10
    </footer>
@endsection
