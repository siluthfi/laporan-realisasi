<?php

namespace App\Models;

use App\Models\OneInput;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class TwoInput extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'volume_capaian',
        'uraian',
        'nomor_dokumen',
        'tanggal',
    ];

    public function OneInput()
    {
        return $this->belongsTo(OneInput::class, 'one_input_id');
    }

}
