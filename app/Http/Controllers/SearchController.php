<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class SearchController extends Controller
{
    public function index(Request $request){
        $req = $request->validate([
            'user_request' => 'string',
        ]);
        $input = $req['user_request'];
        $articles = Article::get('title');

        $response = Article::all();
        $i = 0;
        $shortest = -1;
        foreach ($articles as $word) {
            $lev = levenshtein($input, $word);
            $response[$i]['suitability'] = $lev;
            $i++;
        }

        $response = $response->sortBy('suitability');
        return view('search.index', compact('response', 'input'));
    }
}
