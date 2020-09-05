@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">
                Pesanan Anda
            </h2>
        </div>
    </div>
    <div class="row">
        <a href="{{ url('home') }}"><i class="fa fa-arrow-left">Kembali</i></a>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $barang->nama_barang }}</li>
                </ol>
                </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">

            <div class="card">
            <img src="{{ url('assets/uploads',$barang->gambar) }}" class="card-img-top" width="350" height="400" style="border-radius: :10px">
            </div>
        </div>
        <div class="col-md-6">
            <table class="table table-bordered">
                <h3>{{ $barang->nama_barang }}</h3>
            <tbody>
                <tr>
                     <th scope="row">Harga</th>
                    <td>:</td>
                    <td>{{ $barang->harga }}</td>

                </tr>
                <tr>
                    <th scope="row">Stok</th>
                    <td>:</td>
                    <td>{{ $barang->stok }}</td>

                </tr>
                <tr>
                    <th scope="row">Keterangan</th>
                    <td >:</td>
                    <td>{{ $barang->keterangan }}</td>
                </tr>
                <tr>
                    <td>Jumlah Pesan</td>
                    <td>:</td>
                    <td>
                            <form method="post" action="{{ url('pesan') }}/{{ $barang->id }}" >
                        @csrf
                            <input type="text" name="jumlah_pesan" class="form-control" required="">
                            <button type="submit" class="btn btn-primary mt-2"><i class="fa fa-shopping-cart"></i> Masukkan Keranjang</button>
                        </form>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
