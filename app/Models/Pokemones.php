<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemones extends Model
{
    use HasFactory;
    protected $table='pokemones';
    protected $fillable=['nombre', 'imagen', 'valor'];
}
