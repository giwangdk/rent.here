<?php

namespace App\Http\Controllers;

use App\Category;
use App\Car;
use App\Detail;
use App\Price;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(Request $request, $id)
    {
        $category = Category::with(['cars'])->where('slug', $id)->firstOrFail();
        $cars = Car::with(['details', 'prices'])->where('category_id',$category->id )->take(20)->get();

        return view('landing.pages.detail', compact('category', 'cars'));
    }
}
