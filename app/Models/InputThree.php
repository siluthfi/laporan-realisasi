<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputThree extends Model
{
    use HasFactory;

    public function InputOne()
    {
        return $this->belongsTo(InputOne::class);
    }
}
