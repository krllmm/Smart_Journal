<?php
namespace App\Livewire;

use Livewire\WithPagination;
use App\Models\Article;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Filter2 extends Component
{
    use WithPagination;

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
        $user = Auth::user();
        $this->prop
                ? $articles = Article::where('user_id', $user->id)->orderBy($this->prop, $this->way)->paginate(10)
                : $articles = Article::where('user_id', $user->id)->paginate(10);
        return view('livewire.filter', compact('articles'));
    }
}
