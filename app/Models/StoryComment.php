<?php

namespace App\Models;

use App\Models\User;
use App\Models\Story;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StoryComment extends Model
{
    use HasFactory;
    protected $table = 'story_comments';
    protected $fillable = ['id_user','id_story','content'];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    public function stories()
    {
        return $this->belongsTo(Story::class, 'id_story', 'id');
    }
}
