<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use App\Models\Batik;
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
        
        $bahan = Bahan::get();
        return view('admin.batik.create', compact('bahan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Batik::create ($request->all());
        return redirect()->route('batik.index');
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
        $bahan = Bahan::get();
        return view('admin.batik.edit', compact('batik','bahan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $batik= Batik::find($id);
        $batik->update($request->except('_token','submit'));
        return redirect()->route('batik.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $batik = Batik::find($id);
        $batik->delete();
        return redirect()->route('batik.index');
    }
}
