<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\Pelanggan;
use App\Models\User;
use App\Models\Produk;
use App\Models\DetailPenjualan;


class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjualan = Penjualan::all();
        return view('pages.penjualan.index', compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelanggan = Pelanggan::all();
        $user = User::all();
        return view('pages.penjualan.create', compact('pelanggan','user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Penjualan::create([
            'tanggal_penjualan' => now(),
            'total_harga' => 0,
            'total_bayar' => 0,
            'kembalian' => 0,
            'id_pelanggan' => $request->id_pelanggan
        ]);

        return redirect('/penjualan')->with('berhasil', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $detail_penjualan = DetailPenjualan::all();
        $penjualan = Penjualan::find($id);
        $produk = Produk::all();
        $pelanggan = Pelanggan::all();
        $total_bayar = DetailPenjualan::where('id_penjualan', $id)->sum('subtotal');
        return view('pages.penjualan.detail_penjualan.create', compact('detail_penjualan', 'penjualan', 'produk', 'pelanggan', 'total_bayar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id_penjualan = $request->id_penjualan;
        $penjualan = Penjualan::find($id_penjualan);
        $penjualan->update([
            'total_harga' => $request->total_harga,
            'total_bayar' => $request->uang_masuk,
            'kembalian' => $request->kembalian
        ]);

        return redirect('/penjualan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penjualan=Penjualan::find($id);
        $penjualan->delete();

        return redirect('/penjualan')->with('berhasil', 'Data Berhasil Dihapus');
    }
}
