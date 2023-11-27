<link rel="stylesheet" href="{{ asset('_profile/style.css') }}">

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events: @json($events)
        });
        calendar.render();
    });
</script>

@extends('layouts.main')
@section('title')
    {{ $user->login }}
@endsection

@section('content')
    <div class="main_container">
        <div class="first_row">
            <div class="top_left_container">

                <div class="profile_picture">
                    <img src="{{ $user->profile_picture }}" alt="your profile picture"/>
                </div>

                <div class="buttons">
                    <a href="{{ route('profile.edit', $user->id) }}">
                        <button class="button">
                            Edit profile
                        </button>
                    </a>

                    <a href="{{ route('logout') }}">
                        <button class="button">
                            Logout
                        </button>
                    </a>
                </div>

            </div>
            <div class="top_right_container">
                <div class="name">
                    <h1>{{ $user->name }} {{ $user->surname}}</h1>
                </div>
                <div>
                    <h2>Popular articles</h2>

                        <table class="article_table">
                            <thead class="thead">
                                <tr class="tr_head">
                                    <th class="column1">Title</th>
                                    <th class="column3">Deadline</th>
                                    <th class="column4">Category</th>
                                    <th class="column5">Tags</th>
                                    <th class="column6">Status</th>
                                    <th class="column7">Rating</th>
                                </tr>
                            </thead>

                            <tbody class="tbody">
                                @foreach($popular_articles as $article)
                                    <tr class="tr">
                                        <td class="td td_title">{{ $article->title }}</td>
                                        <td class="td">{{ $article->deadline }}</td>
                                        <td class="td">{{ $article->category->category }}</td>
                                        <td class="td">
                                            <div class="tags">
                                                @foreach ($article->tags as $tag)
                                                    <div id="tag">
                                                        {{ $tag->title }}
                                                    </div>
                                                @endforeach
                                            </div>
                                        </td>
                                        <td class="td">{{ $article->status }}</td>
                                        <td class="td">{{ $article->rating }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                </div>
                <div>
                    <h2>Your recent activity(2 weeks)</h2>
                    @if(count($recent_articles) != 0)
                        <table class="article_table">
                            <thead class="thead">
                                <tr class="tr_head">
                                    <th class="column1">Title</th>
                                    <th class="column2">Deadline</th>
                                    <th class="column3">Category</th>
                                    <th class="column4">Tags</th>
                                    <th class="column5">Status</th>
                                    <th class="column6">Created at</th>
                                    <th class="column7">Last update</th>
                                </tr>
                            </thead>
                            <tbody class="tbody">
                                @foreach($recent_articles as $article)
                                    <tr class="tr">
                                        <td class="td td_title">{{ $article->title }}</td>
                                        <td class="td">{{ $article->deadline }}</td>
                                        <td class="td">{{ $article->category->category }}</td>
                                        <td class="td">
                                            <div class="tags">
                                                @foreach ($article->tags as $tag)
                                                    <div id="tag">
                                                        {{ $tag->title }}
                                                    </div>
                                                @endforeach
                                            </div>
                                        </td>
                                        <td class="td">{{ $article->status }}</td>
                                        <td class="td">{{ $article->created_at->format('Y-m-d') }}</td>
                                        @if ($article->created_at == $article->updated_at)
                                            <td class="td">Has`t been updated</td>
                                        @else
                                            <td class="td">{{ $article->updated_at->format('Y-m-d') }}</td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="recent">You have no recent activities</div>
                    @endif

                </div>

                <div>
                    <h2>Deadline calendar</h2>
                    <div class="indicators">
                        <div id="indicator">
                            <div class="red"></div>
                            To do
                        </div>
                        <div id="indicator">
                            <div class="green"></div>
                            Done
                        </div>
                        <div id="indicator">
                            <div class="yellow"></div>
                            In progress
                        </div>
                        <div id="indicator">
                            <div class="blue"></div>
                            Delayed
                        </div>
                    </div>
                    <div id='calendar'></div>
                </div>

            </div>
        </div>

        <footer>
            Powered by Laravel 10
        </footer>
    </div>
@endsection
