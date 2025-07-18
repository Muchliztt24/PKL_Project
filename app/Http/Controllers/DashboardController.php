<?php

namespace App\Http\Controllers;
use App\Models\Daftar_Eskul;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
         $data = Daftar_Eskul::select('tahun_ajaran')->selectRaw('count(*) as jumlah')->groupBy('tahun_ajaran')->orderBy('tahun_ajaran')->get();

        $chartLabels = $data->pluck('tahun_ajaran');
        $chartJumlah = $data->pluck('jumlah');

        return view('admin.index', compact('chartLabels', 'chartJumlah'));
    }
}
