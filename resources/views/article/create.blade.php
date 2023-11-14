<link href="{{ asset('_article/create.css') }}" rel="stylesheet">
@extends('layouts.main')
@section('title')
    Articles - create
@endsection

@section('content')
    <div class="header">Create new article</div>

    <form class="info" action="{{ route('article.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">Article title</label>
            <input name="title" type="text" autocomplete="off" placeholder="Enter article`s title">
        </div>

        <div>
            <label for="content">Content</label>
            <textarea rows="12" name="content" autocomplete="off" placeholder="Enter article`s body here"></textarea>
        </div>

        <div>
            <label for="deadline">Deadline</label>
            <input name="deadline" type="date" autocomplete="off">
        </div>

        <div>
            <label for="status">Status</label>
            <select type="text" name="status" placeholder="Status">
                <option>To-do</option>
                <option>In progress</option>
                <option>Done</option>
                <option>Delayed</option>
            </select>
        </div>

        <div>
            <label for="category_id">Category</label>
            <select type="text" name="category_id" placeholder="Choose a category">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="tag_id">Tags</label>
            <select multiple type="text" name="tags[]" placeholder="Choose tags">
                @foreach ($tags as $tag)
                    <option class="tag" value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <button type="submit" class="create"><span>Create</span></button>
        </div>

    </form>

    <footer>
        Powered by Laravel 10
    </footer>
@endsection
