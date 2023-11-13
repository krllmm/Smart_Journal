<link href="{{ asset('_publication/index.css') }}" rel="stylesheet">
@extends('layouts.main')
@section('title')
    Your publications
@endsection

@section('content')
    <div class="content-container">
        <div class="head">My articles</div>

            @if (count($articles) == 0)
                <div>
                    Oops, looks like you haven`t got any articles done
                </div>
                <div>
                    <a href="{{ route('article.create') }}">Create article</a>
                </div>
            @else
                <div>
                    You already wrote {{ count($articles) }} articles!
                </div>

                <div class="indicators">
                    <div id="indicator">
                        By rating
                    </div>
                    <div id="indicator">
                        Changed
                    </div>
                    <div id="indicator">
                        Oldest
                    </div>
                    <div id="indicator">
                        Latest
                    </div>
                </div>

                @foreach ($articles as $article)
                    <div class="article_card">
                        <div class="card_info">
                            <a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a>
                            <div class="options">
                                <div id="date">{{ $article->category->category }} <span>&#x2022;</span>
                                    {{ $article->created_at->format('d.m.Y') }} <span>&#x2022;</span>
                                    {{ $article->rating }} points</div>
                                <a href="{{ route('article.edit', $article->id) }}">
                                    <div>Edit</div>
                                </a>
                                <form action="{{ route('article.destroy', $article->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"><div>Delete</div></button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
        <footer>
            Powered by Laravel 10
        </footer>
    </div>
@endsection
