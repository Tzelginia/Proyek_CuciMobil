@extends('dashboard.layout.main')

@section('content')

<div class="table-responsive">
<div class="d-xl-flex justify-content-between align-items-start">
    <h3 class="text-dark font-weight-bold mb-3">Daftar Pelanggan </h3>
  </div>
        <table class="table table-head-fixed table-hover">
            <thead>
                <tr>
                    <th>Nomor Antrian</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Plat Mobil</th>
                    <th>Jenis</th>
                    <th>Nomor Telepon</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dashboard as $db)
                    <tr>
                        <td>{{ $db->id }}</td>
                        <td>{{ $db->nama }}</td>
                        <td>{{ $db->alamat }}</td>
                        <td>{{ $db->plat }}</td>
                        <td>{{ $db->jenis }}</td>
                        <td>{{ $db->nomor_telepon }}</td>
                    </tr>
                @endforeach
            </tbody>           
        </table>
    </div>
    <div class="d-flex">
        {{ $dashboard->links() }}
    </div>
@endsection
