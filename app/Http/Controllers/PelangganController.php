<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index() {
        $all_pelanggan = Pelanggan::paginate(4);

        return view('dashboard.index', ['dashboard' => $all_pelanggan]);
                
    }
}
