<?php

namespace App\Models;

use App\Models\InputOne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InputTwo extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function InputOne()
    {
        return $this->belongsTo(InputOne::class);
    }

}
