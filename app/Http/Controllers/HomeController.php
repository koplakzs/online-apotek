<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("pages.home");
    }
    public function product()
    {
        return view("pages.product");
    }
    public function about()
    {
        return view("pages.about");
    }
    public function contact()
    {
        return view("pages.contact");
    }
    public function service()
    {
        $service = Service::orderBy('updated_at', 'DESC')->get();
        return view("pages.service", compact('service'));
    }
}
