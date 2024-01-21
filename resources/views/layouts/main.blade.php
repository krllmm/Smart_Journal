<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    <link rel="stylesheet" href="{{ asset('layouts/main.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.png') }}">

    <script src="{{ asset('build/assets/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

    <title>@yield('title')</title>
</head>
<body>
    <div class="root_container">
        <header>
            <div class="header-start">
                <button onclick="show_dropdown()" class="button_start">
                    <svg aria-hidden="true" height="24" viewBox="0 0 16 16" width="24" data-view-component="true">
                        <path d="M1 2.75A.75.75 0 0 1 1.75 2h12.5a.75.75 0 0 1 0 1.5H1.75A.75.75 0 0 1 1 2.75Zm0 5A.75.75 0 0 1 1.75 7h12.5a.75.75 0 0 1 0 1.5H1.75A.75.75 0 0 1 1 7.75ZM1.75 12h12.5a.75.75 0 0 1 0 1.5H1.75a.75.75 0 0 1 0-1.5Z" fill="#000000bf"></path>
                    </svg>
                </button>

                <div id="dropdown">
                    <ul>
                        <li>
                            <svg width="50" height="50" viewBox="0 0 25 25" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 9a4 4 0 1 1 8 0 4 4 0 0 1-8 0zm7.824 4.623a6 6 0 1 0-7.649 0C4.986 14.746 3 17.247 3 20a1 1 0 1 0 2 0c0-2.27 2.355-5 7-5s7 2.73 7 5a1 1 0 1 0 2 0c0-2.753-1.984-5.254-5.176-6.377z" fill="#000000bf"/>
                            </svg>
                            <a href="{{ route('profile') }}" class="drop_item">Профиль</a>
                        </li>
                        <li>
                            <svg width="50" height="50" viewBox="0 0 25 25" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5 4a1 1 0 0 1 1-1v18a1 1 0 0 1-1-1V4zm3 17V3h11v18H8zm-1 2H6a3 3 0 0 1-3-3V4a3 3 0 0 1 3-3h13a2 2 0 0 1 2 2v18a2 2 0 0 1-2 2H7z" fill="#000000bf"/>
                            </svg>
                            <a href="{{ route('article.index') }}" class="drop_item">Каталог</a>
                        </li>
                        <li>
                            <svg width="50" height="50" viewBox="0 0 25 25" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.293 1.293A1 1 0 0 1 10 1h8a3 3 0 0 1 3 3v16a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V8a1 1 0 0 1 .293-.707l6-6zM18 3h-7v5a1 1 0 0 1-1 1H5v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM6.414 7H9V4.414L6.414 7zM7 13a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1zm0 4a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1z" fill="#000000bf"/>
                            </svg>
                            <a href="{{ route('publication') }}" class="drop_item">Мои статьи</a>
                        </li>
                        @if(Auth::user()->role_id == 1)
                            <li>
                                <svg width="50" height="50" viewBox="0 0 25 25" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.221 10.778c.018-3.645 2.99-6.618 6.636-6.635a6.504 6.504 0 0 1 6.551 6.551 6.634 6.634 0 0 1-.223 1.677 1 1 0 0 0 .264.97l1.046 1.032-2.025 2.025-1.806 1.806-.206.206-1.043-1.044a1 1 0 0 0-.965-.26 6.63 6.63 0 0 1-1.677.224 6.504 6.504 0 0 1-6.552-6.552zm8.986 9.201a1.98 1.98 0 0 0 1.815.356l1.695 1.477.278.25a3.65 3.65 0 0 0 5.832-1.354 3.672 3.672 0 0 0-.679-3.825l-.732-.811-.995-1.137a1.98 1.98 0 0 0-.356-1.813 1.008 1.008 0 0 0-.075-.084l-.74-.73c.102-.52.156-1.056.158-1.604a8.504 8.504 0 0 0-8.56-8.561c-4.743.023-8.603 3.883-8.627 8.625a8.504 8.504 0 0 0 8.562 8.562 8.656 8.656 0 0 0 1.609-.159l.737.737a.999.999 0 0 0 .079.071zm6.84.906a1.65 1.65 0 0 1-1.261-.018l1.946-2.562c.368.465.462 1.1.238 1.658a1.657 1.657 0 0 1-.924.922zm-3.476-1.81l.945.839 2.124-2.937-.813-.93-2.256 3.028z" fill="#000000bf"/>
                                </svg>
                                <a href="{{ route('category.index') }}" class="drop_item">Категории</a>
                            </li>
                            <li>
                                <svg width="50" height="50" viewBox="0 0 25 25" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.222 11.293a5 5 0 1 1 7.07-7.071l7.072 7.07a3 3 0 1 1-4.243 4.244l-7.07-7.072A1 1 0 1 1 8.463 7.05l7.072 7.071a1 1 0 0 0 1.414-1.414L9.879 5.636a3 3 0 0 0-4.243 4.243l8.485 8.485a3 3 0 0 0 5.02-1.344 1 1 0 0 1 1.932.517 5 5 0 0 1-8.366 2.242l-8.485-8.486z" fill="#000000bf"/>
                                </svg>
                                <a href="{{ route('tag.index') }}" class="drop_item">Теги</a>
                            </li>
                        @endif
                    </ul>
                </div>

                <div class="search_bar">
                    <form action="{{ route('search') }}" method="GET">
                        <input type="text" placeholder="Поиск статей" name="user_request" class="search">
                        <button type="submit" class="button_start">
                            <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm-7 5a7 7 0 1 1 12.606 4.192l5.101 5.1a1 1 0 0 1-1.414 1.415l-5.1-5.1A7 7 0 0 1 3 10z" fill="#000000bf"/></svg>
                        </button>
                    </form>
                </div>
            </div>

            <div class="header-end">
                <a href="{{ route('article.create') }}">
                    <button class="button_end">
                        <svg aria-hidden="true" height="24" viewBox="0 0 24 24" version="1.1" width="24" data-view-component="true">
                            <path d="M18,1h-8C9.7,1,9.5,1.1,9.3,1.3l-6,6C3.1,7.5,3,7.7,3,8v12c0,1.7,1.3,3,3,3h12c1.7,0,3-1.3,3-3V4C21,2.3,19.7,1,18,1z M9,4.4V7H6.4L9,4.4z M19,20c0,0.6-0.4,1-1,1H6c-0.6,0-1-0.4-1-1V9h5c0.6,0,1-0.4,1-1V3h7c0.6,0,1,0.4,1,1V20z" fill="#000000bf"/>
                            <path d="M11.2,10.8l0,6.4c0,0.4,0.4,0.8,0.8,0.8c0.4,0,0.8-0.4,0.8-0.8l0-6.4c0-0.4-0.4-0.8-0.8-0.8C11.6,10,11.2,10.4,11.2,10.8z" fill="#000000bf"/>
                            <path d="M15.2,13.2H8.8C8.4,13.2,8,13.6,8,14c0,0.4,0.4,0.8,0.8,0.8h6.4c0.4,0,0.8-0.4,0.8-0.8C16,13.6,15.6,13.2,15.2,13.2z" fill="#000000bf"/>
                        </svg>
                    </button>
                </a>

                @if(Request::is('profile'))
                    <button open-message-box class="button_end">
                        <svg aria-hidden="true" height="24" viewBox="0 0 24 24" version="1.1" width="24" data-view-component="true">
                            <path d="M2.544 5.168A2.777 2.777 0 0 1 4.8 4h14.4c.936 0 1.753.47 2.256 1.168.343.478.544 1.067.544 1.699v10.266C22 18.682 20.78 20 19.2 20H4.8C3.22 20 2 18.682 2 17.133V6.867c0-.632.2-1.221.544-1.7zM4.933 6l6.327 6.965a1 1 0 0 0 1.48 0L19.067 6H4.933zM20 7.948l-5.78 6.362a3 3 0 0 1-4.44 0L4 7.948v9.185c0 .514.392.867.8.867h14.4c.408 0 .8-.353.8-.867V7.948z" fill="#000000bf"/>
                        </svg>
                    </button>

                    <dialog>
                        <div class="head">Почта</div>
                            @if (count($changed_articles) != 0)
                                @foreach ($changed_articles as $article)
                                    <div>
                                        {{ $article->title }} <strong> была изменена </strong>

                                        @foreach ($article->history as $history)
                                            <span> {{ $history->created_at }} </span>
                                            <strong> пользователем </strong>
                                            <span> {{ $history->user_id }} </span>
                                        @endforeach

                                    </div>
                                @endforeach
                            @else
                                <div class="empty">Ваша почта пуста</div>
                            @endif
                        <button class="close_button" close-message-box>Выйти</button>
                    </dialog>

                    <button open-trash-box class="button_end">
                        <svg aria-hidden="true" height="24" viewBox="0 0 24 24" width="24" data-view-component="true">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9 5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v1h4a1 1 0 1 1 0 2h-1v10a3 3 0 0 1-3 3H9a3 3 0 0 1-3-3V8H5a1 1 0 0 1 0-2h4V5zm1 3H8v10a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V8h-6zm3-2h-2V5h2v1zm-3 3a1 1 0 0 1 1 1v7a1 1 0 1 1-2 0v-7a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v7a1 1 0 1 1-2 0v-7a1 1 0 0 1 1-1z" fill="#000000bf"/>
                        </svg>
                    </button>

                    <dialog class="trashcan">
                        <div class="head">Корзина</div>

                            @if (count($deleted_articles) != 0)
                                @foreach ($deleted_articles as $article)
                                    <div>
                                        {{ $article->title }} <strong> была удалена </strong>
                                        {{ $article->deleted_at }}
                                    </div>
                                @endforeach
                            @else
                                <div class="empty">Ваша корзина пуста</div>
                            @endif

                        <button close-trash-box class="close_button">Выйти</button>
                    </dialog>
                @endif

                <a href="{{ route('profile') }}" class="profile_name"> {{ Auth::user()->name }} {{ Auth::user()->surname}} </a>

                <img src="{{ asset('images/default_profile.png') }}"/>

            </div>

        </header>

        <div class="row bottom_row">
            <div class="container main">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
