<?php

namespace App\Http\Controllers;

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
        return view("pages.service");
    }
}
