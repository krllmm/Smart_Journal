<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ArticleHistory;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        return  view('article.index');
    }

    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('article.create', compact('tags', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'string|required|max:255',
            'content' => 'string|required',
            'status' => '',
            'deadline' => 'date|required',
            'category_id' => '',
            'tags' => '',
        ], [
            'title' => 'Title field cannot be empty',
            'content'  => 'Content field cannot be empty',
            'dealine' => 'Deadline date field cannot be empty'
        ]);

        $data = $request->all();
        $tags = $data['tags'];
        unset($data['tags']);

        $user = Auth::user();
        $userId = $user->id;

        $data['user_id'] = $userId;

        $article = Article::create($data);
        $article->tags()->attach($tags);

        return redirect()->route('article.index');
    }

    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    public function edit(Article $article)
    {
        $statuses = [
            'To-do',
            'In progress',
            'Done',
            'Delayed'
        ];

        $tags = Tag::all();
        $categories = Category::all();
        return view('article.edit', compact('article', 'tags', 'categories', 'statuses'));
    }

    public function update(Request $request, Article $article)
    {
        $user = Auth::user();
        $userId = $user->id;

        if($article->author->id == $userId){
            $request->validate([
                'title' => 'string',
                'content' => 'string',
                'status' => '',
                'deadline' => 'date',
                'category_id' => '',
                'tags' => '',
            ]);

            $data = $request->all();
            $tags = $data['tags'];
            unset($data['tags']);

            $article->update($data);
            $article->tags()->sync($tags);
        }else{
            $data = $request->validate([
                'content' => 'string',
                'comment' => 'string',
            ]);

            $data['status'] = $article->status;
            $data['article_id'] = $article->id;
            $data['user_id'] = $userId;

            $article->Co_authors()->attach($userId);
            $newStatus = [
                'status' => 'Changed'
            ];
            $article->update($newStatus);

            ArticleHistory::create($data);
        }

        return redirect()->route('article.show', $article->id);
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('article.index');
    }
}
