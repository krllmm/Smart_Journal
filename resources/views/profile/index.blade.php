@extends('layouts.main')
@section('title')
    {{ $user->login }}
@endsection

@section('content')
    your profile page

    <a href="{{ route('logout') }}">log out</a>
@endsection
