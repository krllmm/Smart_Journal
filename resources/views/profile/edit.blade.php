<link rel="stylesheet" href="{{ asset('_profile/style.css') }}">
@extends('layouts.main')
@section('title')
    Editing {{ $user->login }}
@endsection

@section('content')

    fill new info, {{ $user->name }}

@endsection
