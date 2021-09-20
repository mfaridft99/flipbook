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
Route::get('/', 'UploadController@mainmenu');
Route::get('/flipbook/{id}','UploadController@flipbook');
Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
Route::get('/hapus/{id}','UploadController@hapus');
Route::get('/download/{file}','UploadController@download');
Route::get('/search','UploadController@search');
Route::get('/edit/{id}','UploadController@edit');
Route::put('/edit/proses/{id}','UploadController@update');

