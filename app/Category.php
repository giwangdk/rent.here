<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Car;

class Category extends Model
{
    protected $fillable = [
        'name', 'photo', 'description', 'slug'
    ];

    public function cars()
    {
        return $this->hasMany(Car::class, 'category_id', 'id');
    }
}
