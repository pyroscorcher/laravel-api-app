<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use App\Models\User;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', ['title' => 'Data Mahasiswa', 'mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create', ['title' => 'Tambah Data Mahasiswa', 'user' => User::all(), 'prodi' => Prodi::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => ['required'],
            'prodi_id' => ['required'],
            'nim' => ['required'],
            'jenis_kelamin' => ['required'],
            'kelas' => ['required']
        ], [
            'user_id.required' => 'User harus dipilih',
            'prodi_.required' => 'Prodi harus dipilih',
            'nim.required' => 'NIM harus diisi',
            'hp.required' => 'HP harus diisi',
            'jenis_kelamin.required' => 'Jenis kelamin harus dipilih',
            'kelas.required' => 'Kelas harus diisi',
        ]);

        if (Mahasiswa::create([
            'user_id' => $request->user_id,
            'prodi_id' => $request->prodi_id,
            'nim' => $request->nim,
            'jenis_kelamin' => $request->jenis_kelamin,
            'kelas' => $request->kelas
        ])) {
            return redirect('/mahasiswa');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if (Mahasiswa::where('id', $id)->delete()) {
            return redirect('/mahasiswa');
        }
    }
}
