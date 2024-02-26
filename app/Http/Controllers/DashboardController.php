<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\JenisBarang;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $jenisBarang = JenisBarang::all();
        $barang = Barang::all();
        $user = User::all();

        return view('dashboard', [
            'jenis' => $jenisBarang->count(),
            'barang' => $barang->count(),
            'user' => $user->count(),
        ]);
    }

    public function indexUser() {
        $jenisBarang = JenisBarang::all();
        $barang = Barang::all();

        return view('Admin.all-user', [
            'jenis' => $jenisBarang->count()
        ]);
    }
}
