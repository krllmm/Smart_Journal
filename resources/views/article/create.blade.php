@extends('layouts.main')
@section('title')
    Articles - create
@endsection

@section('content')
    <div>Create article</div>

    <form action="{{ route('article.store') }}" method="POST">
        @csrf
        <label for="title">Article title</label>
        <input name="title" type="text" autocomplete="off" placeholder="Enter article`s title">

        <label for="content">Content</label>
        <input name="content" type="text" autocomplete="off" placeholder="Enter article`s body here">

        <label for="status">Status</label>
        <select type="text" name="status" placeholder="Status">
            <option>To-do</option>
            <option>In progress</option>
            <option>Done</option>
            <option>Delayed</option>
        </select>

        <label for="deadline">Deadline</label>
        <input name="deadline" type="date" autocomplete="off">

        <label for="category_id">Category</label>
        <select type="text" name="category_id" placeholder="Choose a category">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category }}</option>
            @endforeach
        </select>

        <label for="tag_id">Tags</label>
        <select multiple type="text" name="tags[]" placeholder="Choose tags">
            @foreach ($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->title }}</option>
            @endforeach
        </select>

      <div>
          <button type="submit"><span>Create</span></button>
      </div>
    </form>

@endsection
