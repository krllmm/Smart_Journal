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
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none">
                    <path d="M4 5a1 1 0 0 0 0 2h16a1 1 0 1 0 0-2H4zm-1 7a1 1 0 0 1 1-1h16a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1zm0 6a1 1 0 0 1 1-1h16a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1z" fill="#000"/>
                </svg>
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
                content
            </div>
        </div>
    </div>
</body>
</html>
