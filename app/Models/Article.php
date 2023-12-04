<?php

namespace App\Models;

use App\Models\User;
use App\Models\ArticleLike;
use App\Models\ArticleComments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';
    protected $fillable = ['id_user','title','content','image','view','image_path'];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    public function commentArticle()
    {
        return $this->hasMany(ArticleComments::class, 'id_article', 'id');
    }
    public function articleLike()
    {
        return $this->hasMany(ArticleLike::class, 'id_article', 'id');
    }
}
