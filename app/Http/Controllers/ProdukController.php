<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $produk = Produk::latest()->paginate(20);
        return view("produk.index", compact("produk"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("produk.tambah");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nama_produk" => "required",
            "harga" => "required|integer|numeric",
            "kategori" => "required",
            "status" => "required",
        ],[
            "required" => ":attribute tidak boleh kosong",
            "integer" => ":attribute harus berupa angka",
            "numeric" => ":attribute harus berupa angka",
        ]);
        Produk::create($request->all());
        session()->flash("berhasil", "Berhasil Menambah Data.");
        return redirect("admin/produk");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view("produk.edit", compact("produk"));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "nama_produk" => "required",
            "harga" => "required|integer|numeric",
            "kategori" => "required",
            "status" => "required",
        ],[
            "required" => ":attribute tidak boleh kosong",
            "integer" => ":attribute harus berupa angka",
            "numeric" => ":attribute harus berupa angka",
        ]);
        $produk = Produk::findOrFail($id);
        $produk->update($request->all());
        session()->flash("berhasil", "Berhasil Mengubah Data.");
        return redirect("admin/produk");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        session()->flash("berhasil", "Berhasil Menghapus Data");
        $produk->delete();
        return redirect("admin/produk");
    }
}
