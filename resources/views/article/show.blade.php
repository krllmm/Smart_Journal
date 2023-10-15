@extends('layouts.main')
@section('title')
    Article {{ $article->id }}
@endsection

@section('content')
    <div>Article {{ $article->id }}</div>
@endsection
