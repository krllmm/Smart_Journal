<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('_account/login.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <title>Войти в аккаунт</title>
</head>
<body>
    <div class="login_card">

        <div class="header">
            Smart Jounral
        </div>

        <form action="{{ route('sign_in') }}">
            @csrf
            <div class="field">
                <label>Логин</label>
                <input type="text" name="login" required class="text">
            </div>
            @if (Session::has('login'))
                <div class="error">{{ Session::get('login') }}</div>
            @endif

            <div class="field">
                <label>Пароль</label>
                <input type="password" name="password" required class="text">
            </div>
            @if (Session::has('password'))
                <div class="error">{{ Session::get('password') }}</div>
            @endif

            <div class="remember">
                <label for="remember_me">Запомнить меня</label>
                <input type="checkbox" name="remember_me" class="checkbox" checked>
            </div>

            <button type="submit">Войти</button>
        </form>

        <div class="link">
            Нет аккаунта? <a href="{{ route('register') }}">Зарегистрировать</a>
        </div>

    </div>
</body>
</html>
