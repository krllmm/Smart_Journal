<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Carter+One">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Smart Journal</title>
</head>
<body>

    <header>
        <img src="{{ asset('images/header.jpg') }}">
        <nav>
            <ul>
                <li>
                    <a href="#" class="logo">Smart Journal</a>
                </li>
                <li>
                    <a href="{{ route('login') }}">Login</a>
                </li>
                <li>
                    <a href="{{ route('register') }}">Register</a>
                </li>
                @if (Auth::check())
                    <li>
                        <a href="{{ route('profile') }}">{{ Auth::user()->login }}</a>
                    </li>
                @endif
            </ul>
        </nav>
    </header>

    <main>
        <section>
            section
        </section>

        <article>
            article
        </article>

        <summary>
            summary
        </summary>
    </main>

    <footer>
        <div>
            <div class="bottom_logo">
                Smart Journal
            </div>
            <div class="subscribe">
                <form>
                    <input type="text" placeholder="Your Email">
                    <button type="submit">Subscribe</button>
                </form>
            </div>
            <div class="socials">
                <ul>
                    <li>facebook</li>
                    <li>telegram</li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>
