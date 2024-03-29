<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $blog = Blog::where('status', 'active')->get();

        return view('dashboard.home', ['blogList' => $blog]);
    }
}
