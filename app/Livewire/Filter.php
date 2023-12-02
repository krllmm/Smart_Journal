<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class Filter extends Component
{

    public $prop;
    public $way;

    public function sortByRating(){
        $this->prop = 'rating';
        $this->way = 'desc';
    }

    public function Latest(){
        $this->prop = 'created_at';
        $this->way = 'desc';
    }

    public function Oldest(){
        $this->prop = 'created_at';
        $this->way = 'asc';
    }

    public function render()
    {
        $this->prop ? $articles = Article::orderBy($this->prop, $this->way)->paginate(10) : $articles = Article::paginate(10);
        return view('livewire.filter', compact('articles'));
    }
}
