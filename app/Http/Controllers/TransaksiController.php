<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Batik;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\DetailTransaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $batik = Batik::all();
        return view('admin.transaksi.create', compact('batik'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nama_pelanggan' => 'required|string|max:255',
        //     'tanggal_transaksi' => 'required|date',
        //     'total_harga' => 'required|numeric',
        //     'batik_id' => 'required|array',
        //     'batik_id.*' => 'exists:batiks,id',
        //     'jumlah' => 'required|numeric|min:1',
        // ], [
        //     'nama_pelanggan.required' => 'Nama pelanggan wajib diisi.',
        //     'tanggal_transaksi.required' => 'Tanggal transaksi wajib diisi.',
        //     'total_harga.required' => 'Total harga wajib diisi.',
        //     'batik_id.required' => 'Pilih minimal satu batik.',
        //     'batik_id.*.exists' => 'Batik yang dipilih tidak valid.',
        //     'jumlah.required' => 'Jumlah batik wajib diisi.',
        //     'jumlah.min' => 'Jumlah batik minimal 1.',
        // ]);

        $tglTransaksi = Carbon::parse($request->tanggal_transaksi)->format('Y-m-d H:i');

        $transaksi = Transaksi::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'tanggal_transaksi' => $tglTransaksi,
            'total_harga' => 0, // We will calculate this later
        ]);
    
        // Initialize total harga
        $totalHarga = 0;
    
        // Loop through selected batiks and save details
        foreach ($request->batik_id as $batikId) {
            $batik = Batik::find($batikId);
            $jumlah = $request->jumlah; // Assuming the same quantity for all selected batiks
    
            // Calculate subtotal for each batik
            $subtotal = $batik->harga * $jumlah;
    
            // Create a new detail transaksi
            DetailTransaksi::create([
                'transaksi_id' => $transaksi->id,
                'batik_id' => $batikId,
                'jumlah' => $jumlah,
                'subtotal' => $subtotal,
            ]);
    
            // Add to total harga
            $totalHarga += $subtotal;
        }
    
        // Update total harga in transaksi
        $transaksi->update(['total_harga' => $totalHarga]);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
