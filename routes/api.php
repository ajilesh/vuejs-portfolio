<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\AboutController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\SkillsController;
use App\Http\Controllers\Api\ResumeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::apiResource('/product',ProductController::class);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/profile',[ProfileController::class,'index'])->name('profile');
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::post('/contact',[ContactController::class,'index'])->name('contact');
//service controller
Route::get('/service',[ServiceController::class,'index'])->name('service');
//skills controller
Route::get('/skills',[SkillsController::class,'index'])->name('skills');
//resume controller
Route::get('/resume',[ResumeController::class,'index'])->name('resume');
