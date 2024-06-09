<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();
        $title = "Welcome to Dashboard Produk";
        return view("pages.admin.produck", compact("title", "produk"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = produk::all();
        $title = "Welcome to Dashboard Produk";
        return view ('pages.admin.tambah-produk', compact("title"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
        ]);

        $produk = new Produk;
        $produk->nama_produk = $request->input('nama_produk');
        $produk->harga = $request->input('harga');
        $produk->deskripsi = $request->input('deskripsi');
        
        $produk->service_id=1;
        $produk->save();
        return redirect('/administrator/product');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
