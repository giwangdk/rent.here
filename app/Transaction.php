<?php

namespace App;

use App\User;
use App\Car;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'name', 'phone_num', 'address', 'car', 'with_driver', 'total'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'name');
    }

    public function car()
    {
        return $this->belongsTo(Car::class, 'car');
    }
}
