<?php

use App\Http\Controllers\AutoBuscaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\{
    AdminController
};

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [ProfilesController::class, 'index']);
Route::get('/editprofile/{id}', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('editprofile');
route::put('/editprofile/{id}',[App\Http\Controllers\ProfilesController::class, 'update'])->name('update'); 

Route::get('/profile', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile');

Route::get('/valores', function () {    return view('valores'); });

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/admin/profile/{id}', [App\Http\Controllers\AdminController::class, 'profile'])->name('admin.profile');

Route::get('/admin/editprofile/{id}', [App\Http\Controllers\AdminController::class, 'edit'])->name('admin.editprofile');
route::put('/admin/editprofile/{id}',[App\Http\Controllers\AdminController::class, 'update'])->name('adminupdate'); 



Route::get('/admin/editvalores/{id}', [App\Http\Controllers\AdminController::class, 'editvalores'])->name('editvalores');
route::put('/admin/editvalores/{id}',[App\Http\Controllers\AdminController::class, 'updatevalores'])->name('adminupdate1'); 




Route::get('/buscar', [AutoBuscaController::class, 'index']);

Route::get('/buscar/action', [AutoBuscaController::class, 'action'])->name('buscar.action');


