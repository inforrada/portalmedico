<?php

use App\Http\Controllers\DoctorController;
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


Route::get('/pedircita', [HomeController::class, 'index'])->name('falsa');

Route::get('/principio/{name}/ver/{surname}', [HomeController::class, 'index'])->name('index');


Route::get('/fin', [HomeController::class, 'end'])->name('fin');
Route::get('/end', [HomeController::class, 'end'])->name('end');
Route::post('/fin', [HomeController::class, 'save'])->name('savefile');

Route::prefix ('patients')->group (function () {
    Route::get('/index', function () {
       return view ('patients.index', ['nombre' => 'David Martinez']);
    })->name('patients.main');
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


Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');

Route::get('/doctors/create', [DoctorController::class, 'create'])->name ('doctors.create');
Route::post('/doctors/store', [DoctorController::class, 'store'])->name('doctors.store');

Route::get('/doctors/{id}/edit', [DoctorController::class, 'edit'])->name ('doctors.edit');
Route::put('/doctors/{id}', [DoctorController::class, 'update'])->name('doctors.update');

Route::delete('/doctors/{id}', [DoctorController::class, 'destroy'])->name('doctors.destroy');

Route::get('/doctors/{id}', [DoctorController::class, 'show'])->name ('doctors.show');


