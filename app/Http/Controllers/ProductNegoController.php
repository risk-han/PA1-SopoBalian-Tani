<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Nego;

class ProductNegoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Request $request, Product $hasil)
    {
        Nego::create([
            'product_id'    => $hasil->id,
            'user_id'       => auth()->id(),
            'pesan'         => $request->pesan,
            'nominal'       => $request->nominal,
        ]);
        return redirect()->back()
        ->with('success', 'Tawaran anda berhasil ditambahkan');
    }

    public function edit(Nego $nego)
    {
        return view('hasiltani.edit', compact('nego'));
    }

    public function update(Request $request, Nego $nego)
    {
        $request->validate([

        ]);
    }
}
