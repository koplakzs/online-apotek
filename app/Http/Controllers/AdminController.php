<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
    public function resetAccount(Request $request)
    {
        $validate = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        $user = User::find(1);

        $user->email = $validate["email"];
        $user->password = Hash::make($validate["password"]);
        $user->save();

        return redirect("/administrator");
    }
}
