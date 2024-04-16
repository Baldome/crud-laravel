<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    use HasFactory;

    protected $fillable = ['codigo', 'nombre', 'descripcion', 'estado', 'fecha_registro', 'modelo', 'serie', 'imagen', 'observaciones', 'categoria_id', 'ubicacion_id'];
    
    public function categoria(){
        return $this->belongsTo(Categoria::class); // de muchos a uno 
    }

    public function ubicacion(){
        return $this->belongsTo(Ubicacion::class); // de muchos a uno
    }
}