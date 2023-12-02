<?php

namespace App\Models;

use App\Models\User;
use App\Models\Story;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StoryLike extends Model
{
    use HasFactory;
    protected $table = 'story_likes';
    protected $fillable = ['id_user','id_story'];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    public function stories()
    {
        return $this->belongsTo(Story::class, 'id_story', 'id');
    }
}
