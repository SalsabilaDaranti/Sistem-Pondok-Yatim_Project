<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PengasuhController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\AnakAsuhController;
use App\Http\Controllers\KebutuhanController;
use App\Http\Controllers\LaporanController;


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
    return view('beranda');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('pengasuh', PengasuhController::class);
	Route::resource('donasi', DonasiController::class);
	Route::resource('anakasuh', AnakAsuhController::class);
	Route::resource('kebutuhan', KebutuhanController::class);
	Route::resource('laporan', LaporanController::class);

	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

