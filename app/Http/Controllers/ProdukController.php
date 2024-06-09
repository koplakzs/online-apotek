<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $title = "Welcome to Dashboard Produk";
        $data = Produk::orderBy('updated_at', 'DESC')->get();
        $kategori = Kategori::orderBy('updated_at', 'DESC')->get();
        return view("pages.admin.produck", compact("title", 'data', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|string',
            'deskripsi' => 'required|string',
            'kategori_id' => 'required|integer|exists:kategoris,kategori_id',
            'images' => 'required|image|mimes:jpg,jpeg,png|max:1024',
        ]);
    
        $produkModel = new Produk();
    
        $produkModel->nama_produk = $validated['nama_produk'];
        $produkModel->harga = $validated['harga'];
        $produkModel->deskripsi = $validated['deskripsi'];
        $produkModel->kategori_id = $validated['kategori_id'];
    
        $imageName = date('dmyHis') . '.' . $request->file('images')->extension();
        $request->file('images')->move(public_path('produk'), $imageName);
    
        $produkModel->images = $imageName;
        $produkModel->save();
    
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
        $title = "Welcome to Dashboard Produk";
        $data = Produk::where('produk_id', $id)->first();
        $kategori = Kategori::orderBy('updated_at', 'DESC')->get();
        return view("pages.admin.edit-produk", compact("title", 'data', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id){
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|string',
            'deskripsi' => 'required|string',
            'kategori_id' => 'required|integer|exists:kategoris,kategori_id',
            'images' => 'nullable|image|mimes:jpg,jpeg,png|max:1024',
        ]);
    
        $produkModel = Produk::find($id); 
     $produkModel->nama_produk = $validated['nama_produk'];
        $produkModel->harga = $validated['harga'];
        $produkModel->deskripsi = $validated['deskripsi'];
        $produkModel->kategori_id = $validated['kategori_id'];
        
        if ($request->hasFile('images')) {
            // Memeriksa apakah ada file yang diunggah
            $imageName = date('dmyHis') . '.' . $request->file('images')->extension();
            $request->file('images')->move(public_path('produk'), $imageName);
            // Menghapus file lama jika ada
            if (file_exists(public_path('produk/' . $produkModel->images))) {
                unlink(public_path('produk/' . $produkModel->images));
            }
            $produkModel->images = $imageName;
        }
        
        $produkModel->save();
        
        return redirect('/administrator/product')->with('success', 'Produk updated successfully');
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produkModel = Produk::find($id);

        $produkModel->delete();

        return redirect("/administrator/product");
    }
}
