<link rel="stylesheet" href="{{ asset('_article/show.css') }}">
@extends('layouts.main')
@section('title')
    {{ $article->title }}
@endsection

@section('content')
    <main>
        <div class="show_container">
            <div class="details">
                {{-- @if (Auth::user()->id == $article->author->id) --}}
                <div class="header">
                    {{ $article->title }}
                </div>

                {{-- <div class="indicators">
                    @foreach ($article->tags as $tag)
                        <div id="indicator">{{ $tag->title }}</div>
                    @endforeach
                </div>

                <div id="date">{{ $article->created_at->format('d.m.Y') }} <span>&#x2022;</span>
                            {{ $article->category->category }} <span>&#x2022;</span>
                            {{ $article->rating }} points
                </div> --}}
                <hr>



                <div class="content">
                    {{ $article->content }}
                </div>

                {{-- <div>
                Status: {{ $article->status }}
            </div> --}}


                {{-- <div>co authors:
                @foreach ($article->Co_authors as $coa)
                    <div><a href="{{ route('user', $coa->id) }}">{{ $coa->login }}</a></div>
                @endforeach
            </div> --}}

                {{-- <div>
                    <a href="{{ route('download', $article->id) }}">download</a> .docx file
                </div> --}}

                {{-- <div>history:
                @foreach ($article->history as $history)
                    <div>{{ $history->content }}, {{ $history->created_at }}</div>
                @endforeach
            </div> --}}
                {{-- @else --}}

                {{-- @endif --}}
            </div>

            <div class="sidebar">
                <div class="caption">Author</div>
                <div class="author_info">
                    <div>{{ $article->author->name}} {{ $article->author->surname}}</div>
                </div>
                <hr>

                <div class="caption">Tags</div>
                <div class="indicators">
                    @foreach ($article->tags as $tag)
                        <div id="indicator">{{ $tag->title }}</div>
                    @endforeach
                </div>
                <hr>

                <div class="info">
                    <div>Posted: {{ $article->created_at->format('d.m.Y h:m') }}</div>
                    <div>Category: {{ $article->category->category }}</div>
                    <div>Rating: {{ $article->rating }}</div>
                </div>
                <hr>

                <div>
                    <div class="caption">With the help of:</div>
                    @foreach ($article->Co_authors as $coa)
                        <div><a href="{{ route('user', $coa->id) }}">{{ $coa->login }}</a></div>
                    @endforeach
                </div>
                <hr>

                <div class="download">
                    <a href="{{ route('download', $article->id) }}">Download file</a>
                </div>
            </div>
        </div>
        </div>

        <footer>
            Powered by Laravel 10
        </footer>

    </main>
@endsection
