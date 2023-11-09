<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Article;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        $articles = Article::where('user_id', $user->id)->get();
        $events = [];

        foreach($articles as $article){

            switch($article->status){
                case "To-do":
                    $color = 'rgba(255, 0, 0, .5)';
                    break;
                case "Done":
                    $color = 'rgba(0, 255, 0, .5)';
                    break;
                case "In progress":
                    $color = 'rgba(255, 255, 0, .5)';
                    break;
                case "Delayed":
                    $color = 'rgba(0, 0, 255, .5)';
                    break;
                case "Changed":
                    $color = 'rgba(0, 255, 255, .5)';
                    break;
                case "Approved":
                    $color = 'rgba(255, 0, 255, .5)';
                    break;
            }

            $events[] = [
                'title' => $article->title,
                'start' => $article->deadline,
                'backgroundColor' => $color,
            ];
        }

        $data = [
            'events' => $events
        ];

        //возвращает 5 самых популярных статей авторизованного пользователя
        $popular_articles = Article::where('user_id', $user->id)->orderBy('rating', 'desc')->limit(5)->get();

        //возвращает активность за последние 2 недели
        $recent_articles = Article::where('user_id', $user->id)->RecentActivity()->get();

        //возвращает статьи пользователя, которые были изменены другими пользователями
        $changed_articles = Article::where('user_id', $user->id)->where('status', 'Changed')->get();

        return view('profile.index', compact('user', 'popular_articles', 'recent_articles', 'changed_articles'), $data);
    }

    public function user(User $user){
        return view('profile.show', compact('user'));
    }

    public function edit(User $user){
        return view('profile.edit', compact('user'));
    }
}
