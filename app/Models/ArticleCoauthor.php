<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCoauthor extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $table = 'article_coauthors';
}
