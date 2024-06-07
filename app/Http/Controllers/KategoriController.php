<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kategori::all();
        $title = "Welcome to Dashboard Kategori";
        return view("pages.admin.category", compact("title", "data"));
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
        $validate = $request->validate([
            "nama_kategori" => "required"
        ]);

        $kategoriModel = new Kategori();

        $kategoriModel->nama_kategori = $validate["nama_kategori"];
        $kategoriModel->save();

        return redirect("/administrator/category");
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

        $data = Kategori::find($id);
        $title = "Welcome to Dashboard Edit Kategori";
        return view("pages.admin.edit-category", compact("title", "data"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kategoriModel = Kategori::find($id);
        $validate = $request->validate([
            "nama_kategori" => "required"
        ]);


        $kategoriModel->nama_kategori = $validate["nama_kategori"];
        $kategoriModel->save();

        return redirect("/administrator/category");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategoriModel = Kategori::find($id);

        $kategoriModel->delete();

        return redirect("/administrator/category");
    }
}
