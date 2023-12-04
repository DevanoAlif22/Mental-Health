<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    use HasFactory;
    protected $table = 'followers';
    protected $fillable = ['id_user','id_follow'];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
