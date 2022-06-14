@extends('dashboard.layout.main')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Pesanan
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Kode Pesanan: </b>{{$pesanan->kode}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$pesanan->nama}}</li>
                    <li class="list-group-item"><b>Plat Nomor: </b>{{$pesanan->plat}}</li>
                    <li class="list-group-item"><b>Paket Cuci: </b>{{$pesanan->paket}}</li>
                    <li class="list-group-item"><b>Telepon: </b>{{$pesanan->telepon}}</li>
                    <li class="list-group-item"><b>Status: </b>{{$pesanan->status}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('pesanan.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection
