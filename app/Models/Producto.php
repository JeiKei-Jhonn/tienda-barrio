<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos'; 
    protected $fillable = ['nombre', 'precio', 'descripcion'];

    public $timestamps = false; // Esto evita que Laravel intente insertar created_at y updated_at
}