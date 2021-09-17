<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenticesController;
use App\Http\Controllers\StudiesDayController;
use \App\Http\Controllers\FileProgramController;

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
Route::get('apprentice1/create',[ ApprenticesController::class,'create'])->name('apprentice.create');
Route::post('apprentice',[ ApprenticesController::class,'store'])->name('apprentice.store');
Route::delete('apprentice/{id}',[ ApprenticesController::class,'destroy'])->name('apprentice.destroy');

Route::get('day',[ StudiesDayController::class,'index'])->name('day.index');
Route::get('day/{id}',[ StudiesDayController::class,'show'])->name('day.show');
Route::get('day/{id}/edit',[ StudiesDayController::class,'edit'])->name('day.edit');
Route::put('day/{id}',[ StudiesDayController::class,'update'])->name('day.update');
Route::get('day1/create',[ StudiesDayController::class,'create'])->name('day.create');
Route::post('day',[ StudiesDayController::class,'store'])->name('day.store');
Route::delete('day/{id}',[ StudiesDayController::class,'destroy'])->name('day.destroy');

Route::get('program',[FileProgramController::class,'index'])->name('program.index');
Route::get('program/{id}',[ FileProgramController::class,'show'])->name('program.show');
Route::get('program/{id}/edit',[ FileProgramController::class,'edit'])->name('program.edit');
Route::put('program/{id}',[ FileProgramController::class,'update'])->name('program.update');
Route::get('program1/create',[ FileProgramController::class,'create'])->name('program.create');
Route::post('program',[ FileProgramController::class,'store'])->name('program.store');
Route::delete('program/{id}',[ FileProgramController::class,'destroy'])->name('program.destroy');
