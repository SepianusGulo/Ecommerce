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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pesan/{id}', 'PesanController@index')->name('pesan.index');
Route::post('/pesan/{id}', 'PesanController@pesan')->name('pesan.pesan');
Route::get('check-out', 'PesanController@check_out');
Route::delete('check-out/{id}', 'PesanController@delete');

Route::get('konfirmasi-check-out', 'PesanController@konfirmasi');

Route::get('profile', 'ProfileController@index');
Route::post('profile', 'ProfileController@update');

Route::get('history', 'HistoryController@index');
Route::get('history/{id}', 'HistoryController@detail');






//BACKEND
Route::get('/signin', 'Backend\AuthController@index')->name('signin');
Route::post('/postlogin', 'Backend\AuthController@postlogin')->name('postlogin');
Route::get('/logout', 'Backend\AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth', 'checkRole:admin,siswa']], function () {
    Route::get('/dashboard', 'Backend\DashboardController@index')->name('dashboard');
});

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
    Route::get('/siswa', 'Backend\SiswaController@index')->name('siswa');
    Route::post('/siswa/create', 'Backend\SiswaController@create')->name('siswa.create');
    Route::get('/siswa/{id}/edit', 'Backend\SiswaController@edit')->name('siswa.edit');
    Route::post('/siswa/{id}/update', 'Backend\SiswaController@update')->name('siswa.update');
    Route::get('/siswa/{id}/delete', 'Backend\SiswaController@delete')->name('siswa.delete');
    Route::get('/siswa/{id}/profile', 'Backend\SiswaController@profile')->name('profile');
    Route::post('/siswa/{id}/addnilai', 'Backend\SiswaController@addnilai')->name('addnilai');
    Route::get('/siswa/{id}/{idmapel}/deletenilai', 'Backend\SiswaController@deletenilai')->name('deletenilai');
    Route::get('/user', 'Backend\UserController@index')->name('user');
});
