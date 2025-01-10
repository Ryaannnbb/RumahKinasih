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
        $bahan= Bahan::find($id);
        $bahan->update($request->except('_token','submit'));
        return redirect()->route('bahan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bahan = Bahan::find($id);
        $bahan->delete();
        return redirect()->route('bahan.index');
    }
}
