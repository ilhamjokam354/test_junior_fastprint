@extends('layouts.app')
@section('title', "- Admin Produk -")
@section('content')
    <div class="col-md-12 my-5">
        @include('layouts.alerts')
        <a href="/admin/produk/create" class="btn btn-success btn-sm" role="button">Tambah</a>
        <div class="table-responsive">
            <table class="table table-hover table-striped ">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th colspan="2" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->nama_produk}}</td>
                            <td>{{$data->kategori}}</td>
                            <td>{{number_format($data->harga, 0, ',','.')}}</td>
                            <td>
                                @if ($data->status === "bisa dijual")
                                    <span class="badge bg-success">{{$data->status}}</span>
                                @else
                                    <span class="badge bg-danger">{{$data->status}}</span>
                                @endif    
                            </td>
                            <td>
                                <a href="{{route("produk.edit", $data->id)}}" role="button" class="btn btn-warning btn-sm">Ubah</a>
                            </td>
                            <td>
                                <form action="{{route("produk.destroy", $data->id)}}" method="post">
                                    @csrf
                                    @method("delete")
                                    <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Yakin Ingin Menghapus, {{$data->nama_produk}}?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
    
                </tbody>
            </table>
        </div>
        {{$produk->links()}}
    </div>
@endsection