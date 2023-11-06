<?php

use App\Http\Controllers\HomeController;
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
    return view('welcome');
});


Route::get('/principio/algo/ver/algomas', [HomeController::class, 'index'])->name('falsa');

Route::get('/principio/{name}/ver/{surname}', [HomeController::class, 'index'])->name('index');


Route::get('/fin', [HomeController::class, 'end'])->name('fin');
Route::get('/end', [HomeController::class, 'end'])->name('end');
Route::post('/fin', [HomeController::class, 'save'])->name('savefile');

Route::prefix ('patients')->group (function () {
    Route::get('/index', function () {
        return view ('patients.index');
    });
});

Route::prefix('nom')->group(
    function () {
        Route::get('/fin', [HomeController::class, 'end'])->name('nom.end');
    }
);

Route::prefix('vac')->group(
    function () {
        Route::get('/fin', [HomeController::class, 'end'])->name('vac.end');
    }
);