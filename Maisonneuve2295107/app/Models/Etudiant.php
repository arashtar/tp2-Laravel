<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'adresse',
        'phone',
        'email',
        'date_de_naissance',
        'ville_id',
        'user_id'
    ];

    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }

    public function etudiantHasUser(){
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    public function etudiantHasCategory(){
        return $this->hasOne('App\Models\Category', 'id', 'categories_id');
    }
}


    
