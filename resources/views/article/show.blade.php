<link rel="stylesheet" href="{{ asset('_article/show.css') }}">
@extends('layouts.main')
@section('title')
    Article {{ $article->id }}
@endsection

@section('content')
    <div class="details">
        @if (Auth::user()->id == $article->author->id)
            <div class="header">
                {{ $article->title }}
            </div>

            <div class="indicators">
                @foreach ($article->tags as $tag)
                    <div id="indicator">{{ $tag->title }}</div>
                @endforeach
            </div>

            <div id="date">{{ $article->created_at->format('d.m.Y') }} <span>&#x2022;</span>
                           {{ $article->category->category }} <span>&#x2022;</span>
                           {{ $article->rating }} points
            </div>
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
            <div>
                <a href="{{ route('download', $article->id) }}">download</a> .docx file
            </div>

            {{-- <div>history:
            @foreach ($article->history as $history)
                <div>{{ $history->content }}, {{ $history->created_at }}</div>
            @endforeach
        </div> --}}
        @else

        @endif
    </div>

    <footer>
        Powered by Laravel 10
    </footer>

@endsection
