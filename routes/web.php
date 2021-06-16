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
    return redirect('login');
});

Auth::routes(['auth' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
	//Reportes
	Route::get('reporte/ventas-gastos', function(){
		return view('tacticos.ventas-gastos');
	})->name('ventas-gastos');
	Route::get('reporte/control-costos', function(){
		return view('Estrategicos.control-costos');
	})->name('control-costos');
	
	//------Tacticos
	Route::get('reporte/control-proporcion', function(){
		return view('tacticos.control-proporcion');
	})->name('control-proporcion');
	Route::get('reporte/compras-categoria', function(){
		return view('tacticos.compras-categoria');
	})->name('compras-categoria');
	Route::get('reporte/uso-insumos', function(){
		return view('tacticos.uso-insumos');
	})->name('uso-insumos');
	Route::get('reporte/productos-elaborados', function(){
		return view('tacticos.productos-elaborados');
	})->name('productos-elaborados');

	//------Estrategicos
	Route::get('reporte/costos-entrega', function(){
		return view('Estrategicos.costos-entrega');
	})->name('costos-entrega');
	Route::get('reporte/productos-entregados', function(){
		return view('Estrategicos.productos-entregados');
	})->name('productos-entregados');

});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);	
});

