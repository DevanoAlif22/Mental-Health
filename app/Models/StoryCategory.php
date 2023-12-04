<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StoryCategory extends Model
{
    use HasFactory;
    protected $fillable = ['id','name'];

    public function category()
    {
        return $this->hasMany(Category::class, 'id_story_category', 'id');
    }
}
