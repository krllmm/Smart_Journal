<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    <link rel="stylesheet" href="{{ asset('layouts/main.css') }}">

    <script src="{{ asset('build/assets/app.js') }}" defer></script>

    <title>Main layout</title>
</head>
<body>
    <div class="root_container container-fluid col-12 p-0 m-0">
        <div class="row top_row">
            <div class="menu_icon p-0 ">
                <svg width="48" height="48" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4 5a1 1 0 0 0 0 2h16a1 1 0 1 0 0-2H4zm-1 7a1 1 0 0 1 1-1h16a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1zm0 6a1 1 0 0 1 1-1h16a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1z" fill="#000"/>
                </svg>
            </div>
            <div class="search_bar">
                Search by
            </div>
            <div class="page_title">
                Test title
            </div>
            <div class="user_info">
                user
            </div>
        </div>
        <div class="row bottom_row">
            <div class="container main">
                content
            </div>
        </div>
    </div>
</body>
</html>
