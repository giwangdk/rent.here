<?php

namespace App;

use App\Car;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = [
        'tahun_pembuatan', 'warna_mobil', 'kapasitas_penumpang', 'deskripsi', 'car_id'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }
}
