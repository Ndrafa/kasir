<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailPenjualan;
use App\Models\Produk;
use App\Models\Penjualan;

class DetailPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.detail_penjualan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DetailPenjualan::create([
            'id_penjualan' => $request->id_penjualan,
            'id_produk' => $request->nama_produk,
            'jumlah_produk' => $request->jumlah_produk,
            'subtotal' => $request->subtotal,
        ]);

        $id_penjualan = $request->id_penjualan;

        return redirect('/penjualan/' . $id_penjualan . '/edit')->with('berhasil', 'Pesanan berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
  public function show($id)
{
    $penjualan = Penjualan::find($id);
    $detail_penjualan = $penjualan->details; // assuming a relationship
    $total_harga = $detail_penjualan->sum('subtotal');

    return view('your.view', compact('penjualan', 'detail_penjualan', 'total_harga'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $detail_penjualan = DetailPenjualan::find($id);
        return view('pages.detail_penjualan.edit', compact('detail_penjualan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // MENANGKAP DATA DETAIL PENJUALAN
        $detail_penjualan = DetailPenjualan::find($id);
    
        // Cek apakah detail penjualan ditemukan
        if (!$detail_penjualan) {
            return redirect()->back()->with('error', 'Detail penjualan tidak ditemukan.');
        }
    
        $ip = Produk::find($detail_penjualan->id_produk);
        $jp = $detail_penjualan->jumlah_produk;
        $id_penjualan = $detail_penjualan->id_penjualan;
    
        // Mengembalikan Stok Produk Dari Keranjang Pesanan yang telah dibuat
        if ($ip) {
            $ip->increment('stok', $jp);
        }
    
        // Menghapus Pesanan
        $detail_penjualan->delete();
    
        return redirect('/penjualan/' . $id_penjualan . '/edit')->with('berhasil', 'Pesanan berhasil di-cancel.');
    }
    
}

