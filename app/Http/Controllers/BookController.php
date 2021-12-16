<?php

namespace App\Http\Controllers;

use App\Category;
use App\Car;
use App\Transaction;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request, $id)
    {
        $category = Category::with(['cars'])->where('slug', $id)->firstOrFail();
        $cars = Car::with(['details', 'prices'])->where('category_id', $category->id)->take(20)->get();

        return view('landing.pages.book', compact('category', 'cars'));
    }

    public function book(Request $request)
    {
        Transaction::create([
            "name" => $request["name"],
            "phone_num" => $request["phone_num"],
            "address" => $request["address"],
            "car" => $request["car"],
            "with_driver" => $request["with_driver"],
            "total" => $request["total"],

        ]);
        return redirect('/');
    }
}
