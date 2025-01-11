<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PendaftaranTables;
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

Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin_penerimaan', function () {
        return view('admin.pages.admin_penerimaan');
    });

    Route::get('/admin_data_santri', function () {
        return view('admin.pages.admin_data_santri');
    });

    Route::get('/admin_register', function () {
        return view('admin.pages.admin_register');
    });

    

});

Route::get('/pendaftaran', 
    [PendaftaranTables::class, 'create']
);

Route::get('/profil', function () {
    return view('public.pages.profile');
});

Route::get('/informasi',    [PendaftaranTables::class, 'index']);


Route::post('/informasi/save',    [PendaftaranTables::class, 'store'])->name("savep");


Route::get('/testdash', function () {
    return view('admin.admin_data_santri');
});


Route::get('/admin_penerimaan', function () {
    return view('admin.pages.admin_penerimaan');
});

Route::get('/sukses', function () {
    return view('public.pages.sukses'); // Sesuaikan dengan lokasi file Blade Anda
})->name('public.pages.sukses');

Route::get('/', function () {
    return view('public.pages.beranda');
})->name('home');


require __DIR__.'/auth.php';
