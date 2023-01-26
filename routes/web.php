<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

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


Route::get('etudiant', [etudiantController::class, 'index'])->name('etudiant.index');
Route::get('etudiant/{etudiant}', [etudiantController::class, 'show'])->name('etudiant.detail');
Route::get('etudiant-create', [etudiantController::class, 'create'])->name('etudiant.create');
Route::post('etudiant-create', [etudiantController::class, 'store']); // pas besoin de nom 
Route::get('etudiant-edit/{etudiant}', [etudiantController::class, 'edit'])->name('etudiant.edit');
Route::put('etudiant-edit/{etudiant}', [etudiantController::class, 'update']);
Route::delete('etudiant-edit/{etudiant}', [etudiantController::class, 'destroy']);

