<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Article;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        $articles = Article::where('user_id', $user->id)->get();
        return view('profile.index', compact('user', 'articles'));
    }

    public function user(User $user){
        return view('profile.show', compact('user'));
    }

    public function edit(User $user){
        return view('profile.edit', compact('user'));
    }
}
