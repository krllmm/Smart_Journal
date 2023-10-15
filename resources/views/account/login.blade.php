<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    <link rel="stylesheet" href="{{ asset('_account/login.css') }}">

    <script src="{{ asset('build/assets/app.js') }}" defer></script>

    <title>Login</title>
</head>
<body>
    <div class="login_card">
        <div class="login_form">
            <div class="header">
                Smart Jounral
            </div>
            <div class="header">
                Login
            </div>

            <div>
                <form action="{{ route('sign_in') }}">
                    @csrf
                    <label>Login</label>
                    <input type="text" name="login" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">log in</button>
                </form>
            </div>
        </div>
        <div class="login_image">
            <img src="{{ asset('images/bg.jpeg') }}"/>
        </div>
    </div>
</body>
</html>
