@extends('dashboard.layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Daftar Pesanan</h2>
            </div>
        </div>
        <div class="col-lg-12 margin-tb">
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('pesanan.create') }}"> Input Pesanan</a>
            </div>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
        
    <table class="table table-bordered">
        <tr>
            <th>Kode Pesanan</th>
            <th>Nama</th>
            <th>Plat Nomor</th>
            <th>Paket Cuci</th>
            <th>Telepon</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pesanan as $psg)
        <tr>        
            <td>{{ $psg ->kode }}</td>
            <td>{{ $psg ->nama }}</td>
            <td>{{ $psg ->plat }}</td>
            <td>{{ $psg ->paket }}</td>
            <td>{{ $psg ->telepon }}</td>
            <td>{{ $psg ->status }}</td>
            <td>
                <form action="{{ route('pesanan.destroy',['pesanan'=>$psg->kode]) }}" method="POST">
                
                <a class="btn btn-info" href="{{ route('pesanan.show',$psg->kode) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('pesanan.edit',$psg->kode) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    
@endsection
