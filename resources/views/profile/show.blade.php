@extends('layouts.main')
@section('title')
    {{ $user->login }}
@endsection

@section('content')
    profile page {{ $user->login }}

    <div>
        {{ $user->name }}
    </div>

@endsection
