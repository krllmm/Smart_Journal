<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    <link rel="stylesheet" href="{{ asset('layouts/main.css') }}">

    <script src="{{ asset('build/assets/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

    <title>SJ - @yield('title')</title>
</head>
<body>
    <div class="root_container container-fluid col-12 p-0 m-0">
        <div class="row top_row">
            <div class="menu_icon p-0">
                <button onclick="show_dropdown()">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none">
                        <path d="M4 5a1 1 0 0 0 0 2h16a1 1 0 1 0 0-2H4zm-1 7a1 1 0 0 1 1-1h16a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1zm0 6a1 1 0 0 1 1-1h16a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1z" fill="#000"/>
                    </svg>
                </button>

                <div id="dropdown">
                    <ul>
                        <li>
                            <svg width="42" height="42" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.31 1.776a1 1 0 0 1 1.38 0l8 7.619 2.5 2.38a1 1 0 0 1-1.38 1.45l-.81-.773V20a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7.548l-.81.772a1 1 0 1 1-1.38-1.448l2.5-2.381 8-7.62zM5 10.548V20h4v-5a3 3 0 1 1 6 0v5h4v-9.452L12 3.88l-7 6.667zM13 20v-5a1 1 0 1 0-2 0v5h2z" fill="#000"/>
                            </svg>
                            <a href="#" class="drop_item">Profile</a>
                        </li>
                        <li>
                            <svg width="42" height="42" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5 4a1 1 0 0 1 1-1v18a1 1 0 0 1-1-1V4zm3 17V3h11v18H8zm-1 2H6a3 3 0 0 1-3-3V4a3 3 0 0 1 3-3h13a2 2 0 0 1 2 2v18a2 2 0 0 1-2 2H7z" fill="#000"/>
                            </svg>
                            <a href="#" class="drop_item">Articles</a>
                        </li>
                        <li>
                            <svg width="42" height="42" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.293 1.293A1 1 0 0 1 10 1h8a3 3 0 0 1 3 3v16a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V8a1 1 0 0 1 .293-.707l6-6zM18 3h-7v5a1 1 0 0 1-1 1H5v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM6.414 7H9V4.414L6.414 7zM7 13a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1zm0 4a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1z" fill="#000"/>
                            </svg>
                            <a href="#" class="drop_item">My work</a>
                        </li>
                        <li>
                            <svg width="42" height="42" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 2a1 1 0 0 0-1 1v1.582a7.992 7.992 0 0 0-1.923 1.112l-1.371-.792a1 1 0 0 0-1.366.366l-2 3.464a1 1 0 0 0 .366 1.366l1.37.791a8.062 8.062 0 0 0 0 2.222l-1.37.79a1 1 0 0 0-.366 1.367l2 3.464a1 1 0 0 0 1.366.366l1.371-.792c.581.455 1.228.83 1.923 1.112V21a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-1.582a7.994 7.994 0 0 0 1.923-1.112l1.371.792a1 1 0 0 0 1.366-.366l2-3.464a1 1 0 0 0-.366-1.366l-1.37-.791a8.063 8.063 0 0 0 0-2.222l1.37-.79a1 1 0 0 0 .366-1.367l-2-3.464a1 1 0 0 0-1.366-.366l-1.371.792A7.993 7.993 0 0 0 15 4.582V3a1 1 0 0 0-1-1h-4zm1 3.29V4h2v1.29a1 1 0 0 0 .715.958 5.993 5.993 0 0 1 2.407 1.392 1 1 0 0 0 1.188.14l1.118-.646 1 1.732-1.117.645a1 1 0 0 0-.473 1.097 6.02 6.02 0 0 1 0 2.784 1 1 0 0 0 .473 1.097l1.117.645-1 1.732-1.119-.646a1 1 0 0 0-1.187.14 5.991 5.991 0 0 1-2.407 1.392 1 1 0 0 0-.715.958V20h-2v-1.29a1 1 0 0 0-.715-.958 5.992 5.992 0 0 1-2.407-1.392 1 1 0 0 0-1.188-.14l-1.118.646-1-1.732 1.117-.645a1 1 0 0 0 .473-1.097 6.02 6.02 0 0 1 0-2.784 1 1 0 0 0-.473-1.097l-1.117-.645 1-1.732 1.118.646a1 1 0 0 0 1.188-.14 5.993 5.993 0 0 1 2.407-1.392A1 1 0 0 0 11 5.29zM10 12a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm2-4a4 4 0 1 0 0 8 4 4 0 0 0 0-8z" fill="#000"/>
                            </svg>
                            <a href="#" class="drop_item">Settings</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="search_bar">
                Search articles
            </div>
            <div class="page_title">
                Your cabinet
            </div>
            <div class="user_info">
                Username
                <div class="avatar">
                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAHsAewMBIgACEQEDEQH/xAAbAAEAAwEBAQEAAAAAAAAAAAAAAwQFAgYBB//EADQQAAICAQIDBQYEBwEAAAAAAAABAgMEESEFMUESEyJRcTJCYYGRsRQjUsEzYnKSotHwFf/EABQBAQAAAAAAAAAAAAAAAAAAAAD/xAAUEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwD9xAAA+N6EeRkV49bnY9F0XVmFmZ9uS2l4K/0p8/UDUyeJ0U6qGtkvKPL6mdbxXIs17HZrXwWrKIAknfdP27rH6yI3rqAB1Gc4+zOUf6XoWKs/Kr5WuS8pblUAbFHF4va+vs/zR3X0NKq2u6PaqkpLzR5UkptspmpVScWB6kFDA4jDJ0hZpC3y6S9C+AAAAiyb4Y9Tsm9l0XVkjeh57iOU8m9pP8uG0fj8QIsrIsybe3Y/SPSJCAAAAAAAAAAAAH1bPVczb4Xnd+u6tf5kVs37yMM+xk4SUoNqSeqfkB6wFfCyFk0RmtnykvJlgCjxa/ucZwi/FZ4V6dTAL3GLe3mdjXaCS+fMogAAAANDh+IppXWrVe7F/cCtTiXXJOMdIv3pbFj/AMyen8WP0NIAZFuDfBapKa/l/wBFX1PQlXNxFdFzgtLF/kBkAAAAAL3CL+5yuw34LNvn0N88mm4tNbNbpnqKZ97VCa96KYHmsiXbyLZec39yMdQAAAHVcO8tjDzaRvqKjFRWyS0SMPEemVVr+pG4AAAAAAY3EIKvKlpyl4iuXOKtfiI/0fuymAAAA2cDL7vEri1y1+5jPkdRm0tEAsXZtnH9MmjktcSr7vNsXST7S+ZVAAAAm1JOPNcjeotV1UZrr9zBJ8XJljy23g+cQNoEdN9Vy1rkm/LqiQAG1FNt6Jc2cznCuPanJRXxZmZub335deqh1b6gQZNnfXzn0b29CIAAAADL2LiuyiM9Hvr9yiemwa+6xKoPn2dX89wKPHKdYQuS9nwv06f98TIPU3VxuqlXNeGS0Z5m6qVNsq5reLAjAJcemd9nZht5vyQHNdc7ZqNcXJmhTw2C0d0nJ/pXIt00woh2K1ovPzOwOK6aq/YrivkdgAczrrs9uEZeqKl3Dqpb1Nwf1RdAGFdRZRLSxaeT6MjN+yELIOFi1i+hkZeM8ee28H7L/YCuAAJ8Kl35UIaeHXWXoj0xncHxnTU7Zrx2cvgjRAFDieF+Ir7cP4keXxXkXwB5Npp6NPXXkbWJQqKVH3nvJ/EmvwK7L43x2knq10kOXPmAAAAAAAAAOLqo3VShLk1z8mdgDAsi65yhJbp6F3hmE8ixWWL8qL/uZas4d+IyY2SekNPEurNKEIwgowSUVskgOgAAAAA5lBS5nQAryqlHlucFs+NJ81qBUBNOEUtkRMD4CSEU+aJowilskBXjCUuSJYVJbvdkoAAAAAAP/9k=" />
                </div>
            </div>
        </div>
        <div class="row bottom_row">
            <div class="container main">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
