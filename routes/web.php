<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\BarangController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::get('/logout',[ProfileController::class,'logout']);
route::get('/tables',[PelayananController::class,'index']);
route::get('/forms',[PelayananController::class,'form']);

//read
route::get('/tables',[BarangController::class,'index'])->name('tables');
//create
route::get('/tables/create',[BarangController::class,'create']);
route::post('/tables/insertdata',[BarangController::class,'insertdata'])->name('insert.data');
//edit
route::get('/tables/{id}/edit',[BarangController::class,'edit']);
route::put('/tables/{id}',[BarangController::class,'update']);
//delete
route::delete('/tables/{id}',[BarangController::class,'destroy']);