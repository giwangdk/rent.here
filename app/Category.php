<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'photo', 'description', 'slug'
    ];

    // public function cars()
    // {
    //     return $this->hasMany()
    // }
}
