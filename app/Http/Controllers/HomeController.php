<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $list = Category::all();
        $count = $list->count();
        return view('dashboard', compact('count'));
    }
}
