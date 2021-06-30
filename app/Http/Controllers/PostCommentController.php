<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostCommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Request $request, Post $post)
    {
        $post->comments()->create(array_merge($request->only('message'),
        ['user_id' => auth()->id()]));
        return redirect()->back()->with('success', 'komentar anda berhasil ditambahkan');
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('post.editcomment', compact('post', 'categories'));
    }

    public function update(Post $post)
    {
        
    }
}
