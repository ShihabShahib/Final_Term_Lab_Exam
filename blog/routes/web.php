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



Route::get('/','LoginController@index')->name('login.index');
Route::get('/logout','LogoutController@index')->name('logout.index');
Route::post('/',['uses'=>'LoginController@varify'] );
Route::get('/admin/home', 'HomeController@index')->name('admin.home');
Route::get('/admin/create', 'HomeController@create')->name('admin.create');
Route::post('/admin/create', 'HomeController@store');
Route::get('/admin/edit/{id}', 'HomeController@edit')->name('admin.edit');
Route::post('/admin/edit/{id}', 'HomeController@update');
Route::get('/admin/delete/{id}', 'HomeController@delete')->name('admin.delete');
Route::get('/employee/home', 'EmpController@index')->name('employee.home');