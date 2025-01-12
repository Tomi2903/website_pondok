<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PenerimaanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('public.pages.beranda');
});


Route::get('/admin_register', function () {
    return view('admin.pages.admin_register');
})->name('admin_register');


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin_penerimaan', function () {
        return view('admin.pages.admin_penerimaan');
    });

    Route::get('/admin_data_santri', [PendaftaranController::class, 'getallpendaftaran'])->name('admin.data_santri');

    Route::get('admin/pendaftaran/{id}/edit', [PendaftaranController::class, 'edit'])->name('admin.pendaftaran.edit');
    Route::put('admin/pendaftaran/{id}', [PendaftaranController::class, 'update'])->name('admin.pendaftaran.update');

    Route::post('/penerimaan/copy-pendaftaran', [PenerimaanController::class, 'copyPendaftaranToPenerimaan'])->name('penerimaan.copyPendaftaran');

    Route::get('/penerimaan', [PenerimaanController::class, 'index'])->name('penerimaan.index');
    Route::post('/penerimaan/store-manual', [PenerimaanController::class, 'storeManual'])->name('penerimaan.storeManual');
    Route::put('/penerimaan/{id}/update-status', [PenerimaanController::class, 'updateStatus'])->name('penerimaan.updateStatus');

    Route::POST('/reg', [DashboardController::class, 'registerAdmin'])->name('admin.pendaftaran');
});

Route::get('/pendaftaran', 
    [PendaftaranController::class, 'create']
);

Route::get('/profil', function () {
    return view('public.pages.profile');
});

Route::get('/informasi',    [PendaftaranController::class, 'index']);


Route::post('/informasi/save',    [PendaftaranController::class, 'store'])->name("savep");




Route::get('/sukses', function () {
    return view('public.pages.sukses');
})->name('public.pages.sukses');

Route::get('/', function () {
    return view('public.pages.beranda');
})->name('home');


require __DIR__.'/auth.php';
