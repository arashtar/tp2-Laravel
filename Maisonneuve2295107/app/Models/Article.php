<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_fr',
        'body',
        'body_fr',
        'user_id',
        'categories_id'
    ];

    public function articleHasUser(){
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    public function articleHasCategory(){
        return $this->hasOne('App\Models\Category', 'id', 'categories_id');
    }

}
