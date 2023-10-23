<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('tag.index', compact('tags'));
    }

    public function create()
    {
        return view('tag.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'title' => 'string',
        ]);

        Tag::create($data);
        return redirect()->route('tag.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Tag $tag)
    {
        return view('tag.edit', compact('tag'));
    }

    public function update(Request $request, Tag $tag)
    {
        $data = request()->validate([
            'title' => 'string',
        ]);

        $tag->update($data);
        return redirect()->route('tag.index');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tag.index');
    }
}
