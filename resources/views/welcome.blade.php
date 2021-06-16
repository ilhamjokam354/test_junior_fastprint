@extends('layouts.app')
@section('title', "- Home -")
@section('content')
    <h3 class="mt-4">Produk</h3>
    <div class="row my-5">
      @foreach ($produk as $data)
        <div class="col-md-4 mb-4">
          <div class="card shadow-lg" >
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">{{$data->nama_produk}}</h5>
                <a href="/" class="card-subtitle text-muted text-decoration-none"><h6>{{$data->kategori}}</h6></a>
                <p class="card-text text-danger">Rp. {{ number_format($data->harga, 0,',','.') }}</p>
              </div>
            </div>
          </div>
        </div>
      @endforeach
      {{$produk->links()}}
    </div>
@endsection