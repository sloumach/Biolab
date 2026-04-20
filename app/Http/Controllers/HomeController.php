<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $latestBlogs = Blog::latest()->take(3)->get();

        return view('index', compact('latestBlogs'));
    }
}
