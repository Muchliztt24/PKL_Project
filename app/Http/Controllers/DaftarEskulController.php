<?php

namespace App\Http\Controllers;

use App\Models\Daftar_Eskul;
use App\Models\Eskul;
Use App\Models\User;
use Illuminate\Http\Request;

class DaftarEskulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $daftarEskul = Daftar_Eskul::all();
        return view('daftar_eskul.index', compact('daftarEskul'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $daftarEskul = Daftar_Eskul::all();
        $eskul = Eskul::all();
        $user = User::all();
        return view('daftar_eskul.create', compact('eskul', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required|exists:users,id',
            'kelas' => 'required|string|max:50',
            'eskul_id' => 'required|exists:eskuls,id',
            'no_telp' => 'nullable|string|max:15',
            'alasan' => 'nullable|string|max:255',
        ]);

        Daftar_Eskul::create($request->all());
        return redirect()->route('daftar_eskul.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Daftar_Eskul $daftar_Eskul)
    {
        $daftarEskul = Daftar_Eskul::all();
        $eskul = Eskul::all();
        $user = User::all();
        return view('daftar_eskul.create', compact('daftarEskul', 'eskul', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Daftar_Eskul $daftar_Eskul)
    {
        return view('daftar_eskul.edit', compact('daftar_Eskul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Daftar_Eskul $daftar_Eskul)
    {
        $this->validate($request, [
            'user_id' => 'required|exists:users,id',
            'kelas' => 'required|string|max:50',
            'eskul_id' => 'required|exists:eskuls,id',
            'no_telp' => 'nullable|string|max:15',
            'alasan' => 'nullable|string|max:255',
        ]);

        $daftar_Eskul->update($request->all());
        return redirect()->route('daftar_eskul.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Daftar_Eskul $daftar_Eskul)
    {
        $daftar_Eskul->delete();
        return redirect()->route('daftar_eskul.index')->with('success', 'Data berhasil dihapus');
    }
}
