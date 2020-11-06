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

Route::get('/', function () {
    return view('frontend.home.home');
});

Route::get('tentang', function () {
    return view('frontend.tentang.tentang');
});

Route::get('kontak', function () {
    return view('frontend.kontak.kontak');
});

Route::get('berita', 'Frontend\FBeritaController@index');

Route::get('berita/{slug}', 'Frontend\FBeritaController@show');

Route::group(['prefix' => 'member'], function () {
    Route::get('/', function ()
    {
        return view('frontend.member.list-member');
    });
    Route::get('daftar-member', 'Frontend\FMemberController@index');
    Route::post('submit-member', 'Frontend\FMemberController@store')->name('member.submit');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'administrator'], function () {

        Route::get('dashboard', function(){
            return view('dashboard');
        })->name('dashboard');

        Route::resource('user', 'Backend\UserController');
        Route::get('struktur', 'Backend\TentangController@struktur');
        Route::put('update-struktur/{id}', 'Backend\TentangController@updateStruktur')->name('update-struktur');
        Route::resource('tentang', 'Backend\TentangController');
        Route::resource('kontak', 'Backend\KontakController');
        Route::get('member/approve/{id}', 'Backend\MemberController@approve')->name('member.approve');
        Route::get('member/disapprove/{id}', 'Backend\MemberController@approve')->name('member.disapprove');
        Route::resource('member', 'Backend\MemberController');
        Route::resource('berita', 'Backend\BeritaController');

    });

});
