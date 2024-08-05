<?php

use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'index'])->name('index');

//routes pages
Route::get('/cookies', [PublicController::class, 'cookies'])->name('cookies');
Route::get('/casa', [PublicController::class, 'casa'])->name('casa');
Route::get('/escursioni', [PublicController::class, 'escursioni'])->name('escursioni');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route::post('/locale/{locale}', [PublicController::class, 'locale'])->name('locale'); 