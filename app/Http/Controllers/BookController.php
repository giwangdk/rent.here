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
        $car = Car::with(['details', 'prices'])->where('id', $id)->firstOrFail();

        return view('landing.pages.book', compact('car'));
    }

    public function book(Request $request, $id)
    {
        if ($request["with_driver"] == "yes") {
            $total = ($request["total"]) + 200000;
        } else {
            $total = $request["total"];
        }

        Transaction::create([
            "name" => $request["name"],
            "phone_num" => $request["phone_num"],
            "address" => $request["address"],
            "car" => $request["car"],
            "with_driver" => $request["with_driver"],
            "total" =>  $total

        ]);
        $transaction = Transaction::with(['author', 'car'])->where('id', $id)->firstOrFail();

        return view('landing.pages.confirm', compact('transaction'));
    }

    public function show(Request $request, $id)
    {
        $transaction = Transaction::with(['author', 'car'])->where('id', $id)->firstOrFail();

        return view('landing.pages.confirm', compact('transaction'));
    }
}
