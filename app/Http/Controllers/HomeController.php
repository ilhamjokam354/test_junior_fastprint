<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class HomeController extends Controller
{
    public function index()
    {
        $produk = Produk::latest()->where("status", "bisa dijual")->paginate(10);
        return view("welcome", compact("produk"));
    }
}
