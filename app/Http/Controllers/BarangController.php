<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\JenisBarang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index() {
        $barang = Barang::all();
        $jenisBarang = JenisBarang::all();
        return view('Admin.all-barang', [
            'data' => $barang,
            'jenisbarang' => $jenisBarang
        ]);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validated = $request->validate([
            'nama_barang' => ['required', 'string'],
            'harga'         => ['required'],
            'stok'         => ['required'],
            'id_jenis_barang' => ['required'],
        ]);

        Barang::create($validated);

        return redirect()->back();
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param $id_barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_barang) {
        $data = Barang::find($id_barang);

        $data->nama_barang = $request->input('nama_barang');
        $data->id_jenis_barang = $request->input('id_jenis_barang');
        $data->nama_barang = $request->input('harga');
        $data->nama_barang = $request->input('stok');
        $data->save();

        return redirect()->back();

    }
/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $data = Barang::findOrFail($id);

        $data->delete();
        return redirect()->back();
    }
}
