<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use App\Models\Batik;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BatikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batik = Batik::all();
        return view('admin.batik.index', compact('batik'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bahan = Bahan::all();
        return view('admin.batik.create', compact('bahan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'bahan_id' => 'required|integer|exists:bahans,id',
            'gambar_produk' => 'required|image|mimes:jpeg,png,jpg,svg|max:20048',
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|integer|min:0',
            'stok' => 'required|integer|min:0',
            'seri_produk' => 'required|string|max:255',
            'deskripsi' => 'required',
        ], [
            'bahan_id.required' => 'Bahan is required.',
            'bahan_id.integer' => 'Bahan must be a number.',
            'bahan_id.exists' => 'Bahan is not valid.',
            'gambar_produk.required' => 'Product image is required.',
            'gambar_produk.image' => 'Product image must be an image.',
            'gambar_produk.mimes' => 'Product image must be in jpeg, png, jpg, or svg format.',
            'gambar_produk.max' => 'Product image must not exceed 20 MB.',
            'nama_produk.required' => 'Product name is required.',
            'nama_produk.string' => 'Product name must be a string.',
            'nama_produk.max' => 'Product name must not exceed 255 characters.',
            'harga.required' => 'Price is required.',
            'harga.integer' => 'Price must be a number.',
            'harga.min' => 'Price cannot be negative.',
            'stok.required' => 'Stock is required.',
            'stok.integer' => 'Stock must be a number.',
            'stok.min' => 'Stock cannot be negative.',
            'seri_produk.required' => 'Product series is required.',
            'seri_produk.string' => 'Product series must be a string.',
            'seri_produk.max' => 'Product series must not exceed 255 characters.',
            'deskripsi.required' => 'Description is required.',
        ]);

        $file = $request->file('gambar_produk');
        $fileName = Str::random(10) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('storage/batik'), $fileName);

        Batik::create([
            'bahan_id' => $request->bahan_id,
            'gambar_produk' => $fileName,
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'seri_produk' => $request->seri_produk,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('batik.index')->with('success', 'Product Successfully Added');
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
        $batik = Batik::findOrFail($id);
        $bahan = Bahan::all();
        return view('admin.batik.edit', compact('batik', 'bahan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'bahan_id' => 'required|integer|exists:bahans,id',
            'gambar_produk' => 'required|image|mimes:jpeg,png,jpg,svg|max:20048',
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|integer|min:0',
            'stok' => 'required|integer|min:0',
            'seri_produk' => 'required|string|max:255',
            'deskripsi' => 'required',
        ], [
            'bahan_id.required' => 'Bahan is required.',
            'bahan_id.integer' => 'Bahan must be a number.',
            'bahan_id.exists' => 'Bahan is not valid.',
            'gambar_produk.required' => 'Product image is required.',
            'gambar_produk.image' => 'Product image must be an image.',
            'gambar_produk.mimes' => 'Product image must be in jpeg, png, jpg, or svg format.',
            'gambar_produk.max' => 'Product image must not exceed 20 MB.',
            'nama_produk.required' => 'Product name is required.',
            'nama_produk.string' => 'Product name must be a string.',
            'nama_produk.max' => 'Product name must not exceed 255 characters.',
            'harga.required' => 'Price is required.',
            'harga.integer' => 'Price must be a number.',
            'harga.min' => 'Price cannot be negative.',
            'stok.required' => 'Stock is required.',
            'stok.integer' => 'Stock must be a number.',
            'stok.min' => 'Stock cannot be negative.',
            'seri_produk.required' => 'Product series is required.',
            'seri_produk.string' => 'Product series must be a string.',
            'seri_produk.max' => 'Product series must not exceed 255 characters.',
            'deskripsi.required' => 'Description is required.',
        ]);

        $batik = Batik::findOrFail($id);

        if ($request->hasFile('gambar_produk')) {
            if (file_exists(public_path('storage/batik/' . $batik->gambar_produk))) {
            unlink(public_path('storage/batik/' . $batik->gambar_produk));
            }

            $file = $request->file('gambar_produk');
            $fileName = Str::random(10) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage/batik'), $fileName);
            $batik->gambar_produk = $fileName;
        }

        $batik->update([
            'bahan_id' => $request->bahan_id,
            'gambar_produk' => $batik->gambar_produk,
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'seri_produk' => $request->seri_produk,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('batik.index')->with('success', 'Product Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $batik = Batik::find($id);
        if (file_exists(public_path('storage/batik/' . $batik->gambar_produk))) {
            unlink(public_path('storage/batik/' . $batik->gambar_produk));
        }

        $batik->delete();

        return redirect()->route('batik.index')->with('success', 'Product Successfully Deleted');
    }
}
