<?php

namespace App\Models;

use App\Models\StoryLike;
use App\Models\StoryComment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Story extends Model
{
    use HasFactory;
    protected $table = 'stories';
    protected $fillable = ['id_user','audio','title','description','image','view'];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    public function storyComment()
    {
        return $this->hasMany(StoryComment::class, 'id_story', 'id');
    }
    public function storyLike()
    {
        return $this->hasMany(StoryLike::class, 'id_story', 'id');
    }
}
