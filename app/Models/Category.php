<?php

namespace App\Models;

use App\Models\Story;
use App\Models\StoryCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['id','id_story_category','id_story'];

    public function storyCategory()
    {
        return $this->belongsTo(StoryCategory::class, 'id_story_category', 'id');
    }

    public function story()
    {
        return $this->belongsTo(Story::class, 'id_story', 'id');
    }
}
