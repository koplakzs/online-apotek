<?php

namespace App\Http\Controllers;


use App\Models\Profile;
use App\Models\User;
use App\Models\Produk;

use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        return view("pages.home");
    }
    public function product()
    {
        $produk = Produk::orderBy('updated_at', 'DESC')->get();
        return view("pages.product", compact('produk'));
    }
    public function about()
    {
        return view("pages.about");
    }
    public function contact()
    {
        $profile = Profile::find(1);
        $user = User::find(1);

        return view("pages.contact", compact('profile','user'));
    }
    public function service()
    {
        $service = Service::orderBy('updated_at', 'DESC')->get();
        return view("pages.service", compact('service'));
    }
   
}
