<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function latest(): RedirectResponse
    {
        $blog = Blog::latest()->firstOrFail();

        return redirect()->route('blog.single', $blog);
    }

    public function show(Blog $blog): View
    {
        $latestBlogs = Blog::where('id', '!=', $blog->id)
            ->latest()
            ->take(3)
            ->get();

        $categories = Blog::query()
            ->select('category')
            ->distinct()
            ->orderBy('category')
            ->pluck('category');

        return view('blog-single', compact('blog', 'latestBlogs', 'categories'));
    }
}
