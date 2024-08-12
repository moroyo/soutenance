<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publier extends Model
{
    use HasFactory;

    protected $fillable = [
        'lieu',
        'categorie',
        'heure_arrivee',
        'titre_de_publication',
        'kilos_disponible',
        'disponibilite',
        'nom',
        'prenom',
        'nationalite',
        'ville_destination',
        'heure_depart',
        'ville_depart',
    ];
}
