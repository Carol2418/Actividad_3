<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenticesController;

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

Route::get('apprentice',[ ApprenticesController::class,'index'])->name('apprentice.index');
Route::get('apprentice/{id}',[ ApprenticesController::class,'show'])->name('apprentice.show');
Route::get('apprentice/{id}/edit',[ ApprenticesController::class,'edit'])->name('apprentice.edit');
Route::put('apprentice/{id}',[ ApprenticesController::class,'update'])->name('apprentice.update');
