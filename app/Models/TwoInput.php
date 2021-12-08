<?php

namespace App\Models;

use App\Models\OneInput;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TwoInput extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function OneInput()
    {
        return $this->belongsTo(OneInput::class);
    }

}
