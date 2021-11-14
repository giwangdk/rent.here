<?php

namespace App;

use App\Car;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'car_id', 'price'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }
}
