<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function Co_authors(){
        return $this->belongsToMany(User::class, 'article_coauthor', 'article_id', 'user_id');
    }

    public function history(){
        return $this->hasMany(ArticleHistory::class);
    }

    public function scopeRecentActivity(Builder $query): void
    {
        $date = Carbon::now();
        $date->subDays(14);
        $query->whereDate('created_at', '>', $date)
              ->orWhere('updated_at', '>', $date)
              ->orderBy('created_at', 'desc')
              ->orderBy('updated_at', 'desc');
    }
}
