@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row text-center">
        @foreach ($barangs as $barang)
            <div class="col-md-3">
                <div class="card" style="border-radius: 10px">
                    <img src="{{ url('assets/uploads',$barang->gambar) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$barang->nama_barang }}</h5>
                        <p class="card-text">
                            <strong>Harga:</strong> Rp {{ number_format($barang->harga) }} &nbsp;
                            <strong>Stok:</strong> {{ $barang->stok }}
                        </p>
                        <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary text-center"><i class="fa fa-shopping-cart"> Pesan</i></a>
                    </div>
                    </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
