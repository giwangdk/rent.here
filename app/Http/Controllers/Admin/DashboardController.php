<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\Category;
use App\Car;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::count();
        $categories = Category::count();
        $cars = Car::count();
        return  view('admin.pages.index', compact('users', 'categories', 'cars'));
    }
}
