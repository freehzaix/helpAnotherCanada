<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Webinaire extends Model
{
    protected $fillable = [
        'designation',
        'description',
        'tarif',
        'date_debut',
        'date_fin',
        'heure_debut',
        'heure_fin',
        'image_webinaire',
        'url_webinaire',
    ];
}
