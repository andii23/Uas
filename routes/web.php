<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mhController;
use App\Http\Controllers\mkController;
use App\Http\Controllers\gabungController;

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
    return view('welcome');
});
//Route utk logout
Route::get('/home/logout',[gabungController::class,'logout'])->name('home.logout');
Route::get('/mahasiswa/logout',[mhController::class,'logout'])->name('mahasiswa.logout');
Route::get('/matkul/logout',[mkController::class,'logout'])->name('matkul.logout');

Route::resource('/mahasiswa',mhController::class);
Route::resource('/matkul',mkController::class);
Route::resource('/home',gabungController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
