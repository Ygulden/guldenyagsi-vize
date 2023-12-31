<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\IlanController;

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

Route::get('/',[AdminController::class,'index']);


// Route::get('/kategoriliste',[KategoriController::class,'katliste']);


Route::resource('/ilan', IlanController::class);
Route::get('/ilanliste',[IlanController::class,'ilanliste']);
Route::get('/ilaneklefrm', [IlanController::class, 'ilanliste']);
Route::post('/ilanekle', [IlanController::class, 'ilanekle']);
Route::get('/ilanarafrm', [IlanController::class, 'ilanarafrm']);
Route::post('/ilanara', [IlanController::class, 'ilanara']);


Route::resource('/kat', KategoriController::class);
Route::get('/katliste',[KategoriController::class,'katliste']);
Route::get('/kateklefrm', [KategoriController::class, 'katliste']);
Route::post('/katekle', [KategoriController::class, 'katekle']);
Route::get('/katarafrm', [KategoriController::class, 'katarafrm']);
Route::post('/katara', [KategoriController::class, 'katara']); //soldaki view adı - sağdaki action adı

/*
Route::get('/', function()
{
   return View::make('pages.home');
});
Route::get('/contact', function()
{
   return View::make('pages.contact');
});

*/