<?php

namespace App;

use App\Car;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['photos', 'car_id'];
    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }
}
