<?php


use Illuminate\Support\Facades\Route;
use App\Models\siswa;
use App\Http\Controllers\SiswaController;

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
    return view('welcome');
});

Route::get('/siswa', function () {
    return view('siswas.index', [
        'siswas' => siswa::get()
    ]);
});

Route::get('/siswas', [SiswaController::class, 'index']) -> name('siswas.index');

Route::get('/siswas/tambah', [SiswaController::class, 'tambah'])-> name('siswas.tambah');

Route::post('/siswas', [SiswaController::class, 'simpan']) -> name('siswas.simpan');

Route::get('/siswas/{id}/edit', [SiswaController::class, 'edit']) -> name('siswas.edit');

Route::put('/siswas/{id}', [SiswaController::class, 'update']) -> name('siswas.update');

Route::delete('/siswas/{id}', [SiswaController::class, 'hapus']) -> name('siswas.hapus');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
