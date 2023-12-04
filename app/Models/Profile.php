<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profiles';
    protected $fillable = ['id_user','biodata','image','gender','age','view','image_path'];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
