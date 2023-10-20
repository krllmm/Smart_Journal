<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Article;

class PublicationController extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        $articles = Article::where('user_id', 'id')->get();

        return view('publication.index', compact('articles'));
    }
}
