<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('post.create', compact('categories'));
    }

    public function store(Request $request, Post $post)
    {
        // Post::create([
        //     'title'         => request('title'),
        //     'slug'          => str::slug(request('title')),
        //     'content'       => request('content'),
        //     'category_id'   => request('category_id'),
        // ]);
        // $request->validate([
        //     'title'             => 'required',
        //     'content'           => 'required',
        // ],
        // [
        //     'title.required'             => 'Mohon isi Judul',
        //     'content.required'           => 'Mohon isi sesuatu yang anda ingin diskusikan'
        // ]);
        
        // $input = $request->all();
        // Post::create($input);
        // return redirect()->route('post.index')
        //     ->with('success', 'Diskusi anda berhasil ditambah');
        Post::create([
            'title'     => $request->title,
            'user_id'   => auth()->id(),
            'content'    => $request->content,
            'category_id'   => $request->category_id,
        ]);
        return redirect()->route('post.index')
        ->with('success', 'Diskusi anda berhasil ditambahkan');
    }
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('post.edit', compact('post','categories'));
    }

    public function update(Request $request,Post $post)
    {
        $request->valiate([
            'title'     => 'required',
            'content'   => 'required',
        ],
        [
            'title.required'             => 'Mohon lengkapi form diskusi anda',
            'content.required'           => 'Mohon lengkapi form diskusi anda'
        ]);

        $input = $request->all(); 

        $post->update($input);

        return redirect()->route('post.index')
            ->with('success', 'Post anda berhasil diedit');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index')
        ->with('success', 'Post Diskusi sudah berhasil dihapus');
    }
}
