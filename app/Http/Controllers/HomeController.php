<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Info;


class HomeController extends Controller
{
    public function index()
    {
        $infos = Info::latest()->take(1)->get();
        $product = Product::latest()->take(3)->get();
        $posts = Post::latest()->take(1)->get();
        return view('home', compact('product', 'posts', 'infos'));
    }

    public function info()
    {
        $info = Info::latest()->paginate(5);
    
        return view('informasi',compact('info'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

}
