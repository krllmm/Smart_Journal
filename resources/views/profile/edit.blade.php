<link rel="stylesheet" href="{{ asset('_profile/edit.css') }}">
@extends('layouts.main')
@section('title')
   Изменение {{ $user->login }}
@endsection

@section('content')

    <form class="info" action="{{ route('update_profile', $user->id) }}" method="POST">
        @csrf

        <div>
            <label for="name">Имя</label>
            <input name="name" type="text" autocomplete="off" placeholder="Ваше имя" value="{{ $user->name }}" class="input">
        </div>

        <div>
            <label for="surname">Фамилия</label>
            <input name="surname" type="text" autocomplete="off" placeholder="Ваша фамилия" value="{{ $user->surname }}" class="input">
        </div>

        <div>
            <label for="email">Электронная почта</label>
            <input name="email" type="email" autocomplete="off" placeholder="{{ $user->name }}&#64;gmail.com" class="input">
        </div>

        <div>
            <label for="bio">О себе</label>
            <textarea rows="12" name="bio" autocomplete="off"></textarea>
        </div>

        <div>
            <label for="country">Местоположение</label>
            <input name="country" type="text" autocomplete="off" placeholder="Где вы сейчас находитесь?" class="input">
        </div>

        <div>
            <label for="birth">Дата рождения</label>
            <input name="birth" type="date" autocomplete="off" class="input">
        </div>

        <label class="social_label">Социальные сети</label>
        <div class="socials">
            <input name="social" type="text" autocomplete="off" class="input">
            <input name="social" type="text" autocomplete="off" class="input">
            <input name="social" type="text" autocomplete="off" class="input">
            <input name="social" type="text" autocomplete="off" class="input">
        </div>

        <div>
            <button type="submit" class="save"><span>Сохранить</span></button>
        </div>

    </form>

    <footer>
        Powered by Laravel 10
    </footer>
@endsection
