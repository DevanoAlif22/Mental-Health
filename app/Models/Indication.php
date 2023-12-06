<?php

namespace App\Models;

use App\Models\Output;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Indication extends Model
{
    use HasFactory;
    protected $table = 'indications';

    public function outputs()
    {
        return $this->belongsTo(Output::class, 'id_output', 'id');
    }
}
