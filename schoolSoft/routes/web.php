<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EleveController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('info', function () {
//     return view('info');
// });
Route::get('/', [EleveController::class, 'index'])->name('welcome');
Route::get('eleve/create', [EleveController::class, 'createEleve'])->name('eleve.create');
Route::post('sauve', [EleveController::class, 'sauveEleve'])->name('sauveEleve');
Route::get('eleves', [EleveController::class, 'mesEleves'])->name('eleves');
Route::get('eleve/detail/{id}', [EleveController::class, 'detailEleve'])->name('eleve.detail');
