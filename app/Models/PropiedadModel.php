<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropiedadModel extends Model
{   
    protected $table = "propiedades";
    protected $primaryKey = "codigoPropiedad";
    protected $timestamp = false;
    use HasFactory;
}
