<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Propiedad extends Model
{
    use HasFactory;

    protected $table = 'propiedades';

    protected $fillable = [
        'productor_id',
        'lugar',
        'tipo_tenencia',
        'superficie'
    ];

    public function Productor():BelongsTo{
        return $this->belongsTo(Productor::class);
    }
}
