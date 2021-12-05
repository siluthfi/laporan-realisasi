<?php

namespace App\Models;

use App\Models\OneInput;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ThreeInput extends Model
{
    use HasFactory;

    public function OneInput()
    {
        return $this->belongsTo(OneInput::class);
    }
}
