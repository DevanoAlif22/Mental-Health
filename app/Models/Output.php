<?php

namespace App\Models;

use App\Models\Indication;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Output extends Model
{
    use HasFactory;
    protected $table = 'outputs';
    public function indications()
    {
        return $this->hasMany(Indication::class, 'id_output', 'id');
    }
}
