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

            <div class="form_container">
                <form action="{{ route('sign_in') }}">
                    @csrf
                    <div>
                        <label>Login</label>
                        <input type="text" name="login" required>
                    </div>

                    <div>
                        <label>Password</label>
                        <input type="password" name="password" required>
                    </div>

                    <div class="remember">
                        <label for="remember_me">Remember me</label>
                        <input type="checkbox" name="remember_me">
                    </div>

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
