@extends('dashboard.layout.main')

@section('content')
    <div class="container mt-5"> 
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit Pesanan
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('pesanan.update', $pesanan->kode) }}" id="myForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="kode">Kode Pesanan</label> 
                            <input type="text" name="kode" class="form-control" id="kode" value="{{ $pesanan->kode }}" aria-describedby="kode" > 
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label> 
                            <input type="text" name="nama" class="form-control" id="nama" value="{{ $pesanan->nama }}" aria-describedby="nama" > 
                        </div>
                        <div class="form-group">
                            <label for="plat">Plat Nomor</label> 
                            <input type="plat" name="plat" class="form-control" id="plat" value="{{ $pesanan->plat }}" aria-describedby="plat" > 
                        </div>
                        <div class="form-group">
                            <label for="paket">Paket Cuci</label> 
                            <input type="paket" name="paket" class="form-control" id="paket" value="{{ $pesanan->paket }}" aria-describedby="paket" > 
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon</label> 
                            <input type="telepon" name="telepon" class="form-control" id="telepon" value="{{ $pesanan->telepon }}" aria-describedby="telepon" > 
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label> 
                            <input type="status" name="status" class="form-control" id="status" value="{{ $pesanan->status }}" aria-describedby="status" > 
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

