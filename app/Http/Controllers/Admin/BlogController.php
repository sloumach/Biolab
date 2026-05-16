<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        $blogs = Blog::latest()->paginate(15);

        return view('admin.blogs.index', compact('blogs'));
    }

    public function create(): View
    {
        return view('admin.blogs.create');
    }

    public function edit(Blog $blog): View
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $this->validateBlog($request);
        $validated['latest'] = $request->boolean('latest');

        if ($request->hasFile('image')) {
            $validated['image_path'] = $request->file('image')->store('blogs', 'public');
        }

        unset($validated['image']);

        Blog::create($validated);

        return redirect()->route('admin.blogs.index')->with('success', 'L’article a été créé.');
    }

    public function update(Request $request, Blog $blog): RedirectResponse
    {
        $validated = $this->validateBlog($request);
        $validated['latest'] = $request->boolean('latest');

        if ($request->hasFile('image')) {
            if ($blog->image_path) {
                Storage::disk('public')->delete($blog->image_path);
            }

            $validated['image_path'] = $request->file('image')->store('blogs', 'public');
        }

        unset($validated['image']);

        $blog->update($validated);

        return redirect()->route('admin.blogs.index')->with('success', 'L’article a été mis à jour.');
    }

    public function destroy(Blog $blog): RedirectResponse
    {
        if ($blog->image_path) {
            Storage::disk('public')->delete($blog->image_path);
        }

        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'L’article a été supprimé.');
    }

    /**
     * @return array<string, mixed>
     */
    private function validateBlog(Request $request): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'category' => ['required', 'string', 'max:100'],
            'image' => ['nullable', 'image', 'max:2048'],
            'latest' => ['nullable', 'boolean'],
        ]);
    }
}
