<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = Profile::all();
        $title = "Welcome to Dashboard Profile";
        return view("pages.admin.profile", compact("title", "profile"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Welcome to Dashboard Profile";
        $users = User::all(); 
        return view('pages.admin.tambah-profile', compact("title", "users"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nama' => 'required',
        'no_hp' => 'required',
        'moto' => 'required',
        'id_user' => 'required|exists:users,id', 
    ]);

    $profile = new Profile;
    $profile->nama = $request->input('nama');
    $profile->no_hp = $request->input('no_hp');
    $profile->moto = $request->input('moto');
    $profile->admin_id = $request->input('id_user'); 

    $profile->save();

    return redirect('/administrator/profile');

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
        $profile = Profile::find($id);
        $title = "Welcome to Dashboard Edit Profile";
        $users = User::all(); 
        return view("pages.admin.edit-profile", compact("title", "profile", "users"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'no_hp' => 'required',
            'moto' => 'required',
            'id_user' => 'required|exists:users,id', 
        ]);
    
        $profile = Profile::find($id);
        $profile->update([
            'nama' => $request->input('nama'),
            'no_hp' => $request->input('no_hp'),
            'moto' => $request->input('moto'),
            'id_user' => $request->input('id_user'), 
        ]);
    
        return redirect("/administrator/profile");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $profile = Profile::find($id);

        $profile->delete();

        return redirect("/administrator/profile");
    }
}
