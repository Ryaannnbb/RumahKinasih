<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Batik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batik = Batik::all();
        $adminlist = User::where('role', 'admin')->get();
        $approval = User::where('role', 'waiting')->get();
        $userlist = User::all();

        // Ambil jumlah produk per bulan
        $produkPerBulan = Batik::select(
            DB::raw('MONTH(created_at) as bulan'),
            DB::raw('COUNT(*) as total')
        )
        ->groupBy('bulan')
        ->orderBy('bulan', 'asc')
        ->get();

        // Buat array data untuk chart
        $dataProduk = [];
        for ($i = 1; $i <= 12; $i++) {
            $dataProduk[$i] = 0; // Default 0 jika tidak ada data
        }

        foreach ($produkPerBulan as $data) {
            $dataProduk[$data->bulan] = $data->total;
        }

        // Kirim data ke view
        return view('admin.dashboard', compact('batik', 'adminlist', 'approval', 'userlist'))
            ->with('dataProduk', array_values($dataProduk)); // Tambahkan data chart
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
