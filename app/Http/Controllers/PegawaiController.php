<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
            'gaji' => 'required|integer',
        ]);

        Pegawai::create([
            'name' => $request->name,
            'posisi' => $request->posisi,
            'gaji' => $request->gaji,
        ]);

        return redirect()->route('index')->with('success', 'Data Berhasil Ditambahkan');
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
        $pegawai = Pegawai::findOrFail($id);
        return view('edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $request->validate([
        'name' => 'required|string|max:255',
        'posisi' => 'required|string|max:255',
        'gaji' => 'required|integer',
    ]);

    $pegawai = Pegawai::findOrFail($id);
    $pegawai->update([
        'name' => $request->name,
        'posisi' => $request->posisi,
        'gaji' => $request->gaji,
    ]);

    return redirect()->route('index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();

        return redirect()->route('index')->with('success', 'Data Berhasil Dihapus');
    }
}
