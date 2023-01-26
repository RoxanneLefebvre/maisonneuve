<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'adresse',
        'phone',
        'email',
        'dateNaissance',
        'ville_id',
    ];


    public function villeParId(){
        return $this->hasOne('App\Models\Ville', 'id', 'ville_id');
    }
}
