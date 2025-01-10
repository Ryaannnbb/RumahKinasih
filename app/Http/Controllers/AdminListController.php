<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adminList = User::all();
        return view('admin.adminlist.index', compact('adminList'));
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
        $user = User::findOrFail($id);
        if ($user) {
            $user->role = 'admin';
            $user->save();
            return redirect()->back()->with('success', 'User approved as admin.');
        }
        return redirect()->back()->with('error', 'User not found.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        if ($user) {
            $user->delete();
            return redirect()->back()->with('success', 'User deleted.');
        }
        return redirect()->back()->with('error', 'User not found.');
    }
}
