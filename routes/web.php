<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;

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

include "doctors/web.php";


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






Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');

Route::get('/patients/create', [PatientController::class, 'create'])->name ('patients.create');
Route::post('/patients/store', [PatientController::class, 'store'])->name('patients.store');

Route::get('/patients/{patient}/edit', [PatientController::class, 'edit'])->name ('patients.edit');
Route::put('/patients/{patient}', [PatientController::class, 'update'])->name('patients.update');

Route::delete('/patients/{patient}', [PatientController::class, 'destroy'])->name('patients.destroy');

Route::get('/patients/{patient}', [PatientController::class, 'show'])->name ('patients.show');


Route::get('/suma/{a}/{b}', [HomeController::class, 'suma'])->name('sumar');