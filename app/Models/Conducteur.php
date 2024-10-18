<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conducteur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'genre',
        'age',
        'profession',
        'telephone',
        'vehicule',
        'matricule'
    ];
}

