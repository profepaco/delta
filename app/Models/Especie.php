<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Especie extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','descripcion'];

    public function ganado():HasMany{
        return $this->hasMany(Ganado::class);
    }
    
}
