<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Patente extends Model
{
    use HasFactory;

    protected $fillable = [
        'productor_id','imagen','foja','libro'
    ];

    public function productor():BelongsTo{
        return $this->belongsTo(Productor::class);
    }
}
