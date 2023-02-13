<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SongController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Song;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $song = Song::distinct('titulo')->get();

    return Inertia::render('Shop', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'cancionesHome' => $song,
    ]);
});

// Route::get('/dashboard', function () {
//     return Inertia::render('DashboardMusic');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/dashboard', [SongController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


// Route::post('store', [CursoController::class, 'store'])->name('cursos-store');

// Route::prefix('addMusic')->group(function () {
//     Route::post('store', [CursoController::class, 'store'])->name('cursos-store');
// });

Route::middleware('auth')->group(function () {
    // Route::get('/addMusic', [ProfileController::class, 'edit'])->name('profile.edit');

    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::post('/addMusic', [CursoController::class, 'store'])->name('cursos-store');
    // Route::get('/show{id}', [ProfileController::class, 'show'])->name('profile.show');
});

Route::prefix('/dashboard')->group(function () {

    Route::get('create', [SongController::class, 'create'])->name('song-create');
    Route::post('store', [SongController::class, 'store'])->name('song-store');
    Route::get('edit/{id}', [SongController::class, 'edit'])->name('song-edit');
    Route::post('update/{id}', [SongController::class, 'update'])->name('song-update');
    Route::get('destroy/{id}', [SongController::class, 'destroy'])->name('song-destroy');
});


require __DIR__ . '/auth.php';
