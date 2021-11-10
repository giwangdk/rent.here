<?php

namespace App;

use App\Category;
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
}
