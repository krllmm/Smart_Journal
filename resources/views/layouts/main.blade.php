<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    <link rel="stylesheet" href="{{ asset('layouts/main.css') }}">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.png') }}">

    <script src="{{ asset('build/assets/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

    <title>@yield('title')</title>
</head>
<body>
    <div class="root_container">
        <header>
            <div class="header-start">
                <button onclick="show_dropdown()">
                    <svg aria-hidden="true" height="24" viewBox="0 0 16 16" version="1.1" width="24" data-view-component="true">
                        <path d="M1 2.75A.75.75 0 0 1 1.75 2h12.5a.75.75 0 0 1 0 1.5H1.75A.75.75 0 0 1 1 2.75Zm0 5A.75.75 0 0 1 1.75 7h12.5a.75.75 0 0 1 0 1.5H1.75A.75.75 0 0 1 1 7.75ZM1.75 12h12.5a.75.75 0 0 1 0 1.5H1.75a.75.75 0 0 1 0-1.5Z" fill="#656c76"></path>
                    </svg>
                </button>

                <div id="dropdown">
                    <ul>
                        <li>
                            <svg width="42" height="42" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 9a4 4 0 1 1 8 0 4 4 0 0 1-8 0zm7.824 4.623a6 6 0 1 0-7.649 0C4.986 14.746 3 17.247 3 20a1 1 0 1 0 2 0c0-2.27 2.355-5 7-5s7 2.73 7 5a1 1 0 1 0 2 0c0-2.753-1.984-5.254-5.176-6.377z" fill="#fff"/>
                            </svg>
                            <a href="{{ route('profile') }}" class="drop_item">Profile</a>
                        </li>
                        <li>
                            <svg width="42" height="42" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5 4a1 1 0 0 1 1-1v18a1 1 0 0 1-1-1V4zm3 17V3h11v18H8zm-1 2H6a3 3 0 0 1-3-3V4a3 3 0 0 1 3-3h13a2 2 0 0 1 2 2v18a2 2 0 0 1-2 2H7z" fill="#fff"/>
                            </svg>
                            <a href="{{ route('article.index') }}" class="drop_item">Articles</a>
                        </li>
                        <li>
                            <svg width="42" height="42" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.293 1.293A1 1 0 0 1 10 1h8a3 3 0 0 1 3 3v16a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V8a1 1 0 0 1 .293-.707l6-6zM18 3h-7v5a1 1 0 0 1-1 1H5v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM6.414 7H9V4.414L6.414 7zM7 13a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1zm0 4a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1z" fill="#fff"/>
                            </svg>
                            <a href="{{ route('publication') }}" class="drop_item">My work</a>
                        </li>
                        {{-- <li>
                            <svg width="42" height="42" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 2a1 1 0 0 0-1 1v1.582a7.992 7.992 0 0 0-1.923 1.112l-1.371-.792a1 1 0 0 0-1.366.366l-2 3.464a1 1 0 0 0 .366 1.366l1.37.791a8.062 8.062 0 0 0 0 2.222l-1.37.79a1 1 0 0 0-.366 1.367l2 3.464a1 1 0 0 0 1.366.366l1.371-.792c.581.455 1.228.83 1.923 1.112V21a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-1.582a7.994 7.994 0 0 0 1.923-1.112l1.371.792a1 1 0 0 0 1.366-.366l2-3.464a1 1 0 0 0-.366-1.366l-1.37-.791a8.063 8.063 0 0 0 0-2.222l1.37-.79a1 1 0 0 0 .366-1.367l-2-3.464a1 1 0 0 0-1.366-.366l-1.371.792A7.993 7.993 0 0 0 15 4.582V3a1 1 0 0 0-1-1h-4zm1 3.29V4h2v1.29a1 1 0 0 0 .715.958 5.993 5.993 0 0 1 2.407 1.392 1 1 0 0 0 1.188.14l1.118-.646 1 1.732-1.117.645a1 1 0 0 0-.473 1.097 6.02 6.02 0 0 1 0 2.784 1 1 0 0 0 .473 1.097l1.117.645-1 1.732-1.119-.646a1 1 0 0 0-1.187.14 5.991 5.991 0 0 1-2.407 1.392 1 1 0 0 0-.715.958V20h-2v-1.29a1 1 0 0 0-.715-.958 5.992 5.992 0 0 1-2.407-1.392 1 1 0 0 0-1.188-.14l-1.118.646-1-1.732 1.117-.645a1 1 0 0 0 .473-1.097 6.02 6.02 0 0 1 0-2.784 1 1 0 0 0-.473-1.097l-1.117-.645 1-1.732 1.118.646a1 1 0 0 0 1.188-.14 5.993 5.993 0 0 1 2.407-1.392A1 1 0 0 0 11 5.29zM10 12a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm2-4a4 4 0 1 0 0 8 4 4 0 0 0 0-8z" fill="#fff"/>
                            </svg>
                            <a href="{{ route('settings') }}" class="drop_item">Settings</a>
                        </li> --}}
                        @if(Auth::user()->role_id == 1)
                            <li>
                                <a href="{{ route('category.index') }}" class="drop_item">Categories</a>
                            </li>
                            <li>
                                <a href="{{ route('tag.index') }}" class="drop_item">Tags</a>
                            </li>
                        @endif
                    </ul>
                </div>

                <div class="search_bar">
                    <form action="{{ route('search') }}" method="GET">
                        <input type="text" placeholder="Search articles" name="user_request" class="search">
                        <button type="submit">
                            <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm-7 5a7 7 0 1 1 12.606 4.192l5.101 5.1a1 1 0 0 1-1.414 1.415l-5.1-5.1A7 7 0 0 1 3 10z" fill="#656c76"/></svg>
                        </button>
                    </form>
                </div>
            </div>

            <div class="header-end">
                <a href="{{ route('article.create') }}">
                    <button>
                        <svg aria-hidden="true" height="24" viewBox="0 0 24 24" version="1.1" width="24" data-view-component="true" >
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.293 1.293A1 1 0 0 1 10 1h8a3 3 0 0 1 3 3v16a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V8a1 1 0 0 1 .293-.707l6-6zM18 3h-7v5a1 1 0 0 1-1 1H5v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM6.414 7H9V4.414L6.414 7zM7 13a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1zm0 4a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1z" fill="#656c76"/>
                        </svg>
                    </button>
                </a>

                @if(Request::is('profile'))
                    <button open-message-box>
                        <svg aria-hidden="true" height="24" viewBox="0 0 24 24" version="1.1" width="24" data-view-component="true">
                            <path d="M2.544 5.168A2.777 2.777 0 0 1 4.8 4h14.4c.936 0 1.753.47 2.256 1.168.343.478.544 1.067.544 1.699v10.266C22 18.682 20.78 20 19.2 20H4.8C3.22 20 2 18.682 2 17.133V6.867c0-.632.2-1.221.544-1.7zM4.933 6l6.327 6.965a1 1 0 0 0 1.48 0L19.067 6H4.933zM20 7.948l-5.78 6.362a3 3 0 0 1-4.44 0L4 7.948v9.185c0 .514.392.867.8.867h14.4c.408 0 .8-.353.8-.867V7.948z" fill="#656c76"/>
                        </svg>
                    </button>

                    <dialog>
                        <div class="head">Mail box</div>

                            @if (count($changed_articles) != 0)
                                @foreach ($changed_articles as $article)
                                    <div>
                                        {{ $article->title }} <strong> was changed at </strong>

                                        @foreach ($article->history as $history)
                                            <span> {{ $history->created_at }} </span>
                                            <strong> by user </strong>
                                            <span> {{ $history->user_id }} </span>
                                        @endforeach

                                    </div>
                                @endforeach
                            @else
                                <div>Looks like your mail box is empty for now</div>
                            @endif

                        <button close-message-box>Close</button>
                    </dialog>

                    <button open-trash-box>
                        <svg aria-hidden="true" height="24" viewBox="0 0 24 24" version="1.1" width="24" data-view-component="true">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9 5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v1h4a1 1 0 1 1 0 2h-1v10a3 3 0 0 1-3 3H9a3 3 0 0 1-3-3V8H5a1 1 0 0 1 0-2h4V5zm1 3H8v10a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V8h-6zm3-2h-2V5h2v1zm-3 3a1 1 0 0 1 1 1v7a1 1 0 1 1-2 0v-7a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v7a1 1 0 1 1-2 0v-7a1 1 0 0 1 1-1z" fill="#656c76"/>
                        </svg>
                    </button>

                    <dialog class="trashcan">
                        <div class="head">Deleted articles</div>

                            @if (count($deleted_articles) != 0)
                                @foreach ($deleted_articles as $article)
                                    <div>
                                        {{ $article->title }} <strong> was deleted at </strong>
                                        {{ $article->deleted_at }}
                                    </div>
                                @endforeach
                            @else
                                <div>Looks like your trash can is empty</div>
                            @endif

                        <button close-trash-box>Close</button>
                    </dialog>
                @endif

                <a href="{{ route('profile') }}"> {{ Auth::user()->login }} </a>

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
