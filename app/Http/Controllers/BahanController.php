<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use Illuminate\Http\Request;

class BahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bahan = Bahan::all();
        return view ('admin.bahan.index', compact('bahan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.bahan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_bahan' => 'required|string|max:255',
            'harga' => 'required|integer',
        ], [
            'nama_bahan.required' => 'Nama bahan wajib diisi.',
            'nama_bahan.string' => 'Nama bahan harus berupa teks.',
            'nama_bahan.max' => 'Nama bahan maksimal 255 karakter.',
            'harga.required' => 'Harga wajib diisi.',
            'harga.integer' => 'Harga harus berupa angka.',
        ]);

        Bahan::create($request->all());
        return redirect()->route('bahan.index');
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
        $bahan = Bahan::findOrFail($id);
        return view('admin.bahan.edit', compact('bahan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_bahan' => 'required|string|max:255',
            'harga' => 'required|integer',
        ], [
            'nama_bahan.required' => 'Nama bahan wajib diisi.',
            'nama_bahan.string' => 'Nama bahan harus berupa teks.',
            'nama_bahan.max' => 'Nama bahan maksimal 255 karakter.',
            'harga.required' => 'Harga wajib diisi.',
            'harga.integer' => 'Harga harus berupa angka.',
        ]);

        $bahan= Bahan::find($id);
        $bahan->update($request->all());
        return redirect()->route('bahan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bahan = Bahan::find($id);
        try {
            $bahan->delete();
            return redirect()->route('bahan.index')->with('success', 'Data bahan berhasil dihapus!');
        } catch (\Throwable $th) {
            return redirect()->route('bahan.index')->with('error', 'Gagal menghapus karena data bahan sedang digunakan!');
        }
    }
}
