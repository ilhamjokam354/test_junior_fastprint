<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view("auth.login");
    }

    public function login(Request $request)
    {
        $messages = [
            "email" => ":attribute harus benar",
            "required" => ":attribute tidak boleh kosong",
        ];
        $request->validate([
            "email" => "required|email",
            "password" => "required",
        ], $messages);
        if(Auth::attempt(["email" => $request->email, "password" => $request->password])){
            return redirect()->route("produk.index");
        }
        session()->flash("gagal", "Login Gagal, Silahkan Cek Kembali.");
        return redirect("login");
    }

    public function logout()
    {
        Auth::logout();
        session()->flash("berhasil", "Logout Berhasil.");
        return redirect("login");
    }
}
