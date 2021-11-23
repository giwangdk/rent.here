<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::take(4)->get();
        return view('landing.pages.layanan', compact('categories'));
    }
}
