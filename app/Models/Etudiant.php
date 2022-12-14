<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'birth_date',
        'villes_id'
    ];

    public function EtudiantHasCountry () 
    {
        return $this->hasOne('App\Models\Ville', 'id', 'villes_id');
    }
}
