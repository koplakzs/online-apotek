<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $title = "Welcome to Dashboard Administrator";
        return view("pages.admin.dashboard", compact("title"));
    }
    public function profile()
    {
        $title = "Welcome to Dashboard Profile";
        return view("pages.admin.profile", compact("title"));
    }
    public function setting()
    {
        $title = "Welcome to Dashboard Setting";
        return view("pages.admin.setting", compact("title"));
    }
}
