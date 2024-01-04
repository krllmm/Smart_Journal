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
                    <img src="{{ $user->profile_picture }}" alt="Ваш аватар"/>
                </div>

                <div class="buttons">
                    <a href="{{ route('profile.edit', $user->id) }}">
                        <button class="button">
                            Редактировать
                        </button>
                    </a>

                    <a href="{{ route('logout') }}">
                        <button class="button">
                            Выйти
                        </button>
                    </a>
                </div>

            </div>
            <div class="top_right_container">
                <div class="name">
                    <h1>{{ $user->name }} {{ $user->surname}}</h1>
                </div>
                <div>
                    <h2>Популярные статьи</h2>

                        <table class="article_table">
                            <thead class="thead">
                                <tr class="tr_head">
                                    <th class="column1">Заголовок</th>
                                    <th class="column3">Время работы</th>
                                    <th class="column4">Категория</th>
                                    <th class="column5">Теги</th>
                                    <th class="column6">Статус</th>
                                    <th class="column7">Рейтинг</th>
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
                    <h2>Последняя активность</h2>
                    @if(count($recent_articles) != 0)
                        <table class="article_table">
                            <thead class="thead">
                                <tr class="tr_head">
                                    <th class="column1">Заголовок</th>
                                    <th class="column2">Время работы</th>
                                    <th class="column3">Категория</th>
                                    <th class="column4">Теги</th>
                                    <th class="column5">Статус</th>
                                    <th class="column6">Создана</th>
                                    <th class="column7">Последнее изменение</th>
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
                                                @if(count($article->tags) <= 2)
                                                    @foreach ($article->tags as $tag)
                                                        <div id="tag">
                                                            {{ $tag->title }}
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <span id="tag">
                                                        {{ $article->tags[0]->title }}
                                                    </span>
                                                    <span id="tag">
                                                        ...
                                                    </span>
                                                @endif
                                            </div>
                                        </td>
                                        <td class="td">{{ $article->status }}</td>
                                        <td class="td">{{ $article->created_at->format('Y-m-d') }}</td>
                                        @if ($article->created_at == $article->updated_at)
                                            <td class="td">Не изменялась</td>
                                        @else
                                            <td class="td">{{ $article->updated_at->format('Y-m-d') }}</td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="recent">За последнее время вы ничего не сделали(</div>
                    @endif

                </div>

                <div>
                    <h2>Календарь времени работы</h2>
                    <div class="indicators">
                        <div id="indicator">
                            <div class="red"></div>
                            Необходимо сделать
                        </div>
                        <div id="indicator">
                            <div class="green"></div>
                            Готов
                        </div>
                        <div id="indicator">
                            <div class="yellow"></div>
                            В процессе
                        </div>
                        <div id="indicator">
                            <div class="blue"></div>
                            Перенесен
                        </div>
                    </div>
                    <div id='calendar'></div>
                </div>

            </div>
        </div>

        <footer>
            Создано с помощью Laravel 10
        </footer>
    </div>
@endsection
