<link rel="stylesheet" href="{{ asset('_profile/style.css') }}">
@extends('layouts.main')
@section('title')
    {{ $user->login }}
@endsection

@section('content')
    <div class="main_container">
        <div class="first_row">
            <div class="top_left_container">

                <div class="profile_picture">
                    <img src="{{ $user->profile_picture }}" alt="your profile picture"/>
                </div>

                <div class="buttons">
                    <a href="{{ route('profile.edit', $user->id) }}">
                        <button class="button">
                            Edit profile
                        </button>
                    </a>

                    <a href="{{ route('logout') }}">
                        <button class="button">
                            Logout
                        </button>
                    </a>
                </div>

            </div>
            <div class="top_right_container">
                <div class="name">
                    <h1>{{ $user->name }} {{ $user->surname}}</h1>
                </div>
                <div>
                    <h3>Popular articles</h3>

                        <table>
                            <thead>
                                <tr class="head">
                                    <th class="column1">Title</th>
                                    {{-- <th class="column2">Content</th> --}}
                                    <th class="column3">Deadline</th>
                                    <th class="column4">Category</th>
                                    <th class="column5">Tags</th>
                                    <th class="column6">Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($articles as $article)
                                <tr>
                                    <td>
                                        {{ $article->title }}
                                        <a href="{{ route('article.edit', $article->id) }}">
                                            <svg id="edit_icon" width="14" height="14" viewBox="0 0 24 24">
                                                <path fill="#fff" d="M 19.171875 2 C 18.448125 2 17.724375 2.275625 17.171875 2.828125 L 16 4 L 20 8 L 21.171875 6.828125 C 22.275875 5.724125 22.275875 3.933125 21.171875 2.828125 C 20.619375 2.275625 19.895625 2 19.171875 2 z M 14.5 5.5 L 3 17 L 3 21 L 7 21 L 18.5 9.5 L 14.5 5.5 z"></path>
                                            </svg>
                                        </a>
                                    </td>
                                    {{-- <td>{{ $article->content }}</td> --}}
                                    <td>{{ $article->deadline }}</td>
                                    <td>{{ $article->category->category }}</td>
                                    <td>
                                        @foreach ($article->tags as $tag)
                                            {{ $tag->title }},
                                        @endforeach
                                    </td>
                                    <td>{{ $article->status }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                </div>
                <div>
                    <h3>Your activity</h3>

                        <table>
                            <thead>
                                <tr class="head">
                                    <th class="column1">Title</th>
                                    {{-- <th class="column2">Content</th> --}}
                                    <th class="column3">Deadline</th>
                                    <th class="column4">Category</th>
                                    <th class="column5">Tags</th>
                                    <th class="column6">Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                {{-- @foreach($projects as $project)
                                <tr>
                                    <td>
                                        {{ $project->title }}
                                        @if(Auth::check())
                                            <a href="{{ route('project.edit', $project->id) }}">
                                                <svg id="edit_icon" width="14" height="14" viewBox="0 0 24 24">
                                                    <path fill="#fff" d="M 19.171875 2 C 18.448125 2 17.724375 2.275625 17.171875 2.828125 L 16 4 L 20 8 L 21.171875 6.828125 C 22.275875 5.724125 22.275875 3.933125 21.171875 2.828125 C 20.619375 2.275625 19.895625 2 19.171875 2 z M 14.5 5.5 L 3 17 L 3 21 L 7 21 L 18.5 9.5 L 14.5 5.5 z"></path>
                                                </svg>
                                            </a>
                                        @endif
                                    </td>
                                    <td>{{ $project->description }}</td>
                                    <td>{{ $project->deadline }}</td>
                                    <td>{{ $project->worker->name }}</td>
                                    <td>{{ $project->client->name }}</td>
                                    <td>{{ $project->status }}</td>
                                </tr>
                                @endforeach --}}
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>
@endsection
