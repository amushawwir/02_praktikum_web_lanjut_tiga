<?php

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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;


Route ::get('/Home', [HomeController::class,'home']);

Route :: prefix('category')->group(function(){
    Route::get('/Marbeledugames', [ProductController::class, 'product1']);
    Route::get('/Marbelandfriendskidsgames', [ProductController::class, 'product2']);
    Route::get('/Riristorybooks', [ProductController::class, 'product3']);
    Route::get('/Kolakkidssongs', [ProductController::class, 'product4']);
});

Route ::get('/News/{id}', [NewsController::class,'news']);

Route :: prefix('list')->group(function(){
    Route::get('/Karir', [ProgramController::class, 'program1']);
    Route::get('/Magang', [ProgramController::class, 'program2']);
    Route::get('/KunjunganIndustri', [ProgramController::class, 'program3']);
});

Route ::get('/Aboutus', [AboutUsController::class,'aboutus']);

Route ::get('/ContactUs', [ContactUsController::class,'contactus']);
