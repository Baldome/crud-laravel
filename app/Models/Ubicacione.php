<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacione extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion'];

    public function activo(){
        return $this->hasMany(Activo::class); // relacion de uno a muchos
    }
}