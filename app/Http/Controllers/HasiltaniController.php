<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class HasiltaniController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $hasil = Product::all();
        return view('hasiltani.index', compact('hasil'));
    }

    public function show(Product $hasil)
    {   
        return view('hasiltani.show', compact('hasil'));
    }
}
