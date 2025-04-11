<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = Post::orderByDesc('published_at');

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('content', 'like', "%{$search}%")
                    ->orWhere('excerpt', 'like', "%{$search}%");
            });
        }

        $posts = $query->paginate(3)->appends(['search' => $search]);
        $empresaIp = env('EMPRESA_IP');
        $ipAtual = $request->getClientIp();

        $mostrarLogin = $ipAtual === $empresaIp;

        return view('blog', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('blog-details', compact('post'));
    }
    public function showpage()
    {
        $blogs = Post::latest()->paginate(5);
        return view('BlogAdmin', compact('blogs'));
    }
    public function create()
    {
        return view('Add_blog');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_at' => 'required|date',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:5048',
            'contents' => 'required|string',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads/blog', 'public');
        }

        Post::create([
            'title' => $request->title,
            'author' => $request->author,
            'published_at' => $request->published_at,
            'excerpt' => Str::limit(strip_tags($request->contents), 150),
            'content' => $request->contents,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('admin_blog')->with('success', 'Blog created successfully!');
    }

    public function edit($id)
    {
        $blog = Post::findOrFail($id);
        return view('edit_blog', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'published_at' => 'required|date',
            'excerpt' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:5048',
            'content' => 'nullable|string',
        ]);

        $blog = Post::findOrFail($id);
        $blog->update($request->all());

        return redirect()->route('admin_blog')->with('success', 'Blog successfully updated!');
    }

    public function destroy($id)
    {
        $blog = Post::findOrFail($id);
        $blog->delete();

        return redirect()->back()->with('success', 'Blog successfully removed!');
    }
}
