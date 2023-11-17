<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doctors\DoctorController;

$arrayMiddle = ['filter'];

Route::get('/doctores', [DoctorController::class, 'index'])->name('doctors.index');
    
Route::middleware(['filter'])->group(function () {
    Route::get('/doctors/create', [DoctorController::class, 'create'])->name ('doctors.create');
    Route::post('/doctors/store', [DoctorController::class, 'store'])->name('doctors.store');
});

Route::get('/doctors/{id}/edit', [DoctorController::class, 'edit'])->name ('doctors.edit');
Route::put('/doctors/{id}', [DoctorController::class, 'update'])->name('doctors.update');

Route::patch('/doctors/{id}/delete', [DoctorController::class, 'softdelete'])->name('doctors.softdelete');

Route::delete('/doctors/{id}', [DoctorController::class, 'destroy'])->name('doctors.destroy');

Route::get('/doctors/{id}', [DoctorController::class, 'show'])->name ('doctors.show');

Route::get('/doctor/{nombre}', [DoctorController::class, 'show'])->name ('doctors.nombre');

