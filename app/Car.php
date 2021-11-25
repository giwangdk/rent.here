<?php

namespace App;

use App\Category;
use App\Detail;
use App\Price;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'name', 'status', 'photo', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function details()
    {
        return $this->hasMany(Detail::class, 'car_id', 'id');
    }
    public function prices()
    {
        return $this->hasMany(Price::class, 'car_id', 'id');
    }
}
