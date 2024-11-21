<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReplayWebinaire extends Model
{
    protected $fillable = [
        'libelle',
        'url_video',
    ];
}
