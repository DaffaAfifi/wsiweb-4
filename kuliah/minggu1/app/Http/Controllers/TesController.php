<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class TesController extends Controller
{
    public function home()
    {
        return view('dashboard.home');
    }

    public function about()
    {
        return view('dashboard.about');
    }

    public function blog()
    {
        $blog = Blog::all();

        return view('dashboard.blog', ['blogList' => $blog]);
    }
}
