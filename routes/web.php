<?php

use App\Http\Controllers\resepController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [resepController::class, 'index']);
Route::get('/master-katagori', [resepController::class, 'index_katagori']);
Route::get('katagori/{katagori}/Allkatagori', [resepController::class, 'lihat_katagori']);
Route::post('/proses_input', [resepController::class, 'store_resep']);
Route::get('/resep/{resep}/lihat_resep', [resepController::class, 'lihat_resep']);
Route::post('/proses_input_katagori', [resepController::class, 'store_katagori']);
Route::delete('/delete_katagori/{id}', [resepController::class, 'destroy_katagori']);
Route::delete('/delete_resep/{id}', [resepController::class, 'destroy_resep']);
Route::get('katagori/{katagori}/edit_katagori', [resepController::class, 'edit_katagori']);
Route::post('/update_katagori/{id}', [resepController::class, 'update_katagori']);
Route::get('resep/{resep}/edit_resep', [resepController::class, 'edit_resep']);
Route::post('/update_resep/{id}', [resepController::class, 'update_resep']);
