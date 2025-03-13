<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        $totalMahasiswa = Mahasiswa::count();
        $mahasiswaAktif = Mahasiswa::where('status', 'aktif')->count();
        
        return view('mahasiswa.index', compact('mahasiswa', 'totalMahasiswa', 'mahasiswaAktif'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'nrp' => 'required|string|unique:mahasiswa,nrp',
            'nama' => 'required|string',
            'status' => 'required|in:aktif,tidak aktif',
            'alamat' => 'nullable|string',
            'no_hp' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Mahasiswa::create([
            'nrp' => $data['nrp'],
            'nama' => $data['nama'],
            'status' => $data['status'],
            'alamat' => $data['alamat'],
            'no_hp' => $data['no_hp'],
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil ditambahkan.');
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
