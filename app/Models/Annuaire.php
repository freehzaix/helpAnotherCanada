<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Annuaire extends Model
{
    protected $fillable = [
        'nom_entreprise',
        'description',
        'ville',
        'pays',
        'telephone',
        'logo',
        'status'
    ];
}
