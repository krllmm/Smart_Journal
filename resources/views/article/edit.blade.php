@extends('layouts.main')
@section('title')
    Articles - edit
@endsection

@section('content')
    <div>Edit article {{ $article->id }}</div>

    <form action="{{ route('article.update', $article->id) }}" method="POST">
        @csrf
        @method('patch')

        @if(Auth::user()->id == $article->author->id)
            <label for="title">Article title</label>
            <input name="title" type="text" autocomplete="off" placeholder="Enter article`s title" value="{{ $article->title }}">

            <label for="content">Content</label>
            <input name="content" type="text" autocomplete="off" placeholder="Enter article`s body here" value="{{ $article->content }}">

            <label for="status">Status</label>
            <select type="text" name="status" placeholder="Status">
                @foreach ($statuses as $status)
                    <option {{ $status === $article->status ? ' selected' : '' }}
                            value="{{ $status }}">{{ $status }}</option>
                @endforeach
            </select>

            <label for="deadline">Deadline</label>
            <input name="deadline" type="date" autocomplete="off" value="{{ $article->deadline }}">

            <label for="category_id">Category</label>
            <select type="text" name="category_id" placeholder="Choose a category">
                @foreach ($categories as $category)
                    <option
                        {{ $category->id === $article->category->id ? ' selected' : '' }}
                        value="{{ $category->id }}"> {{ $category->category }}</option>
                @endforeach
            </select>

            <label for="tag_id">Tags</label>
            <select multiple type="text" name="tags[]" placeholder="Choose tags">
                @foreach ($tags as $tag)
                    <option
                        @foreach ($article->tags as $articleTag)
                            {{ $tag->id === $articleTag->id ? ' selected' : '' }}
                        @endforeach
                        value="{{ $tag->id }}"> {{ $tag->title }}</option>
                @endforeach
            </select>
        @else

            <div>
                {{ $article->title }}
            </div>

            <label for="content">Content</label>
            <input name="content" type="text" autocomplete="off" placeholder="Enter article`s body here" value="{{ $article->content }}">

            <label for="Comment">Comment</label>
            <input name="comment" type="text" autocomplete="off" placeholder="Enter comment">

        @endif

      <div>
          <button type="submit"><span>Update</span></button>
      </div>
    </form>

@endsection
