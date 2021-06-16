@extends('layouts.app')
@section('title', "- Tambah Produk -")
@section('content')     
    <div class="col-md-6 mx-auto my-5">
        <div class="card shadow-lg">
            <div class="card-body">
                <h5 class="card-title text-center">Tambah Produk</h5>
                <form action="{{route("produk.store")}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" class="form-control{{$errors->has("nama_produk") ? " is-invalid" : ""}}" name="nama_produk" id="nama_produk" autofocus value="{{old("nama_produk")}}">
                        @error('nama_produk')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control{{$errors->has("harga") ? " is-invalid" : ""}}" name="harga" id="harga" value="{{old("harga")}}">
                        @error('harga')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kategori">Kategori</label>
                        <input type="text" class="form-control{{$errors->has("kategori") ? " is-invalid" : ""}}" name="kategori" id="kategori" value="{{old("kategori")}}">
                        @error('kategori')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-select{{$errors->has("status") ? " is-invalid" : ""}}">
                            <option value="">Pilih Status</option>
                            <option value="bisa dijual">Bisa Dijual</option>
                            <option value="tidak bisa dijual">Tidak Bisa Dijual</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit">Tambah</button>
                    <a class="btn btn-danger" href="/admin/produk" type="button">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
