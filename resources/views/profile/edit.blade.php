<link rel="stylesheet" href="{{ asset('_profile/edit.css') }}">
@extends('layouts.main')
@section('title')
    Editing {{ $user->login }}
@endsection

@section('content')

    <form class="info" action="{{ route('update_profile', $user->id) }}" method="POST">
        @csrf

        <div>
            <label for="name">Name</label>
            <input name="name" type="text" autocomplete="off" placeholder="Your name" value="{{ $user->name }}" class="input">
        </div>

        <div>
            <label for="surname">Surname</label>
            <input name="surname" type="text" autocomplete="off" placeholder="Your surname" value="{{ $user->surname }}" class="input">
        </div>

        <div>
            <label for="email">Email address</label>
            <input name="email" type="email" autocomplete="off" placeholder="{{ $user->name }}&#64;gmail.com" class="input">
        </div>

        <div>
            <label for="bio">About me</label>
            <textarea rows="12" name="bio" autocomplete="off"></textarea>
        </div>

        <div>
            <label for="country">Country</label>
            <input name="country" type="text" autocomplete="off" placeholder="Your current location" class="input">
        </div>

        <div>
            <label for="birth">Date of birth</label>
            <input name="birth" type="date" autocomplete="off" class="input">
        </div>

        <label class="social_label">Links to your accounts on social media</label>
        <div class="socials">
            <input name="social" type="text" autocomplete="off" class="input">
            <input name="social" type="text" autocomplete="off" class="input">
            <input name="social" type="text" autocomplete="off" class="input">
            <input name="social" type="text" autocomplete="off" class="input">
        </div>

        <div>
            <button type="submit" class="save"><span>Save</span></button>
        </div>

    </form>

    <footer>
        Powered by Laravel 10
    </footer>
@endsection
