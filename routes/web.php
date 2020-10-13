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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'administrator'], function () {

        Route::get('dashboard', function(){
            return view('dashboard');
        })->name('dashboard');

        Route::resource('user', 'Backend\UserController');
        Route::resource('tentang', 'Backend\TentangController');
        Route::resource('kontak', 'Backend\KontakController');
        Route::resource('member', 'Backend\MemberController');
        Route::resource('berita', 'Backend\BeritaController');

    });

});
