@extends('dashboard.layout.main')

@section('content')
    <div class="container mt-5"> 
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Pesanan
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
                    <form method="post" action="{{ route('pesanan.store') }}" id="myForm">
                        @csrf
                        <div class="form-group">
                            <label for="kode">Kode Pesanan</label> 
                            <input type="text" name="kode" class="form-control" id="kode" aria-describedby="kode" > 
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label> 
                            <input type="nama" name="nama" class="form-control" id="nama" aria-describedby="nama" > 
                        </div>
                        <div class="form-group">
                            <label for="plat">Plat Nomor</label> 
                            <input type="plat" name="plat" class="form-control" id="plat" aria-describedby="plat" > 
                        </div>
                        <div class="form-group">
                            <label for="paket">Paket Cuci</label> 
                            <input type="paket" name="paket" class="form-control" id="paket" aria-describedby="paket" > 
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon</label> 
                            <input type="telepon" name="telepon" class="form-control" id="telepon" aria-describedby="telepon" > 
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label> 
                            <input type="status" name="status" class="form-control" id="status" aria-describedby="status" > 
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection   
