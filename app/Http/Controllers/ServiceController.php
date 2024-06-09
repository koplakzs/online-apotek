<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $title = "Welcome to Dashboard Service";
        $data = Service::orderBy('updated_at', 'DESC')->get();
        $kategori = Kategori::orderBy('updated_at', 'DESC')->get();
        return view("pages.admin.service", compact("title", 'data', 'kategori'));
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
            'nama_services' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori_id' => 'required|integer|exists:kategoris,kategori_id',
            'images' => 'required|image|mimes:jpg,jpeg,png|max:1024',
        ]);
    
        $serviceModel = new Service();
    
        $serviceModel->nama_services = $validated['nama_services'];
        $serviceModel->deskripsi = $validated['deskripsi'];
        $serviceModel->kategori_id = $validated['kategori_id'];
    
        $imageName = date('dmyHis') . '.' . $request->file('images')->extension();
        $request->file('images')->move(public_path('service'), $imageName);
    
        $serviceModel->images = $imageName;
        $serviceModel->save();
    
        return redirect('/administrator/service');
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
        $title = "Welcome to Dashboard Service";
        $data = Service::where('service_id', $id)->first();
        $kategori = Kategori::orderBy('updated_at', 'DESC')->get();
        return view("pages.admin.edit-service", compact("title", 'data', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id){
        $validated = $request->validate([
            'nama_services' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori_id' => 'required|integer|exists:kategoris,kategori_id',
            'images' => 'nullable|image|mimes:jpg,jpeg,png|max:1024',
        ]);
    
        $serviceModel = Service::find($id); 
    
        $serviceModel->nama_services = $validated['nama_services'];
        $serviceModel->deskripsi = $validated['deskripsi'];
        $serviceModel->kategori_id = $validated['kategori_id'];
        
        if ($request->hasFile('images')) {
            // Memeriksa apakah ada file yang diunggah
            $imageName = date('dmyHis') . '.' . $request->file('images')->extension();
            $request->file('images')->move(public_path('service'), $imageName);
            // Menghapus file lama jika ada
            if (file_exists(public_path('service/' . $serviceModel->images))) {
                unlink(public_path('service/' . $serviceModel->images));
            }
            $serviceModel->images = $imageName;
        }
        
        $serviceModel->save();
        
        return redirect('/administrator/service')->with('success', 'Service updated successfully');
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $serviceModel = Service::find($id);

        $serviceModel->delete();

        return redirect("/administrator/service");
    }
}
