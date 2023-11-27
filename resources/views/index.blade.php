<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Smart Journal</title>
</head>
<body>

    <header>
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
            <div class="container">
                <img src="{{ asset("images/stack-of-books.png") }}">
                <div>
                    <div class="headline">Discover</div>
                    <div class="line">Follow new ideas</div>
                    <div class="buttons">
                        <ul>
                            <li>
                                <a href="{{ route('login') }}">Login</a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}">Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <article>
            <div>article</div>
        </article>

        {{--<summary>
            summary
        </summary> --}}
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
