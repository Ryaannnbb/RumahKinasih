<?php

namespace App\Http\Controllers;

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
        return view('admin.batik.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Batik::create($request->all());
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
