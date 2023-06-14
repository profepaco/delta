<?php

namespace App\Models;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';

    protected $fillable = ['nombre','descripcion'];

    public function productos():HasMany{
        return $this->hasMany(Producto::class);
    }

    public function servicios():HasMany{
        return $this->hasMany(Servicio::class);
    }
}

