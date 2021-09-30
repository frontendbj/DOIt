<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\VisitController;
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
Route::get('/', [ProgramController::class, 'index'])->name('home');
Route::resource('visits', VisitController::class);
Route::resource('programs',  ProgramController::class);
Route::get('/programmes/see/', [ProgramController::class, 'seeBoard'])->name('programmes.board');
Route::get('/programmes/display/data', [ProgramController::class, 'getData'])->name('schedule.getdata');
/*
Route::get('/', function () {
    return view('home');
});*/


