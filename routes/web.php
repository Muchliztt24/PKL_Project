<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EskulController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PenerimaanController;
use App\Http\Controllers\DaftarEskulController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\IsAdminMiddleware;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(
    [
        'prefix' => 'admin',
        'as' => 'admin.',
        'middleware' => ['auth', IsAdminMiddleware::class],
    ],
    function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('eskul', EskulController::class);
        Route::resource('jadwal', JadwalController::class);
        Route::resource('daftar_eskul', DaftarEskulController::class)->parameters([
            'daftar_eskul' => 'daftar_Eskul',
        ]);
        Route::get('/filter-tahun', function (Illuminate\Http\Request $request) {
            session(['filter_tahun' => $request->tahun_ajaran]);
            return redirect()->back();
        })->name('filter.tahun');
        Route::post('/penerimaan/{id}/approve', [PenerimaanController::class, 'approve'])->name('admin.penerimaan.approve');
        Route::post('/penerimaan/{id}/reject', [PenerimaanController::class, 'reject'])->name('admin.penerimaan.reject');
        Route::post('/penerimaan/approve-menunggu', [PenerimaanController::class, 'approveMenunggu'])->name('admin.penerimaan.approveMenunggu');
        Route::post('/penerimaan/reject-menunggu', [PenerimaanController::class, 'rejectMenunggu'])->name('admin.penerimaan.rejectMenunggu');
        Route::resource('penerimaan', PenerimaanController::class);
    },
);
