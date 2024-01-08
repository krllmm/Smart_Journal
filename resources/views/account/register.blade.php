<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('_account/register.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <title>Регистрация</title>
</head>
<body>
    <div class="login_card">

        <div class="header">
            Smart Journal
        </div>
        <div class="header">
            Создать аккаунт
        </div>

        <form action="{{ route('create_account') }}" method="POST">
            @csrf
            <div class="field">
                <label>Имя</label>
                <input type="text" name="name" class="text" required>
            </div>

            <div class="field">
                <label>Фамилия</label>
                <input type="text" name="surname" class="text" required>
            </div>
            <div class="field">
                <label>Логин</label>
                <input type="text" name="login" class="text" required>
            </div>

            <div class="field">
                <label>Пароль</label>
                <input type="password" name="password" class="text" required>
            </div>
            <button type="submit">Создать</button>
        </form>

        <div class="link">
            Уже есть аккаунт? <a href="{{ route('login') }}">Войти</a>
        </div>

    </div>
</body>
</html>

