<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleLike extends Model
{
    use HasFactory;
    protected $table = 'article_likes';
    protected $fillable = ['id_user','id_article'];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    public function articles()
    {
        return $this->belongsTo(Article::class, 'id_article', 'id');
    }
}
