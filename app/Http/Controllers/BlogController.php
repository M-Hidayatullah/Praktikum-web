<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::all();
        return view('blog.index', compact('blog'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'content' => 'required',
        ]);

        Blog::create([
            'author' => Auth::user()->name,
            'category' => $request->category,
            'content' => $request->content,
        ]);

    
        return redirect()->route('blog.index')
            ->with('success', 'Blog berhasil ditambahkan');
    }

    public function edit(Blog $blog)
    {
        return view('blog.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'category' => 'required',
            'content' => 'required',
        ]);

       
        $blog->update($request->all());

        return redirect()->route('blog.index')
            ->with('success', 'Blog berhasil diupdate');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blog.index')
            ->with('success', 'Blog berhasil dihapus');
    }
}
