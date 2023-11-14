<link rel="stylesheet" href="{{ asset('_article/edit.css') }}">
@extends('layouts.main')
@section('title')
    Articles - edit
@endsection

@section('content')

    <div class="header">Update article by {{ $article->author->name }} {{ $article->author->surname }}</div>

    <form class="info" action="{{ route('article.update', $article->id) }}" method="POST">
        @csrf
        @method('patch')

        @if (Auth::user()->id == $article->author->id)
            <div>
                <label for="title">Article title</label>
                <input name="title" type="text" autocomplete="off" placeholder="Enter article`s title"
                    value="{{ $article->title }}">
            </div>

            <div>
                <label for="content">Content</label>
                <textarea rows="12" name="content" autocomplete="off" placeholder="Enter article`s body here"
                    value="{{ $article->content }}"></textarea>
            </div>

            <div>
                <label for="deadline">Deadline</label>
                <input name="deadline" type="date" autocomplete="off" value="{{ $article->deadline }}">
            </div>

            <div>
                <label for="status">Status</label>
                <select type="text" name="status" placeholder="Status">
                    @foreach ($statuses as $status)
                        <option {{ $status === $article->status ? ' selected' : '' }} value="{{ $status }}">
                            {{ $status }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="category_id">Category</label>
                <select type="text" name="category_id" placeholder="Choose a category">
                    @foreach ($categories as $category)
                        <option {{ $category->id === $article->category->id ? ' selected' : '' }}
                            value="{{ $category->id }}"> {{ $category->category }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="tag_id">Tags</label>
                <select multiple type="text" name="tags[]" placeholder="Choose tags">
                    @foreach ($tags as $tag)
                        <option
                            @foreach ($article->tags as $articleTag)
                            {{ $tag->id === $articleTag->id ? ' selected' : '' }} @endforeach
                            value="{{ $tag->id }}"> {{ $tag->title }}</option>
                    @endforeach
                </select>
            </div>
        @else
            <div>
                {{ $article->title }}
            </div>

            <div>
                <label for="content">Content</label>
                <textarea rows="12" name="content" autocomplete="off" placeholder="Enter article`s body here">{{ $article->content }}</textarea>
            </div>

            <div>
                <label for="comment">Comment</label>
                <input name="comment" type="text" autocomplete="off" placeholder="Your comment">
            </div>
        @endif

        <div>
            <button type="submit" class="update"><span>Update</span></button>
        </div>
    </form>

    <footer>
        Powered by Laravel 10
    </footer>
@endsection
