<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Trajet extends Model
{
    use HasFactory;

    protected $fillable = [
        'lieu_depart',
        'userId',
        'lieu_arrive',
        'temps_depart',
        'temps_arrive',
        'heure',
        'prix',
        'nbplace',
        'vehicule'
    ];

    public function roads(): HasMany
    {
        return $this->hasMany(Road::class);
    }
}
