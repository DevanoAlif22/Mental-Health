<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArticleComments extends Model
{
    use HasFactory;
    protected $table = 'article_comments';
    protected $fillable = ['id_user','id_article','content'];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    public function articles()
    {
        return $this->belongsTo(Article::class, 'id_article', 'id');
    }
}
