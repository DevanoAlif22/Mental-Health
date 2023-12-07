<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Story;
use App\Models\Profile;
use App\Models\Follower;
use App\Models\ArticleLike;
use App\Models\Transaction;
use App\Models\ArticleComments;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'verify_key',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profiles()
    {
        return $this->hasOne(Profile::class, 'id_user', 'id');
    }
    public function followers()
    {
        return $this->hasOne(Follower::class, 'id_user', 'id');
    }
    public function articles()
    {
        return $this->hasMany(Article::class, 'id_user', 'id');
    }
    public function commentArticle()
    {
        return $this->hasMany(ArticleComments::class, 'id_user', 'id');
    }
    public function articleLike()
    {
        return $this->hasMany(ArticleLike::class, 'id_user', 'id');
    }
    public function stories()
    {
        return $this->hasMany(Story::class, 'id_user', 'id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'id_user', 'id');
    }
}
