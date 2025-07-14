<?php

namespace App\Http\Controllers;
use App\Models\Daftar_Eskul;
use App\Models\Penerimaan;
use Illuminate\Http\Request;

class PenerimaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tahunAjaran = $request->input('tahun_ajaran', session('filter_tahun', null));

        if ($tahunAjaran) {
            session(['filter_tahun' => $tahunAjaran]);
        }

        $query = Penerimaan::with(['daftarEskul.user', 'daftarEskul.eskul']);

        if ($tahunAjaran) {
            $query->whereHas('daftarEskul', function ($q) use ($tahunAjaran) {
                $q->where('tahun_ajaran', $tahunAjaran);
            });
        }

        $disetujui = (clone $query)->where('persetujuan', 'disetujui')
        ->latest()
        ->paginate(8)
        ->appends($request->all());
        $ditolak = (clone $query)->where('persetujuan', 'ditolak')
        ->latest()
        ->paginate(8)
        ->appends($request->all());

        $menunggu = Daftar_Eskul::with(['user', 'eskul'])
            ->whereNotIn('id', Penerimaan::pluck('daftar_id'))
            ->when($tahunAjaran, function ($query) use ($tahunAjaran) {
                $query->where('tahun_ajaran', $tahunAjaran);
            })
            ->latest()
            ->paginate(10)
            ->appends($request->all());

        $semuaTahun = Daftar_Eskul::select('tahun_ajaran')->distinct()->pluck('tahun_ajaran');

        return view('admin.penerimaan.index', compact('disetujui', 'ditolak', 'menunggu', 'tahunAjaran', 'semuaTahun'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penerimaan = Penerimaan::all();
        $daftar_eskul = Daftar_Eskul::all();
        return view('admin.penerimaan.create', compact('daftar_eskul'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'daftar_id' => 'required|exists:daftar__eskuls,id',
            'persetujuan' => 'required',
            'catatan' => 'required|string|max:255',
        ]);

        $penerimaan = Penerimaan::create($request->all());
        return redirect()->route('admin.penerimaan.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penerimaan $penerimaan)
    {
        $penerimaan = Penerimaan::find($penerimaan->id);
        return view('admin.penerimaan.show', compact('penerimaan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penerimaan $penerimaan)
    {
        $penerimaan = Penerimaan::findOrFail($penerimaan->id);
        $daftarEskul = Daftar_Eskul::all();
        return view('admin.penerimaan.edit', compact('penerimaan', 'daftarEskul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penerimaan $penerimaan)
    {
        $request->validate([
            'daftar_id' => 'required|exists:daftar__eskuls,id',
            'persetujuan' => 'required',
            'catatan' => 'required|string|max:255',
        ]);
        $penerimaan->update($request->all());
        return view('admin.penerimaan.edit', compact('penerimaan'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penerimaan $penerimaan)
    {
        $penerimaan->delete();
        return redirect()->route('admin.penerimaan.index')->with('success', 'Data berhasil dihapus');
    }
    public function approve($id)
    {
        $data = Penerimaan::findOrFail($id);
        $data->update(['persetujuan' => 'disetujui']);
        return redirect()->back()->with('success', 'Penerimaan disetujui.');
    }

    public function reject($id)
    {
        $data = Penerimaan::findOrFail($id);
        $data->update(['persetujuan' => 'ditolak']);
        return redirect()->back()->with('success', 'Penerimaan ditolak.');
    }
    public function approveMenunggu(Request $request)
    {
        Penerimaan::create([
            'daftar_id' => $request->daftar_id,
            'persetujuan' => 'disetujui',
            'catatan' => 'Disetujui oleh admin',
        ]);

        return redirect()->back()->with('success', 'Pendaftaran berhasil disetujui.');
    }

    public function rejectMenunggu(Request $request)
    {
        Penerimaan::create([
            'daftar_id' => $request->daftar_id,
            'persetujuan' => 'ditolak',
            'catatan' => 'Ditolak oleh admin',
        ]);

        return redirect()->back()->with('success', 'Pendaftaran ditolak.');
    }
    public function filterTahun(Request $request)
    {
        session(['filter_tahun' => $request->tahun_ajaran]);
        return redirect()->back();
    }
}
