<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\ServiceController;
use App\Models\Service;

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
Route::name('web')->prefix('web')->group(function () {
    Route::get('/service',[ServiceController::class,'index'])->name('service');
    
});
