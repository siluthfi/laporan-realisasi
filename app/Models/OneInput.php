<?php

namespace App\Models;

use App\Models\TwoInput;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use OwenIt\Auditing\Models\Audit;

class OneInput extends Model {
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function TwoInput()
    {
        return $this->hasMany(TwoInput::class, 'one_input_id');
    }
}
